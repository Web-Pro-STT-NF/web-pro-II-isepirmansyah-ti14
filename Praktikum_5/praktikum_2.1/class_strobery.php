<?php
class Strowberi extends Fruit {
    public function message() {
        echo 'Am I a fruit or a Berry?';
    }
}

$str = new Strowberi('Strowberry', 'Red');
$str->message();
$str->intro();