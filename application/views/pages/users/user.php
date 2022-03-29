<!--**********************************
    Content body start
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div align="right">
            <button type="button" class="btn btn-outline-dark mb-3" data-toggle="modal" data-target="#addkaryawan"><i class="fa fa-plus color-info"></i> User</button>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Users</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Register</th>
                                        <th>Role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                        $a=1;
                                        foreach ($users as $data): ?>
                                            <tr>
                                                <td><?= $a++ ?></td>
                                                <td><?= $data['nama']?></td>
                                                <td><?= $data['username'] ?></td>
                                                <td><?= substr($data['password'], 0,8) ?>...</td>
                                                <td><?= $data['register'] ?></td>
                                                <td><?= $data['role'] ?></td>
                                                <td>
                                                    <button type="button" class="btn btn-outline-dark edit_data" data-toggle="tooltip" data-placement="top" title="Edit User" id="<?= $data['user_id']  ?>"><i class="fa-solid 
                                                        fa-pen-to-square"></i></button>
                                                    <a href="<?= base_url() ?>users/deleted/<?= $data['user_id']  ?>" class="btn btn-outline-dark" data-toggle="tooltip" data-placement="top" title="Hapus User"><i class="fa-solid fa-trash-can"></i></a>
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
                    <form action="<?= base_url() ?>users/save" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="role">
                                    <option value="admin">Admin</option>
                                    <option value="karyawan">Karyawan</option>
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
          var uid = $(this).attr("id");
          var arrbulan = ["","Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
            $.ajax({
                url:"<?php echo base_url() ?>users/editUser",
                method:"POST",
                data:{uid:uid},
                success:function(data){
                    var user = JSON.parse(data);
                    window.onload=document.getElementById("userid");
                    window.onload=document.getElementById("name");
                    window.onload=document.getElementById("email");
                    window.onload=document.getElementById("username");
                    var User_id = document.getElementById("userid");
                    User_id.value = user.user_id;
                    var nama = document.getElementById("name");
                    nama.value = user.nama;
                    var email = document.getElementById("email");
                    email.value = user.email;
                    var username = document.getElementById("username");
                    username.value = user.username;
                    $('#edituser').modal('show');
               }
            });
        });
   });
</script> 

<!-- Modal -->
<div class="modal fade" id="edituser">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Karyawan</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="basic-form">
                    <form action="<?= base_url() ?>users/update" method="post">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="hidden" class="form-control" name="userid" id="userid">
                                <input type="text" class="form-control" name="nama" id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Username</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="password">
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