<?php
include "header.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kalkulator BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Kalkulator BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <h5 class="card-header" style="background-color: #E0F2F1">Kalkulator BMI</h5>
                        <div class="card-body row">
                            <div class="col-6">
                                <form method="POST" action="hasil_bmi.php">
                                    <div class="form-group">
                                        <label>Apa jenis kelamin anda</label>
                                        <div class="radio-group">
                                            <input type="radio" class="form_radio" value="L" name="gender" id="pria">
                                            <label for="pria">
                                                <div class="col-auto mx-1 card-block py-0 text-center radio">
                                                    <div class="flex-row">
                                                        <div class="col">
                                                            <div> <img class="mt-3"
                                                                    src="https://hellosehat.com/images/maleIcon.svg"
                                                                    width="80" height="80">
                                                            </div>
                                                            <p class="mt-2">Laki-laki</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                            <input type="radio" class="form_radio" value="P" name="gender" id="wanita">
                                            <label for="wanita">
                                                <div class="col-auto card-block py-0 text-center radio ">
                                                    <div class="flex-row">
                                                        <div class="col">
                                                            <div> <img class="mt-3"
                                                                    src="https://hellosehat.com/images/femaleIcon.svg"
                                                                    width="80" height="80">
                                                            </div>
                                                            <p class="mt-2">Wanita</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa kode pasien anda?</label>
                                        <input type="text" name="kode" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Siapa nama anda?</label>
                                        <input type="text" name="nama" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Berapa tinggi Anda? (cm)</label>
                                        <input type="text" name="tinggi" class="form-control"
                                            aria-describedby="emailHelp">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Berapa berat badan Anda? (kg)</label>
                                        <input type="text" name="berat" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Tanggal Pemeriksaan</label>
                                        <input type="date" name="date" class="form-control" id="exampleInputPassword1">
                                    </div>
                                    <a href="hasil_bmi.php">
                                        <button name="proses" type="submit" class="btn btn-primary">Hitung</button>
                                    </a>
                                </form>
                            </div>
                            <div class="col-6">
                                <h2>Kalkulator BMI (IMT)</h2>
                                <p>Gunakan kalkulator ini untuk memeriksa Indeks Massa Tubuh (IMT) dan mengecek apakah
                                    berat badan Anda ideal atau tidak. Anda juga dapat menggunakannya untuk memeriksa
                                    indeks massa tubuh anak.</p>
                                <center>
                                    <img src="img/toolsIconBmi.svg" style="width: 220px; margin-top: 10px;" alt="">
                                </center>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php
include "footer.php";
?>