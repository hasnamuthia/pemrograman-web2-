<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belanja Online</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h5>
				Sistem Penilaian
			</h5>
			<div class="row" style="margin:50px;">
				<div class="col-md-8">
					<h2>
						Belanja Online
					</h2>
			<form action="formbelanja.php" method="POST">
  <div class="form-group row">
    <label for="customer" class="col-4 col-form-label">Customer</label> 
    <div class="col-8">
      <input id="customer" name="customer" placeholder="Nama Customer" type="text" class="form-control" required="required">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
        <label for="pilihproduk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
        <label for="pilihproduk_1" class="custom-control-label">Kulkas</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="pilihproduk" id="pilihproduk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
        <label for="pilihproduk_2" class="custom-control-label">Mesin Cuci</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" required="required" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
				</div>
				<div class="col-md-4">
					<div class="list-group">
						 <a href="#" class="list-group-item list-group-item-action active">DAFTAR HARGA</a>
						<div class="list-group-item">
							TV : Rp. 4.200.000
						</div>
						<div class="list-group-item">
							KULKAS : Rp. 3.100.000
						</div>
						<div class="list-group-item justify-content-between">
							Mesin Cuci : Rp. 3.800.000
						</div> <a href="#" class="list-group-item list-group-item-action active justify-content-between">HARGA DAPAT BERUBAH SETIAP SAAT</a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
                <table class="table table-bordered text-uppercass">
            <tr class="table-primary">
                <th>Nama</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Total Harga</th>
            </tr>
            <?php require_once "prosesbelanja.php"; ?>
            <tr>
                <td><?= $customer; ?></td>
                <td><?= $pilihproduk; ?></td>
                <td><?= $jumlah; ?></td>
                <td><?= "Rp" . number_format($totalharga, 0, ",", "."); ?></td>
            </tr>
        </table>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>