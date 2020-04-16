<?php
spl_autoload_register();

$paymentCtl = new PaymentController(new Doku());
$paymentCtl->pay();
