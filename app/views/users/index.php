<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User List</title>
</head>

<body>
    <div class="container-fluid py-2 px-5">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-2">
                <h2 class="">User List</h2>
            </div>
            <div class="col-1">
                <a href="<?= BASEURL ?>/user/tambah" class="btn btn-primary btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="16"
                        height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                        stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                        <path d="M12 5v14" />
                        <path d="M5 12h14" />
                    </svg>
                    Add User
                </a>
            </div>
        </div>
        <div class="row my-3">
            <div class="col-3">
                <?php Flasher::flash(); ?>
            </div>
        </div>
        <table class="table table-hover mt-5">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">No.Hp</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
            $n = 1;
            foreach ($data['user'] as $row) {
            ?>
                <tr>
                    <th scope="row"><?= $n++ ?></th>
                    <td><?= $row['user_nama'] ?></td>
                    <td><?= $row['user_email'] ?></td>
                    <td><?= $row['user_alamat'] ?></td>
                    <td><?= $row['user_hp'] ?></td>
                    <td>
                        <a href="<?= BASEURL ?>/user/edit/<?= $row['user_id'] ?>"
                            class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= BASEURL ?>/user/deleteData/<?= $row['user_id'] ?>"
                            onclick="return confirm('Apakah anda yakin menghapus data ini?')"
                            class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                <?php
            }
            ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?= BASEURL ?>/js/script.js"></script>
</body>

</html>