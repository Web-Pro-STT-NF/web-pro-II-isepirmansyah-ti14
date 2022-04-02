<?php
class NilaiMahasiswa {
    public $matakuliah;
    public $nilai;
    public $nim;

    function __construct($matkul, $nilai, $nim)
    {
        $this->matakuliah = $matkul;
        $this->nilai = $nilai;
        $this->nim = $nim;
    }

    function grade($nilai) {
        if ( $nilai < 56 ) {
            return 'TIDAK LULUS';
        } elseif ($nilai >= 56 && $nilai <= 100 ) {
            return 'LULUS';
        } 
    }

    function hasil($nilai) {
        if ($nilai >= 0 && $nilai <=35) {
            return 'E';
        } else if ($nilai >= 36 && $nilai <= 55) {
            return 'D';
        } else if ($nilai >= 56 && $nilai <= 69) {
            return 'C';
        } else if ($nilai >= 70 && $nilai <= 84) {
            return 'B';
        } else if ($nilai >= 85 && $nilai <= 100) {
            return 'A';
        } 
    }
}