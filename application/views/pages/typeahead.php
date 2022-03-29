<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row invoice layout-top-spacing layout-spacing">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

                <form id="formpinjam" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="<?php echo $this->security->get_csrf_token_name(); ?>" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    <div class="doc-container">
                        <div class="row">
                            <div class="col-xl-9">

                                <div class="invoice-content">

                                    <div class="invoice-detail-body">

                                        <div class="invoice-detail-header">

                                            <div class="row justify-content-between">
                                                <div class="col-xl-6 invoice-address-company">

                                                    <h4>Identitas Peminjam</h4>

                                                    <div class="invoice-address-company-fields">

                                                        <div class="form-group row">
                                                            <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">NIK*</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm" name="nikskpd" id="nikskpd" placeholder="Nomor e-KTP" autofocus>
                                                                <small id="isCompleteHelp" class="form-text" style="display: none; color: #2196f3;">The mask is already filled</small>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Instansi</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm" name="instansiskpd" id="instansiskpd" placeholder="Nama instansi" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="company-address" class="col-sm-3 col-form-label col-form-label-sm">Alamat</label>
                                                            <div class="col-sm-9">
                                                                <textarea name="alamatskpd" id="alamatskpd" rows="3" class="form-control form-control-sm" placeholder="Alamat instansi" disabled></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="company-name" class="col-sm-3 col-form-label col-form-label-sm">Nama</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm" name="penyewaskpd" id="penyewaskpd" placeholder="Nama lengkap" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="company-email" class="col-sm-3 col-form-label col-form-label-sm">Email</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm" name="emailskpd" id="emailskpd" placeholder="Alamat email" disabled>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row">
                                                            <label for="company-phone" class="col-sm-3 col-form-label col-form-label-sm">Hp</label>
                                                            <div class="col-sm-9">
                                                                <input type="text" class="form-control form-control-sm" name="phoneskpd" id="phoneskpd" placeholder="08xx-xxxx-xxxx" disabled>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div>


                                                <div class="col-xl-5 invoice-address-client">
                                                    <div class="upload mt-5 pr-md-4">
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Unggah foto e-KTP</p>

                                                        <div class="file-upload">

                                                            <div class="image-upload-wrap">
                                                                <input class="file-upload-input" type='file' name="skpdgambar" id="skpdgambar" onchange="readURL(this);" accept="image/*" capture disabled />
                                                                <div class="drag-text">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-upload-cloud" style="color: #ddd;">
                                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                                        <line x1="12" y1="12" x2="12" y2="21"></line>
                                                                        <path d="M20.39 18.39A5 5 0 0 0 18 9h-1.26A8 8 0 1 0 3 16.3"></path>
                                                                        <polyline points="16 16 12 12 8 16"></polyline>
                                                                    </svg>
                                                                    <p>Click to Upload Picture</p>
                                                                </div>
                                                            </div>
                                                            <div class="file-upload-content">
                                                                <img class="file-upload-image" src="#" alt="your image" />
                                                                <div class="">
                                                                    <a href="javascript:void(0);" onclick="removeUpload()" class="remove-image">

                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
                                                                            <circle cx="12" cy="12" r="10"></circle>
                                                                            <line x1="15" y1="9" x2="9" y2="15"></line>
                                                                            <line x1="9" y1="9" x2="15" y2="15"></line>
                                                                        </svg>

                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>


                                        <div class="widget-content widget-content-area clipboard-copy-input mt-3">

                                            <div class="clipboard" style="border-top: dashed 2px;">
                                                <div class="pr-4 pl-4">
                                                    <!-- <select class="form-control  basic" id="selectpicker" onchange="getData()">
                                                    </select> -->

                                                    <small class="form-text text-warning" style="margin-bottom: 10px;">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-alert-circle">
                                                            <circle cx="12" cy="12" r="10"></circle>
                                                            <line x1="12" y1="8" x2="12" y2="12"></line>
                                                            <line x1="12" y1="16" x2="12.01" y2="16"></line>
                                                        </svg>
                                                        Pastikan nama atau kode aset sudah sesuai.</small>
                                                    <input class="form-control" type="text" name="aset" id="autocomplete" placeholder="Masukan nama atau kode aset" />

                                                </div>
                                                <button class="mb-2 mt-3 ml-4 btn btn-primary" type="button" id="addaset" onclick="getaset()" disabled><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-copy">
                                                        <rect x="9" y="9" width="13" height="13" rx="2" ry="2"></rect>
                                                        <path d="M5 15H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2h9a2 2 0 0 1 2 2v1"></path>
                                                    </svg> Tambahkan</button>
                                            </div>
                                        </div>


                                        <div class="searchable-container p-4">
                                            <p class="ml-2">Daftar Pinjaman Aset</p>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="searchable-items">
                                                        <!-- item pinjam -->
                                                        <div class="items">
                                                            <input type="hidden" name="item[]" value="SCOOPY AG 152415 AI">
                                                            <div class="user-profile">
                                                                <img src="<?= base_url() ?>assets/img/90x90.jpg" alt="avatar">
                                                            </div>
                                                            <div class="user-name">
                                                                <p class="">SCOOPY AG 152415 AI</p>
                                                            </div>
                                                            <div class="user-status">
                                                                <span class="badge badge-primary">Kendaraan</span>
                                                            </div>
                                                            <div class="action-btn">
                                                                <a href="javascript:;" title="Hapus dari list" style="opacity: 0.5;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg></a>
                                                            </div>
                                                        </div>
                                                        <!-- end item pinjam -->
                                                        <!-- item pinjam -->
                                                        <div class="items">
                                                            <input type="hidden" name="item[]" value="JAMES D 2321323131">
                                                            <div class="user-profile">
                                                                <img src="<?= base_url() ?>assets/img/90x90.jpg" alt="avatar">
                                                            </div>
                                                            <div class="user-name">
                                                                <p class="">JAMES D 2321323131</p>
                                                            </div>
                                                            <div class="user-status">
                                                                <span class="badge badge-danger">Sertifikat</span>
                                                            </div>
                                                            <div class="action-btn">
                                                                <a href="javascript:;" title="Hapus dari list" style="opacity: 0.5;"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                                                        <line x1="18" y1="6" x2="6" y2="18"></line>
                                                                        <line x1="6" y1="6" x2="18" y2="18"></line>
                                                                    </svg></a>
                                                            </div>
                                                        </div>
                                                        <!-- end item pinjam -->

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group row invoice-note p-4">
                                            <label for="invoice-detail-notes" class="col-sm-12 col-form-label col-form-label-sm">Catatan:</label>
                                            <div class="col-sm-12">
                                                <textarea class="form-control" name="catatanpinjam" id="catatanpinjam" placeholder="" style="height: 88px;"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3">
                                <div class="make-me-sticky">
                                    <div class="invoice-actions" style="padding-top: 0px;">

                                        <div class="invoice-action-tax">

                                            <h5 style="color: #3b3f5c;">Durasi</h5>

                                            <div class="invoice-action-tax-fields">

                                                <div class="row">

                                                    <div class="col-12">

                                                        <div class="form-group mb-0">
                                                            <label for="type">Dari</label>
                                                            <input type="text" class="form-control form-control-sm" name="fromdate" id="due" placeholder="None">
                                                            <br>
                                                            <label for="type">Sampai</label>
                                                            <input type="text" class="form-control form-control-sm" name="todate" id="date" placeholder="Add date picker">
                                                        </div>

                                                    </div>

                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="invoice-actions-btn">

                                        <div class="invoice-action-btn">

                                            <div class="row">
                                                <div class="col-xl-12 col-md-4 mb-3">
                                                    <button type="button" id="saveform" class="btn btn-primary btn-send btn-block">Save</button>
                                                </div>
                                                <div class="col-xl-12 col-md-4">
                                                    <button type="button" id="resetform" class="btn btn-outline-primary btn-send btn-block">Reset</button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 All rights reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart">
                    <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                </svg></p>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->


