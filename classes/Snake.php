<?php

require_once 'Animals.php';

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