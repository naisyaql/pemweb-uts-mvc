<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
</head>
<body>
    <div class="container-fluid py-2 px-5">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-2">
                <h2 class="">Add New Product</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <form action="<?= BASEURL ?>/produk/tambahData" method="POST">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Product Code</label>
                            <input type="text" name="produk_kode" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label">Product Name</label>
                            <input type="text" name="produk_nama" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Price</label>
                            <input type="number" name="produk_hrg" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail4" class="form-label">Description</label>
                            <textarea name="produk_keterangan" class="form-control" id="exampleInputEmail4" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail5" class="form-label">Stock</label>
                            <input type="number" name="produk_stock" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail6" class="form-label">Photo</label>
                            <input type="text" name="produk_photo" class="form-control" id="exampleInputEmail6" aria-describedby="emailHelp">
                        </div>
                    </div>
                    <a href="<?= BASEURL ?>/produk" class="btn btn-danger">Close</a>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" 
    crossorigin="anonymous"></script>
</body>
</html>
