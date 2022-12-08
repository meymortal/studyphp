<?php

require_once 'AnimalInterface.php';
require_once 'Distianable.php';


abstract class Animals implements AnimalInterface
{
    use Distianable;

    protected int $age;
    protected int $laps_count;
    protected array $characteristic;

    public function __construct (int $age = 0, int $laps_count = 4)
    {
        $this->age = $age;
        $this->laps_count = $laps_count;
    }

    public function __set ($key, $value): void
    {
        $this->characteristic[$key] = $value;
    }

    public function __get ($key): mixed
    {
        return $this->characteristic[$key] ?? null;
    }

    public function retArrCh (): array
    {
        return $this->characteristic;
    }

    public function lapsCount (): void
    {
        echo 'У меня ' . $this->laps_count . ' лапы.';
    }

    abstract public function eat (): Animals;

    abstract public function say (): void;

    protected function getNameAge (): string
    {
        return match ($this->age) {
            1 => 'год',
            2, 3, 4 => 'года',
            default => 'лет'
        };
    }


}