<?php

namespace App;

trait Goable
{

    public function go (int $count_step = 1): Animals
    {
        $this->distance += $this->getStep() * $count_step;
        return $this;
    }

    public function getStep (): int
    {
        return $this->step ?? 1;
    }

}