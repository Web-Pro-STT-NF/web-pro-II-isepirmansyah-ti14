<?php
require_once "class_lingkaran.php";
echo 'NILAI PHI ' . Lingkaran::PHI;
$lingk1 = new Lingkaran(7);
$lingk2 = new Lingkaran(4);

echo "<br/>Luas Lingkaran I adalah " .$lingk1->getLuas();
echo "<br/>Luas Lingkaran II adalah " .$lingk2->getLuas();

echo "<br/>Keliling Lingkaran I adalah " .$lingk1->getKeliling();
echo "<br/>Keliling Lingkaran II adalah " .$lingk2->getKeliling();