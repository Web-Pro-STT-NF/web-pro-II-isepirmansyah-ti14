<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <title>DATA</title>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="container-fluid">
                    <table
                        class="table text-center table-bordered table-light table-striped table-hover w-100 m-auto mt-3">
                        <thead>
                            <tr>
                                <th scope="col">No</i></th>
                                <th scope="col">No.Account</i></th>
                                <th scope="col">Pemilik</i></th>
                                <th scope="col">Saldo</i></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once "class_accountbank.php";
                            $pelanggan1 = new AccountBank('C001', 6000000, 'Ahmad');
                            $pelanggan2 = new AccountBank('C002', 5350000, 'Budi');
                            $pelanggan3 = new AccountBank('C003', 2500000, 'Kurniawan');
                            $arr1 = [$pelanggan1, $pelanggan2, $pelanggan3];

                            $nomor = 1;
                            foreach($arr1 as $obj){
                            ?>
                            <tr>
                                <td><?= $nomor?></td>
                                <td><?=$obj->nomor?></td>
                                <td><?=$obj->customer?></td>
                                <td><?=$obj->getSaldo()?></td>
                            </tr>
                            <?php
                            $nomor++;
                            }
                        ?>

                        </tbody>
                    </table>
                </div>
                <div class="mt-3">
                    <?php
                $pelanggan1->deposit(1000000);
                echo 'Ahmad Nabung 1.000.000 <br/>';
                $pelanggan1->cetak();
                
                echo '<br/><br/>Ahmad transfer 1.500.000 ke kurniawan dan 500.000 ke Budi <br/>';
                $pelanggan1->transfer($pelanggan3, 1500000);
                $pelanggan1->transfer($pelanggan2, 500000);
                $pelanggan1->cetak();
                echo '<br/><br/>Saldo Kurniawan Setelah di Transfer Ahmad<br/>';
                $pelanggan3->cetak();

                $pelanggan2->witdrawl(2500000);
                echo '<br/><br/>Budi tarik uang 2.500.000 <br/>';
                $pelanggan2->cetak();
                
                

                ?>
                </div>
            </div>

        </div>
    </div>
</body>

</html>