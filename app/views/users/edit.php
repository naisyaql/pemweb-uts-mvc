<?php
foreach ($data['user'] as $row) {
}
?>
<div class="container">
    <h2 class="my-3">Edit User</h2>
    <div class="row">
        <div class="col-md-6">
            <form action="<?= BASEURL ?>/user/editData" method="POST">
                <input type="hidden" name="user_id" value="<?= $row['user_id'] ?>">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama*</label>
                    <input type="text" name="user_nama" class="form-control" value="<?= $row['user_nama'] ?>" aria-describedby="emailHelp" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email*</label>
                    <input type="email" name="user_email" class="form-control" value="<?= $row['user_email'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password*</label>
                    <input type="password" name="user_password" class="form-control" value="<?= $row['user_password'] ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Alamat*</label>
                    <textarea class="form-control" name="user_alamat"><?= $row['user_alamat'] ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">No.Hp*</label>
                    <input type="text" name="user_hp" class="form-control" value="<?= $row['user_hp'] ?>">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= BASEURL ?>/user" name="save" class="btn btn-danger">Kembali</a>
            </form>
        </div>
    </div>
</div>

<?php include '../footer.php' ?>