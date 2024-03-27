$(function () {
  // Event handler for adding a new product
  $(".tombolTambahProduk").on("click", function () {
    $("#exampleModalLabel").html("Add Product");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/belajar_mvc/public/produk/tambahData"
    );

    // Clear input fields for product
    $(".produk_kode").val("");
    $(".produk_nama").val("");
    $(".produk_hrg").val("");
    $(".produk_stock").val("");
  });

  // Event handler for editing a product
  $(".tombolEditProduk").on("click", function () {
    $("#exampleModalLabel").html("Edit Product");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/belajar_mvc/public/produk/editData"
    );

    const produk_id = $(this).data("produk_id");

    // AJAX request to fetch product data
    $.ajax({
      url: "http://localhost/belajar_mvc/public/produk/ambilData",
      data: { produk_id: produk_id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".produk_kode").val(data[0].produk_kode);
        $(".produk_nama").val(data[0].produk_nama);
        $(".produk_hrg").val(data[0].produk_hrg);
        $(".produk_stock").val(data[0].produk_stock);
        $(".produk_id").val(data[0].produk_id);
      },
    });
  });

  // Event handler for adding a new order
  $(".tombolTambahOrder").on("click", function () {
    $("#exampleModalLabel").html("Add Order");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/belajar_mvc/public/order/tambahData"
    );

    // Clear input fields for order
    $(".order_id_user").val("");
    $(".order_kode").val("");
    $(".order_ttl").val("");
    $(".order_ongkir").val("");
    $(".order_byr_deadline").val("");
  });

  // Event handler for editing an order
  $(".tombolEditOrder").on("click", function () {
    $("#exampleModalLabel").html("Edit Order");
    $(".modal-dialog form").attr(
      "action",
      "http://localhost/belajar_mvc/public/order/editData"
    );

    const order_id = $(this).data("order_id");

    // AJAX request to fetch order data
    $.ajax({
      url: "http://localhost/belajar_mvc/public/order/ambilData",
      data: { order_id: order_id },
      method: "post",
      dataType: "json",
      success: function (data) {
        $(".order_id_user").val(data[0].order_id_user);
        $(".order_kode").val(data[0].order_kode);
        $(".order_ttl").val(data[0].order_ttl);
        $(".order_ongkir").val(data[0].order_ongkir);
        $(".order_byr_deadline").val(data[0].order_byr_deadline);
        $(".order_id").val(data[0].order_id);
      },
    });
  });
});
