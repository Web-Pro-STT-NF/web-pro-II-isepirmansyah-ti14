<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

</head>

<body>
    <div class="card" style="height: 520px;">
        <div class="card-body">
            <div class="row">
                <div class="col-md-8">
                    <h4>Belanja Online</h4>
                    <hr>
                    <div class="">
                        <div class="col-md-6">
                            <form method="POST" action="form_belanja.php" class="mt-3">
                                <div class="form-group row">
                                    <label for="staticEmail"
                                        class="col-sm-4 col-form-label font-weight-bold text-right">Custemer</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="nama" class="form-control" placeholder="Nama Cutomer">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail"
                                        class="col-sm-4 col-form-label font-weight-bold text-right">Pilih
                                        Produk</label>
                                    <div class="col-sm-8 mt-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="produk" id="inlineRadio1"
                                                value="TV">
                                            <label class="form-check-label" for="inlineRadio1">TV</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="produk" id="inlineRadio2"
                                                value="KULKAS">
                                            <label class="form-check-label" for="inlineRadio2">KULKAS</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="produk" id="inlineRadio2"
                                                value="MESIN CUCI">
                                            <label class="form-check-label" for="inlineRadio2">MESIN CUCI</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail"
                                        class="col-sm-4 col-form-label font-weight-bold text-right">Jumlah</label>
                                    <div class="col-sm-4">
                                        <input type="text" name="jumlah" class="form-control" placeholder="Jumlah">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="staticEmail"
                                        class="col-sm-4 col-form-label font-weight-bold text-right"></label>
                                    <div class="col-sm-4">
                                        <button type="submit" class="btn btn-success">Kirim</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 26.5rem;">
                        <div class="card-header bg-primary text-white">
                            Daftar Harga
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">TV : 4.200.000</li>
                            <li class="list-group-item">Kulkas : 3.100.000</li>
                            <li class="list-group-item">MESIN CUCI : 3.800.000</li>
                        </ul>
                        <div class="card-footer bg-primary text-white">
                            Harga Dapat Berubah Setiap Saat
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="m-2">
        <?php

            $proses = $_POST['proses'];
            $nama_customer = $_POST['nama'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];

            if ($produk == 'TV') {
                $harga = $jumlah * 4200000;
            } elseif ($produk == 'KULKAS') {
                $harga = $jumlah * 3100000;
            } elseif ($produk == 'MESIN CUCI') {
                $harga = $jumlah * 3800000;
            } 
            
            echo '<br/>Nama Customer : ' .$nama_customer;
            echo '<br/>Produk Pilihan : ' .$produk;
            echo '<br/>Jumlah Beli : ' .$jumlah;
            $format = number_format($harga,0,",",".");
            echo '<br/>Total Belanja : Rp. ' .$format;
        ?>
    </div>

</body>

</html>