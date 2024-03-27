<div class="container-fluid py-2 px-5">
    <div class="row d-flex align-items-center mt-4">
        <div class="col-2">
            <h2 class="">Category List</h2>
        </div>
        <div class="col-1">
            <button type="button" class="btn btn-primary btn-sm tombolTambah" data-bs-toggle="modal"
                data-bs-target="#exampleModal">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-plus" width="16" height="16"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                    <path d="M12 5v14m0 -14h14m-14 0l14 14m-14 -14h14m-18 0l-6 6m0 -6l6 6" />
                </svg>
                Add Category
            </button>
        </div>
        <div class="col-2">
            <form action="<?= BASEURL ?>/kategori/searching" method="post">
                <div class="input-group">
                    <input type="text" name="cari_nama" class="form-control" placeholder="Search Name"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button type="submit" name="search" class="btn btn-primary" type="button"
                        id="button-addon2">Search</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row my-3">
        <div class="col-3">
            <?php Flasher::flash(); ?>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-8">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    <?php
                    $n = 1;
                    foreach ($data['kategori'] as $rowKategori) {
                    ?>
                    <tr>
                        <th scope="row"><?= $n++ ?></th>
                        <td><?= $rowKategori['kat_nama'] ?></td>
                        <td><?= $rowKategori['kat_keterangan'] ?></td>
                        <td>
                            <a href="<?= BASEURL ?>/kategori/edit/<?= $rowKategori['kat_ID'] ?>"
                                class="btn btn-warning btn-sm tombolEdit" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" data-kat_ID="<?= $rowKategori['kat_ID'] ?>">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-pencil"
                                    width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg>
                            </a>
                            <a href="<?= BASEURL ?>/kategori/deleteData/<?= $rowKategori['kat_ID'] ?>"
                                class="btn btn-danger btn-sm"
                                onclick="return confirm('Are you sure you want to delete this data?');">
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-trash"
                                    width="16" height="16" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 7l16 0" />
                                    <path d="M10 11l0 6" />
                                    <path d="M14 11l0 6" />
                                    <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                    <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>