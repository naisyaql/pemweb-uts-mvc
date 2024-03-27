<?php
foreach ($data['kategori'] as $rowKategori) {
}
?>
<div class="container-fluid py-2 px-5">
    <div class="row d-flex align-items-center mt-4">
        <div class="col-2">
            <h2 class="">Edit Data</h2>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-6">
            <form action="<?= BASEURL ?>/kategori/editData" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="kat_ID" value="<?= $rowKategori['kat_ID'] ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category Name</label>
                        <input type="text" name="kat_nama" class="form-control" id="exampleInputEmail1"
                            value="<?= $rowKategori['kat_nama'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label">Description</label>
                        <textarea name="kat_keterangan" class="form-control" id="exampleInputEmail2" rows="3"
                            required><?= $rowKategori['kat_keterangan'] ?></textarea>
                    </div>
                </div>
                <a href="<?= BASEURL ?>/kategori" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>