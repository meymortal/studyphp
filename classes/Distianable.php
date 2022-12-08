<?php

trait Distianable
{
    protected int $distance = 0;

    public function showDistance (): void
    {
        echo 'Пройденная дистанция: ' . $this->distance . '.<br>';
    }
}