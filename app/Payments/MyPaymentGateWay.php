<?php
namespace App\Payments;

class MyPaymentGateWay 
{
    public $card_name;

    public function __construct()
    {
        $this->card_name = "master card";
    }

    public function getCardName()
    {
        return $this->card_name;    
    }
}