</div>
<!-- END MAIN CONTAINER -->

<!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
<script src="<?= base_url() ?>assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/popper.min.js"></script>
<script src="<?= base_url() ?>assets/bootstrap/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="<?= base_url() ?>assets/js/app.js"></script>
<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="<?= base_url() ?>assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!--  BEGIN CUSTOM STYLE FILE  -->
<link href="<?= base_url() ?>assets/css/apps/invoice-add.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plugins/dropify/dropify.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/forms/theme-checkbox-radio.css">
<link href="<?= base_url() ?>plugins/flatpickr/flatpickr.css" rel="stylesheet" type="text/css">
<link href="<?= base_url() ?>plugins/flatpickr/custom-flatpickr.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/css/forms/custom-clipboard.css">
<link href="<?= base_url() ?>assets/css/elements/search.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>plugins/select2/select2.min.css">
<link href="<?= base_url() ?>plugins/autocomplete/autocomplete.css" rel="stylesheet" type="text/css" />
<style>
    /* make sticky element */
    .make-me-sticky {
        position: -webkit-sticky;
        position: sticky;
        top: 5em;
        /* padding: 0 15px; */
    }

    .file-upload {
        background-color: #ffffff;
    }

    .file-upload-btn {
        width: 100%;
        margin: 0;
        color: #fff;
        background: #1FB264;
        border: none;
        padding: 10px;
        border-radius: 4px;
        border-bottom: 4px solid #15824B;
        transition: all .2s ease;
        outline: none;
        text-transform: uppercase;
        font-weight: 700;
    }

    .file-upload-btn:hover {
        background: #1AA059;
        color: #ffffff;
        transition: all .2s ease;
        cursor: pointer;
    }

    .file-upload-btn:active {
        border: 0;
        transition: all .2s ease;
    }

    .file-upload-content {
        display: none;
        text-align: center;
    }

    .file-upload-input {
        position: absolute;
        margin: 0;
        padding: 0;
        width: 100%;
        height: 100%;
        outline: none;
        opacity: 0;
        cursor: pointer;
    }

    .image-upload-wrap {
        margin-top: 20px;
        border: 1px solid #ddd;
        position: relative;
        padding: 2em 0 2em 0;
        border-radius: 5px;
    }

    .image-dropping,
    .image-upload-wrap:hover {
        background-color: #ffffff;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    .image-title-wrap {
        padding: 0 15px 15px 15px;
        color: #222;
    }

    .drag-text {
        text-align: center;
    }

    .drag-text h3 {
        font-weight: 100;
        text-transform: uppercase;
        color: #15824B;
        padding: 60px 0;
    }

    .file-upload-image {
        max-height: 100%;
        max-width: 100%;
        margin: auto;
        /* padding: 20px 0 20px 0; */
        border-radius: 5px;
        margin-bottom: 5px;
    }

    .remove-image {
        transition: all .2s ease;
        outline: none;
        font-weight: 700;
    }

    .remove-image:hover {
        color: #333;
        transition: all .2s ease;
        cursor: pointer;
    }

    .remove-image:active {
        border: 0;
        transition: all .2s ease;
    }
