<?php
namespace App\HTML;

class Form{

    public function input(string $key,string $label):string
    {
        $value= $this->getValue($key);
    }
}