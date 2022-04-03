<?php
class Dispenser
{
    protected $volume = 0, $hargaSegelas;
    private $volumeGelas = 250, $jumlah_uang = 5000, $jumlah_gelas = 5;
    public $namaMinuman;

    public function __construct($volume, $volumeGelas, $jumlah_uang, $jumlah_gelas)
    {
        $this->volume = $volume;
        $this->volumeGelas = $volumeGelas;
        $this->jumlah_gelas = $jumlah_gelas;
        $this->jumlah_uang = $jumlah_uang;
    }

    public function hasilDispenser()
    {
        echo "Volume air galon yang dimiliki {$this->volume} ml <br> Saldo yang dimiliki {$this->jumlah_uang}<br> Jumlah gelas yang dimiliki {$this->jumlah_gelas} <br> volume gelas yang dimiliki {$this->volumeGelas}";
    }

    public function isiUlangGalon(int $volume)
    {
        if ($volume > 0) {
            $this->volume = $volume;
            echo "Anda telah mengisi volume air galon sebesar {$this->volume} ml";
        } else {
            echo "Volume air tidak bisa kurang dari 0";
        }
    }
    public function isiGelas()
    {
        if ($this->volume >= $this->volumeGelas && $this->jumlah_gelas > 0) {
            $this->jumlah_gelas--;
            $this->volume = $this->volume - $this->volumeGelas;
            $this->jumlah_uang = $this->jumlah_uang + $this->hargaSegelas;
            echo "Anda telah menuangkan air kedalam gelas berukuran {$this->volumeGelas} ml dengan harga {$this->hargaSegelas}";
        } elseif ($this->jumlah_gelas <= 0) {
            echo "Tidak ada gelas tersedia, silahkan isi ulang gelas";
        } elseif ($this->volume < $this->volumeGelas) {
            echo "Volume air galon tidak mencukupi";
        }
    }

    public function isiUlangGelas(int $gelas)
    {
        $harga_gelas = 500;
        $total_harga = $harga_gelas * $gelas;
        if (
            $this->jumlah_uang >= $total_harga
            && $total_harga >= $harga_gelas
        ) {
            $this->jumlah_uang = $this->jumlah_uang - $total_harga;
            $this->jumlah_gelas = $this->jumlah_gelas + $gelas;
            echo "Anda telah melakukan isi ulang gelas sebanyak {$gelas} gelas dengan total harga {$total_harga} atau {$harga_gelas}/pcs";
        } elseif ($this->jumlah_uang < $harga_gelas) {
            echo "Uang anda tidak mencukupi";
        } elseif ($total_harga < $harga_gelas) {
            echo "Masukkan angka gelas dengan benar";
        }
    }
}

class Minuman extends Dispenser
{
    public function __construct($namaMinuman, $hargaSegelas)
    {
        $this->namaMinuman = $namaMinuman;
        $this->hargaSegelas = $hargaSegelas;
    }

    public function cetak()
    {
        echo "Ini adalah {$this->namaMinuman} seharga {$this->hargaSegelas} per gelasnya";
    }
}