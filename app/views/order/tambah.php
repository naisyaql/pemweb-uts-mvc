<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Order</title>
</head>
<body>
    <div class="container-fluid py-2 px-5">
        <div class="row d-flex align-items-center mt-4">
            <div class="col-2">
                <h2 class="">Add New Order</h2>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-6">
                <form action="<?= BASEURL ?>/order/tambahData" method="POST"> <!-- Changed action URL -->
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User ID</label>
                            <input type="number" name="order_id_user" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail2" class="form-label">Order Code</label>
                            <input type="text" name="order_kode" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail3" class="form-label">Total Price</label>
                            <input type="number" name="order_ttl" class="form-control" id="exampleInputEmail3" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail4" class="form-label">Shipping Cost</label>
                            <input type="number" name="order_ongkir" class="form-control" id="exampleInputEmail4" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail5" class="form-label">Payment Deadline</label>
                            <input type="datetime-local" name="order_byr_deadline" class="form-control" id="exampleInputEmail5" aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <a href="<?= BASEURL ?>/order" class="btn btn-danger">Close</a>
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
