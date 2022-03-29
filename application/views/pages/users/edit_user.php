 <div class="content-body">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Edit Users</h4>
            </div>
            <div class="card-body">
                <div class="basic-form">
                    <form action="<?= base_url() ?>users/update" method="post">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-10">
                                <input type="hidden" name="id" value="<?= $user['user_id'] ?>">
                                <input type="text" class="form-control" name="nama" value="<?= $user['nama'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" name="email" value="<?= $user['email'] ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="username" value="<?= $user['username'] ?>">
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
                                    <?php if ($user['role']=="admin"){ ?>
                                        <option value="admin">Admin</option>
                                    <?php }elseif ($user['role']=="karyawan") {?>
                                        <option value="karyawan">Karyawan</option>
                                    <?php } ?>
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