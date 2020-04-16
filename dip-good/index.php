<?php
spl_autoload_register();

$controllers = [];
$controllers[] = new PaymentController(new Midtrans());
$controllers[] = new PaymentController(new Doku());

foreach ($controllers as $ctl) {
    $ctl->pay();
    print(PHP_EOL);
}