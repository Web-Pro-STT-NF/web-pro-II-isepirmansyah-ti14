<?php
class Fruit {
    public $nama;
    public $warna;

    public function __construct($nama, $color)
    {
        $this->nama = $nama;
        $this->warna = $color;
    }

    public function intro() {
        echo "The fruit is {$this->nama} and the color is {$this->warna}";
    }
}