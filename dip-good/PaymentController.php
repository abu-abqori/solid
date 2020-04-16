<?php

class PaymentController
{

    function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    function pay()
    {
        $this->paymentGateway->pay();
    }
}