</style>
<!--  END CUSTOM STYLE FILE  -->
<script src="<?= base_url() ?>plugins/dropify/dropify.min.js"></script>
<script src="<?= base_url() ?>plugins/flatpickr/flatpickr.js"></script>
<script src="<?= base_url() ?>plugins/autocomplete/jquery.autocomplete.js"></script>
<script src="<?= base_url() ?>plugins/select2/select2.min.js"></script>
<script src="<?= base_url() ?>plugins/input-mask/jquery.inputmask.bundle.min.js"></script>

<script>
    $('#resetform').on('click', function() {
        $('#formpinjam').trigger("reset");
        $('#instansiskpd').attr('disabled', true);
        $('#alamatskpd').attr('disabled', true);
        $('#penyewaskpd').attr('disabled', true);
        $('#emailskpd').attr('disabled', true);
        $('#phoneskpd').attr('disabled', true);
    });

    $('#saveform').on('click', function() {
        // const formData = $('#formpinjam').serializeArray();
        // const token = $('#formpinjam').attr('csrf-token');
        // formData.push({
        //     name: 'csrf_token',
        //     value: token
        // });
        // new opsi
        var fd = new FormData();
        var file_data = $('#skpdgambar').prop('files')[0]; // for multiple files
        fd.append("files", file_data);

        // if multiple file
        // for (var i = 0; i < file_data.length; i++) {
        //     fd.append("files[]", file_data[i]);
        // }

        // form data
        var other_data = $('#formpinjam').serializeArray();
        $.each(other_data, function(key, input) {
            fd.append(input.name, input.value);
        });

        $.ajax({
            url: '<?php echo site_url('pinjam/do_pinjam_aset') ?>',
            data: fd,
            dataType: 'JSON',
            contentType: false,
            processData: false,
            type: 'POST',
            success: function(data) {
                console.log(data);
            }
        });
        // ajax process
        // $.ajax({
        //     url: "<?php echo site_url('aset/do_buat_aset') ?>",
        //     method: "POST",
        //     dataType: "JSON",
        //     data: formData,
        //     success: function(response) {
        //         console.log(response);
        //         $('#formpinjam').attr('csrf-token', response.token);
        //         // $('#formpinjam').trigger("reset");
        //         swal({
        //             type: 'success',
        //             text: 'Data berhasil disimpan'
        //         }).then(function() {
        //             location.reload(true);
        //         })
        //         // $('.response').hide();
        //     }
        // })

    });

    // autocomplete all data aset
    
    $('#autocomplete').autocomplete({
        minChars: 1,
        serviceUrl: '<?= base_url() ?>aset/get_data_allaset?<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
        onSelect: function(suggestion) {
            $('#addaset').attr('disabled', false);
            // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        },
        onSearchComplete: function(query, suggestions) {
            $('#addaset').attr('disabled', true);
        },
        showNoSuggestionNotice: true,
        noSuggestionNotice: 'Sorry, no matching results',
    });

    function getaset() {
        const aset = $('#autocomplete').val();
        $('#autocomplete').val('');
        // alert(aset);
    }
    // $(document).ready(function() {
    //     // initialized load select data
    //     $("#selectpicker").select2({
    //         minimumResultsForSearch: -1,
    //         allowClear: true,
    //         placeholder: 'Pilih aset...',
    //         templateSelection: function(data, container) {
    //             // Add custom attributes to the <option> tag for the selected option
    //             $(data.element).attr('data-custom-attribute', data.customValue);
    //             return data.text;
    //         },
    //         ajax: {
    //             url: '<?= base_url() ?>aset/get_data_allaset?<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
    //             type: 'GET',
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(params) {
    //                 var query = {
    //                     search: params.term,
    //                     type: 'public'
    //                 }
    //                 // Query parameters will be ?search=[term]&type=public
    //                 return query;
    //             },
    //             processResults: function(response) {
    //                 return {
    //                     results: response
    //                 };
    //             },
    //             cache: true
    //         }
    //     });
    // });    

    // autocomplete all data skpd
    $('#nikskpd').autocomplete({
        minChars: 1,
        serviceUrl: '<?= base_url() ?>skpd/get_data_skpd?<?php echo $this->security->get_csrf_token_name(); ?>=<?php echo $this->security->get_csrf_hash(); ?>',
        onSelect: function(suggestion) {
            $('#skpdgambar').removeAttr('disabled');
            $("#nikskpd").inputmask("setvalue", suggestion.data);
            get_autofill(suggestion.data);
            // $('#addaset').attr('disabled', false);
            // alert('You selected: ' + suggestion.value + ', ' + suggestion.data);
        },
        onSearchComplete: function(query, suggestions) {
            // $('#addaset').attr('disabled', true);
        },
        showNoSuggestionNotice: true,
        noSuggestionNotice: 'Sorry, no matching results',
    });

    // date durations
    var currentDate = new Date();

    var f1 = flatpickr(document.getElementById('date'), {
        defaultDate: currentDate,
    });

    var f2 = flatpickr(document.getElementById('due'), {
        defaultDate: currentDate.setDate(currentDate.getDate() + 5),
    });

    // auto fill skpd
    function get_autofill(nik) {

        $('#instansiskpd').val(nik);
        console.log(nik)
    }
    // input mask
    $(document).ready(function() {
        $("#nikskpd").inputmask({
            mask: "9999-9999-9999-9999"
        });
        $("#phoneskpd").inputmask({
            mask: "9999-9999-9999"
        });
        $('#nikskpd').on('focus keyup', function(event) {
            event.preventDefault();
            if ($(this).inputmask("isComplete")) {
                // set enable input
                $('#instansiskpd').attr('disabled', false);
                $('#alamatskpd').attr('disabled', false);
                $('#penyewaskpd').attr('disabled', false);
                $('#emailskpd').attr('disabled', false);
                $('#phoneskpd').attr('disabled', false);
                $('#skpdgambar').removeAttr('disabled');
            } else {
                // set enable input
                $('#instansiskpd').attr('disabled', true);
                $('#alamatskpd').attr('disabled', true);
                $('#penyewaskpd').attr('disabled', true);
                $('#emailskpd').attr('disabled', true);
                $('#phoneskpd').attr('disabled', true);
                $('#skpdgambar').attr('disabled', true);
            }
        });
        // end masked        
    })

    // media file upload
    function readURL(input) {
        if (input.files && input.files[0]) {

            var reader = new FileReader();

            reader.onload = function(e) {
                $('.image-upload-wrap').hide();

                $('.file-upload-image').attr('src', e.target.result);
                $('.file-upload-content').show();

                // $('.image-title').html(input.files[0].name);
            };

            reader.readAsDataURL(input.files[0]);

        } else {
            removeUpload();
        }
    }

    function removeUpload() {
        $('.file-upload-input').replaceWith($('.file-upload-input').clone());
        $('.file-upload-content').hide();
        $('.image-upload-wrap').show();
    }
    $('.image-upload-wrap').bind('dragover', function() {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function() {
        $('.image-upload-wrap').removeClass('image-dropping');
    });
    // end media file upload
</script>

</body>

</html>