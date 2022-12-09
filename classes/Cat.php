<?php

/*require_once 'Animals.php';
require_once 'Goable.php';*/

namespace App;
use App\Animals;
use App\Goable;

class Cat extends Animals
{
    use Goable;

    public function eat (): Cat
    {
        $this->age++;
        return $this;
    }

    public function say (): void
    {
        echo 'Мяу! Я покушаль... Мне теперь ' . $this->age  . ' ' . $this->getNameAge() . '!<br>';
    }


}

