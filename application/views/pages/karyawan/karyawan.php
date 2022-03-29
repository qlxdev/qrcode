<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div align="right">
            <button type="button" class="btn btn-outline-dark mb-3" data-toggle="modal" data-target="#addkaryawan"><i class="fa fa-plus color-info"></i> Karyawan</button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Data Karyawan</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>QR Code</th>
                                        <th>NIP</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $a = 1;
                                    foreach ($karyawan as $key): ?>
                                        <tr>
                                            <td><img src="<?= base_url() ?>assets/images/qrcode/<?= $qrcode[$a-1]['qrcode'] ?>.png" style="width: 80px;"></td>
                                            <td><?= $key['nip'] ?></td>
                                            <td><?= $key['nama'] ?></td>
                                            <td><?= $key['email'] ?></td>
                                            <td>+62 <?= substr($key['phone'], 1,3).'-'.substr($key['phone'], 4,4).'-'.substr($key['phone'], 8,4) ?></td>
                                            <td>
                                                <button type="button" class="btn btn-outline-dark view_data" data-toggle="modal" data-target="#exampleModalLong" data-toggle="tooltip" data-placement="top" title="View Karyawan" id="<?= $key['nip'] ?>"><i class="fa-solid fa-eye"></i></button>
                                                <button type="button" class="btn btn-outline-dark edit_data" data-toggle="tooltip" data-placement="top" title="Edit Karyawan" id="<?= $key['nip'] ?>"><i class="fa-solid fa-pen-to-square"></i></button>
                                                <a href="<?= base_url() ?>karyawan/deleted/<?= $key['nip'] ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Hapus Karyawan"><i class="fa-solid fa-trash-can"></i></a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--**********************************
    Content body end
***********************************-->

<!-- Modal -->
<div class="modal fade" id="addkaryawan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form action="<?= base_url() ?>karyawan/save" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">NIP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nip">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="place">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <textarea type="text" class="form-control" name="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">No. Phone</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone"></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-10">
                                 <select class="form-control" name="gender">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Agama</label>
                            <div class="col-sm-10">
                                 <select class="form-control" name="agama">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12" align="right">
                                <button type="submit" class="btn btn-outline-dark">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<!-- View Modal Karywan -->
<script type="text/javascript">
 // Start jQuery function after page is loaded
   $(document).ready(function(){
        $(document).on('click', '.edit_data', function(){
          var id_karyawan = $(this).attr("id");
          var arrbulan = ["","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            $.ajax({
                url:"<?php echo base_url() ?>karyawan/editKaryawan",
                method:"POST",
                data:{id_karyawan:id_karyawan},
                success:function(data){
                    var karyawan = JSON.parse(data);
                    var place = karyawan.ttl.split(', ');
                    window.onload=document.getElementById("nip");
                    window.onload=document.getElementById("place");
                    window.onload=document.getElementById("name");
                    window.onload=document.getElementById("email");
                    window.onload=document.getElementById("phone");
                    document.getElementById("nip").innerHTML = karyawan.nip;
                    var nip = document.getElementById("nip");
                    nip.value = karyawan.nip;
                    var nama = document.getElementById("name");
                    nama.value = karyawan.nama;
                    var email = document.getElementById("email");
                    email.value = karyawan.email;
                    var phone = document.getElementById("phone");
                    phone.value = karyawan.phone;
                    var tempat = document.getElementById("place");
                    tempat.value = place[0];
                    document.getElementById("date").defaultValue = place[1];

                    document.getElementById("address").innerHTML = karyawan.address;
                    document.getElementById("agama").value = karyawan.agama;
                    document.getElementById("gender").value = karyawan.gender;
                    $('#editkaryawan').modal('show');
               }
            });
        });
   });
</script> 

<!-- Modal -->
<div class="modal fade" id="editkaryawan">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form action="<?= base_url() ?>karyawan/update" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" name="nip" id="nip">
                                <input type="text" class="form-control" name="nama" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tempat Lahir</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="place" id="place">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" class="form-control" name="date" id="date">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Alamat</label>
                            <div class="col-sm-9">
                                <textarea type="text" class="form-control" name="address" id="address"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">No. Phone</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                 <select class="form-control" name="gender" id="gender">
                                    <option value="L">Laki-Laki</option>
                                    <option value="P">Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Agama</label>
                            <div class="col-sm-9">
                                 <select class="form-control" name="agama" id="agama">
                                    <option value="islam">Islam</option>
                                    <option value="kristen">Kristen</option>
                                    <option value="hindu">Hindu</option>
                                    <option value="budha">Budha</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12" align="right">
                                <button type="submit" class="btn btn-outline-dark">Simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

