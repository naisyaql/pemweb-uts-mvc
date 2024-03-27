<?php
$act_home = "";
$act_produk = ""; // Changed from $act_buku to $act_produk
$act_order = ""; // Added for Order
if ($data['judul'] == 'Halaman Home') {
    $act_home = "active";
} elseif ($data['judul'] == 'Halaman Produk') { // Changed from 'Halaman Buku' to 'Halaman Produk'
    $act_produk = "active"; // Changed from $act_buku to $act_produk
} elseif ($data['judul'] == 'Halaman Order') { // Added for Order
    $act_order = "active"; // Added for Order
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $data['judul'] ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid py-2 px-5">
        <a class="navbar-brand" href="<?= BASEURL ?>">
            <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            MVC
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link <?= $act_home ?>" aria-current="page" href="<?= BASEURL ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $act_produk ?>" href="<?= BASEURL ?>/produk">Produk</a> <!-- Changed from '/buku' to '/produk' -->
                </li>
                <li class="nav-item">
                    <a class="nav-link <?= $act_order ?>" href="<?= BASEURL ?>/order">Order</a> <!-- Added for Order -->
                </li>
            </ul>
        </div>
    </div>
</nav>
