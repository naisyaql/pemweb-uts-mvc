<?php
foreach ($data['produk'] as $rowProduk) {
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
            <form action="<?= BASEURL ?>/produk/editData" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="produk_id" value="<?= $rowProduk['produk_id'] ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Product Code</label>
                        <input type="text" name="produk_kode" class="form-control" id="exampleInputEmail1" value="<?= $rowProduk['produk_kode'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label">Product Name</label>
                        <input type="text" name="produk_nama" class="form-control" id="exampleInputEmail2" value="<?= $rowProduk['produk_nama'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail3" class="form-label">Product Price</label>
                        <input type="text" name="produk_hrg" class="form-control" id="exampleInputEmail3" value="<?= $rowProduk['produk_hrg'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail4" class="form-label">Stock</label>
                        <input type="text" name="produk_stock" class="form-control" id="exampleInputEmail4" value="<?= $rowProduk['produk_stock'] ?>" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <a href="<?= BASEURL ?>/produk" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
