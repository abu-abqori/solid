<?php

class Midtrans implements PaymentGateway
{

    function pay()
    {
        print("paying with Midtrans...");
    }
}
