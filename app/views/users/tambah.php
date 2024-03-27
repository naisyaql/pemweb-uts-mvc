<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add User</title>
</head>

<body>
    <div class="container-fluid py-2 px-5">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-2">
                <h2 class="my-3">Add User</h2>
                <div class="row">
                    <div class="col-md-6">
                        <form action="<?= BASEURL ?>/user/tambahData" method="post">
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama*</label>
                                <input type="text" name="user_nama" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Email*</label>
                                <input type="email" name="user_email" class="form-control" id="exampleInputPassword1"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password*</label>
                                <input type="password" name="user_password" class="form-control"
                                    id="exampleInputPassword1" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Alamat*</label>
                                <textarea class="form-control" name="user_alamat" id="exampleInputPassword1"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">No.Hp*</label>
                                <input type="text" name="user_hp" class="form-control" id="exampleInputPassword1">
                            </div>
                            <button type="submit" name="save" class="btn btn-primary">Close</button>
                            <a href="<?= BASEURL ?>/user" name="save" class="btn btn-danger">Submit</a>
                        </form>
                    </div>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
                crossorigin="anonymous"></script>
</body>

</html>