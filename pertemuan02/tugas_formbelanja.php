<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="d-flex">
  <div class="col-8">
    <h3>Belanja Online</h3>
    <hr>
    <form method="POST" action="">
      <div class="form-group row">
        <label for="customer" class="col-4 col-form-label">Customer</label> 
        <div class="col-8">
          <input id="customer" name="customer" type="text" class="form-control">
        </div>
      </div>
      <div class="form-group row">
        <label class="col-4">Pilih Produk</label> 
        <div class="col-8">
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="kulkas"> 
            <label for="produk_0" class="custom-control-label">KULKAS</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="tv"> 
            <label for="produk_1" class="custom-control-label">TV</label>
          </div>
          <div class="custom-control custom-radio custom-control-inline">
            <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="mesin cuci"> 
            <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
          </div>
        </div>
      </div>
      <div class="form-group row">
        <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
        <div class="col-8">
          <input id="jumlah" name="jumlah" type="text" class="form-control">
        </div>
      </div> 
      <div class="form-group row">
        <div class="offset-4 col-8">
          <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
      <tr class="bg-primary text-white">
        <td colspan="2">Daftar Harga </td>
      </tr>
      <tr>
        <td>KULKAS</td>
        <td>: 3.100.000</td>
      </tr>
      <tr>
        <td>TV</td>
        <td>: 4.200.000</td>
      </tr>
      <tr>
        <td>MESIN CUCI</td>
        <td>: 3.800.000</td>
      </tr>
      <tr class="bg-primary text-white">
        <td colspan="2">Harga Bisa Berubah Setiap Saat</td>
      </tr>
  </table>
</div>
<hr>

<?php
if (isset($_POST['submit'])) {
    $customer = $_POST['customer'];
    $produk = $_POST['produk'];
    $jumlah = $_POST['jumlah'];

    switch ($produk) {
        case 'kulkas':
            $harga = 3100000;
            break;
        case 'tv':
            $harga = 4200000;
            break;
        case 'mesin cuci':
            $harga = 3800000;
            break;
        default:
            $harga = 0;
            break;
    }

    $total = $harga * $jumlah;

    echo "
    <div class='d-flex'>
    <div class='col-8'>
    <table class='table'>
        <tr>
            <td>$customer</td>
        </tr>
        <tr>
            <td>$produk</td>
        </tr>
        <tr>
            <td>$jumlah</td>
        </tr>
        <tr>
            <td>" . number_format($total, 2, ',', '.') . "</td>
        </tr>
    </table>
    </div>
    </div>
    ";
}
?> 
</body>
</html>