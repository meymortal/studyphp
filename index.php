<?php

require_once 'classes/FirstClass.php';
require_once 'classes/Cat.php';
require_once 'classes/Dog.php';
require_once 'classes/Snake.php';

function febug($data) {
    echo '<pre>' . print_r($data, return: 1) . '</pre>';
}

$class1 = new FirstClass();
$class2 = new FirstClass();
//febug($class1);

$class1->color = 'black';
$class1->brand = '1+';
$class1->speed = '120Hz';
$class1->counter = 8;

$class2->color = 'blue';
$class2->speed = '60Hz';
$class2->counter = 8;
$class2->brand = '1+';

//febug($class1);
//febug($class2);
echo "<h3> О телефоне:</h3>
Бренд: {$class1->brand} <br>
Цвет: {$class1->color}<br>
Чстота обновления экрана: {$class1->speed}<br>
Количество ядер: {$class1->counter}<br>
";
$cat = new Cat();
for ($i=0; $i<=10; $i++) {
    $cat->eat()->say();
}

echo '<br>';

$cat->lapsCount();

echo '<br>';

$dog = new Dog(5, 3, true);

echo '<br>';

for ($i=0; $i<=10; $i++) {
    $dog->eat()->say();
}

echo '<br>';

$dog->lapsCount();
$dog->color = 'red';

echo '<br>';
echo '<br>';


echo $dog->test;

$dog->test = 'Test1';

//var_dump($dog->test);

echo '<br>';

$cat->go(5)->showDistance();
echo '<br>';
$dog->go(3)->showDistance();
//var_dump($dog->retArrCh());
$snake = new Snake();
echo '<br>';