<script type="text/javascript">
 // Start jQuery function after page is loaded
   $(document).ready(function(){
        $(document).on('click', '.view_data', function(){
          var id_karyawan = $(this).attr("id");
          var arrbulan = ["","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            $.ajax({
                url:"<?php echo base_url() ?>karyawan/getKaryawan",
                method:"POST",
                data:{id_karyawan:id_karyawan},
                success:function(data){
                    var karyawan = JSON.parse(data);
                    var place = karyawan.ttl.split(', ');
                    var nip = karyawan.nip;
                    $.ajax({
                        url:"<?php echo base_url() ?>karyawan/getQRCode",
                        method:"POST",
                        data:{nip:nip},
                        success:function(data){
                            var qrcode = JSON.parse(data);
                            console.log(qrcode)
                            document.getElementById("qrcode").src = '<?= base_url() ?>assets/images/qrcode/'+qrcode.qrcode+'.png';
                            var link = '<?= base_url() ?>assets/images/qrcode/'+qrcode.qrcode+'.png';
                            $('.qr').each(function(){
                                $(this).attr('href', link);
                            });
                        }
                    });
                    var emailkaryawan = karyawan.email;
                    $.ajax({
                        url:"<?php echo base_url() ?>karyawan/getAccount",
                        method:"POST",
                        data:{emailkaryawan:emailkaryawan},
                        success:function(data){
                            var account = JSON.parse(data);
                            document.getElementById("username").innerHTML = ': '+account.username;
                            document.getElementById("password").innerHTML = ': '+account.password.substr(0,8)+'...';
                        }
                    });
                    document.getElementById("nip1").innerHTML = ': '+karyawan.nip;
                    document.getElementById("nama1").innerHTML = ': '+karyawan.nama;
                    document.getElementById("ttl1").innerHTML = ': '+karyawan.ttl;
                    if (karyawan.gender==':') {
                        document.getElementById("gender1").innerHTML = ': Laki-Laki';
                    }else{
                        document.getElementById("gender1").innerHTML = ': Perempuan';
                    }
                    document.getElementById("address1").innerHTML = ': '+karyawan.address;
                    document.getElementById("email1").innerHTML = ': '+karyawan.email;
                    $('.bd-example-modal-lg').modal('show');
               }
            });
        });
   });
</script> 

<!-- Modal -->
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Detail Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-sm-4">
                        <div align="center">
                            <img src="" id="qrcode">
                            <h5><a href="" class="qr" download style="color:black">Genrete QR Code</a></h5>
                        </div>
                    </div>
                    <div class="col-sm-8 mt-4">
                        <div class="row">
                            <label class="col-sm-4">NIP</label>
                            <div class="col-sm-8">
                                <span id="nip1"></span>
                            </div>
                            <label class="col-sm-4">Nama</label>
                            <div class="col-sm-8">
                                <span id="nama1"></span>
                            </div>
                            <label class="col-sm-4">Tempat, Tanggal Lahir</label>
                            <div class="col-sm-8">
                                <span id="ttl1"></span>
                            </div>
                            <label class="col-sm-4">Jenis Kelamin</label>
                            <div class="col-sm-8">
                                <span id="gender1"></span>
                            </div>
                            <label class="col-sm-4">Alamat</label>
                            <div class="col-sm-8">
                                <span id="address1"></span>
                            </div>
                            <label class="col-sm-4">Username</label>
                            <div class="col-sm-8">
                                <span id="username"></span>
                            </div>
                            <label class="col-sm-4">Email</label>
                            <div class="col-sm-8">
                                <span id="email1"></span>
                            </div>
                            <label class="col-sm-4">Password</label>
                            <div class="col-sm-8">
                                <span id="password"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 mt-5">
                        <h5 style="color:black">Riwayat</h5>
                        <div class="table-responsive">
                            <table class="table student-data-table m-t-20">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Hari</th>
                                        <th>Tanggal</th>
                                        <th>Jam Masuk</th>
                                        <th>Jam Pulang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Class Test</td>
                                        <td>Mathmatics</td>
                                        <td>
                                            4.00
                                        </td>
                                        <td>
                                            95.00
                                        </td>
                                        <td>20/04/2017</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- Button trigger modal -->

