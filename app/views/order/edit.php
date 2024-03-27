<?php
foreach ($data['orders'] as $rowOrder) {
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
            <form action="<?= BASEURL ?>/order/editData" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="order_id" value="<?= $rowOrder['order_id'] ?>">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Order Code</label>
                        <input type="text" name="order_kode" class="form-control" id="exampleInputEmail1" value="<?= $rowOrder['order_kode'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail2" class="form-label">Total Amount</label>
                        <input type="text" name="order_ttl" class="form-control" id="exampleInputEmail2" value="<?= $rowOrder['order_ttl'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail3" class="form-label">Shipping Cost</label>
                        <input type="text" name="order_ongkir" class="form-control" id="exampleInputEmail3" value="<?= $rowOrder['order_ongkir'] ?>" aria-describedby="emailHelp" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail4" class="form-label">Payment Deadline</label>
                        <input type="datetime-local" name="order_byr_deadline" class="form-control" id="exampleInputEmail4" value="<?= date('Y-m-d\TH:i', strtotime($rowOrder['order_byr_deadline'])) ?>" aria-describedby="emailHelp" required>
                    </div>
                </div>
                <a href="<?= BASEURL ?>/order" class="btn btn-danger">Close</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

