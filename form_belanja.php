<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <title>Flexbox Example</title>
  <style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

.container {
  display: flex;
  flex-wrap: wrap;
}

.article-1 {
  flex: 1;
  padding: -20x;
  max-width: 100%;
}

.article-2 {
  flex: 1;
  padding: 20px;
  max-width: 40%;
}

.blue-row {
    background-color: #3498db;
}

table {
    width: 100%;
    border: 1px solid black
}
th, td {
border: 1px solid #ddd;
padding: 12px;
text-align: left;
}

</style>
</head>
<body>
  <div class="container">
    <article class="article-1">
    <h1>Belanja Online</h1>
    <hr>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<form method="POST" action="#">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="tv" type="radio" class="custom-control-input" value="TV"> 
        <label for="tv" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="kulkas" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="kulkas" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="mesin_cuci" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="mesin_cuci" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Kirim</button>
    </div>
  </div>
</form>

    </article>
    <article class="article-2">
    <table>
        <tr>
            <td class="blue-row">Daftar Harga</td>
        </tr>
        <tr>
            <td>TV: 4.200.000</td>
        </tr>
        <tr>
            <td>Kulkas: 3.100.000</td>
        </tr>
        <tr>
            <td>MESIN CUCI: 3.800.000</td>
        </tr>
        <tr>
            <td class="blue-row">Harga dapat berubah setiap saat</td>
        </tr>
    </table>
    </article>
  </div>
<hr>

<?php
$customer = $_POST['customer'];
$produk = $_POST['produk'];
$jumlah = $_POST['jumlah'];

// Pilihan radio untuk pilihan produk
    switch ($produk) {
        case 'TV':
            $harga_produk = 4200000;
            break;
        case 'KULKAS':
            $harga_produk = 3100000;
            break;
        case 'MESIN CUCI':
            $harga_produk = 3800000;
            break;
        }

$harga_jumlah = $harga_produk * $jumlah;

// Cetak Hasil
echo 'Nama Customer: ' . $customer . '<br>'; 
echo 'Produk Pilihan: ' . $produk . '<br>';
echo 'Jumlah beli: ' . $jumlah . '<br>';
echo 'Total belanja: Rp.' . $harga_jumlah. '<br>';
?>

</body>
</html>
