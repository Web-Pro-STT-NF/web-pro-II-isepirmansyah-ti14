<?php
include "header.php";
?>
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Hasil BMI</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="form_bmi.php">Kalkulator BMI</a></li>
                        <li class="breadcrumb-item active">Hasil BMI</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <?php
                            require_once "class_bmi.php";
                            require_once "class_pasien.php";
                            require_once "class_bmipasien.php";
                            
                            $psn1 = new Pasien('P001', 'Ahmad');
                            $psn1->gender = 'L';
                            $psn2 = new Pasien('P002', 'Rina');
                            $psn2->gender = 'P';
                            $psn3 = new Pasien('P003', 'Lutfi');
                            $psn3->gender = 'L';

                            $bmi1 = new BMI(69.8, 169);
                            $bmi2 = new BMI(55.3, 165);
                            $bmi3 = new BMI(45.2, 171);

                            $bmipas1 = new BMIPasien($bmi1, $psn1, '2022-01-10');
                            $bmipas2 = new BMIPasien($bmi2, $psn2, '2022-01-10');
                            $bmipas3 = new BMIPasien($bmi3, $psn3, '2022-01-11');

                            if (isset($_POST['proses'])) {
                                
                                $proses = $_POST['proses'];
                                $tinggi = $_POST['tinggi'];
                                $berat = $_POST['berat'];
                                $gender = $_POST['gender'];
                                $kode = $_POST['kode'];
                                $nama = $_POST['nama'];
                                $tgl = $_POST['date'];

                                $bmi4 = new BMI($berat, $tinggi);
                                $psn4 = new Pasien($kode, $nama);
                                $kel = $psn4->gender = $gender;

                                $status = $bmi4->nilaiBMI();

                                $bmipas4 = new BMIPasien($bmi4, $psn4, $tgl);
                                $arr = [$bmipas1,$bmipas2,$bmipas3,$bmipas4];
                            }

                            ?>

                            <h2 class="text-center text-bold">BMI Anda adalah <b
                                    class="text-primary"><?=$bmi4->nilaiBMI()?></b></h2>
                            <a href="form_bmi.php" class="text-white btn btn-primary btn-sm text-decoration-none"><i
                                    class="fas fa-redo"></i>
                                Hitung
                                Ulang</a>

                            <?php
                            if ($kel == 'L') { ?>

                            <div class="radio-group mt-3">
                                <div class="row justify-content-center">
                                    <div id="tes1" class="col-auto mx-1 py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-underweight-male-active.svg">
                                                </div>
                                                <p class="mt-2">Kekurangan Berat Badan <br>
                                                    < 18.5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes2" class="col-auto py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-healthy-male-active.svg"
                                                        weigth="220px">
                                                </div>
                                                <p class="mt-2">Normal (Ideal) <br> 18.5 - 24.9 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes3" class="col-auto py-0 text-center radio1 ">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-overweight-male-active.svg">
                                                </div>
                                                <p class="mt-2">Kelebihan berat badan <br> 25.0 - 29.9 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes4" class="col-auto py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-obese_level_1-male-active.svg">
                                                </div>
                                                <p class="mt-2">Kegemukan (Obesitas) <br> > 30.0 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            } else if ($kel == 'P') { ?>

                            <div class="radio-group mt-3">
                                <div class="row justify-content-center">
                                    <div id="tes1" class="col-auto mx-1 py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-underweight-female-active.svg">
                                                </div>
                                                <p class="mt-2">Kekurangan Berat Badan <br>
                                                    < 18.5</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes2" class="col-auto py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-healthy-female-active.svg"
                                                        weigth="220px">
                                                </div>
                                                <p class="mt-2">Normal (Ideal) <br> 18.5 - 24.9 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes3" class="col-auto py-0 text-center radio1 ">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-overweight-female-active.svg">
                                                </div>
                                                <p class="mt-2">Kelebihan berat badan <br> 25.0 - 29.9 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tes4" class="col-auto py-0 text-center radio1">
                                        <div class="flex-row">
                                            <div class="col">
                                                <div> <img class="mt-3" src="img/bmi-obese_level_1-female-active.svg">
                                                </div>
                                                <p class="mt-2">Kegemukan (Obesitas) <br> > 30.0 </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                            }?>

                            <?php

                            if ($status < 18.5) { ?>
                            <script>
                            let tes = document.getElementById('tes1')
                            tes.classList.add("selected1");
                            </script>
                            <?php
                            } else if ($status >= 18.5 && $status <= 24.9) {?>
                            <script>
                            let tes = document.getElementById('tes2')
                            tes.classList.add("selected1");
                            </script>
                            <?php
                            } else if ($status >= 25.0 && $status <= 29.9) {?>
                            <script>
                            let tes = document.getElementById('tes3')
                            tes.classList.add("selected1");
                            </script>
                            <?php
                            } else if ($status >= 30.0) {?>
                            <script>
                            let tes = document.getElementById('tes4')
                            tes.classList.add("selected1");
                            </script>
                            <?php
                            }

                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card ">
                        <div class="card-body">
                            <table class="table table-hover table-striped mt-3" width="100%">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal Periksa</th>
                                        <th>Kode Pasien</th>
                                        <th>Nama Pasien</th>
                                        <th>Gender</th>
                                        <th>Berat (kg)</th>
                                        <th>Tinggi (cm)</th>
                                        <th>Nilai BMI</th>
                                        <th>Status BMI</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $nomor=1;
                                    foreach($arr as $obj){
                                    ?>
                                    <tr>
                                        <td><?=$nomor?></td>
                                        <td><?=$obj->tanggal?></td>
                                        <td><?=$obj->pasien->kode?></td>
                                        <td><?=$obj->pasien->nama?></td>
                                        <td><?=$obj->pasien->gender?></td>
                                        <td><?=$obj->bmi->berat?></td>
                                        <td><?=$obj->bmi->tinggi?></td>
                                        <td><?=$obj->bmi->nilaiBMI()?></td>
                                        <td><?=$obj->bmi->statusBMI()?></td>
                                    </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
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