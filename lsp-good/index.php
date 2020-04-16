<?php
spl_autoload_register();

$flyingBirds = [];
$flyingBirds[] = new FlyingBird();
$flyingBirds[] = new Sparrow();

foreach ($flyingBirds as $bird) {
    $bird->fly();
    print(PHP_EOL);
}

$birds = [];
$birds[] = new Bird();
$birds[] = new Kiwi();

foreach ($birds as $bird) {
    $bird->walk();
    print(PHP_EOL);
}

