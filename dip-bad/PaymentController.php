<?php

class PaymentController
{

    function __construct(Doku $doku)
    {
        $this->paymentGateway = $doku;
    }

    function pay()
    {
        $this->paymentGateway->payWithDoku();
    }
}
