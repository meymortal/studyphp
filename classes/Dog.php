<?php

require_once 'Animals.php';
require_once 'Goable.php';

class Dog extends Animals
{
    use Goable;

    public int $step = 2;
    protected bool $is_riding;
    protected string $test = 'test';

    public function __construct(int $age = 0, int $laps_count = 4, bool $is_riding = false)
    {
        parent::__construct($age, $laps_count);
        $this->is_riding = $is_riding;
    }

    public function eat (): Dog
    {
        $this->age++;
        return $this;
    }

    public function say (): void
    {
        echo 'Гав! Я покушаль... Мне теперь ' . $this->age  . ' ' . $this->getNameAge() . '!<br>';
    }
}