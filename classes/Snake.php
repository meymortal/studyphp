<?php

//require_once 'Animals.php';
namespace App;
use App\Animals;

class Snake extends Animals
{

    public function eat (): Animals
    {
        return $this;
    }

    public function say (): void
    {

    }
}