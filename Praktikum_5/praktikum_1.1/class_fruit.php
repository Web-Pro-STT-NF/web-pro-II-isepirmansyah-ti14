<?php
class Fruit {
    public $name;
    protected $color;
    private $weight;

    function __construct()
    {
        
    }

    function set_name($n) {
        $this->name = $n;
    }

    protected function set_color($n) {
        $this->color = $n;
    }
    
    private function set_weight($n) {
        $this->weight = $n;
    }
}

$mango = new Fruit();
$mango->name = 'Mangga';
$mango->color = 'Kuning';
$mango->weight = '300';