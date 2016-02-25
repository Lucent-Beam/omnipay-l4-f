<?php

use Omnipay\Omnipay;


class PaymentController extends BaseController {


  public function getIndex()

  {

    return View::make('hello');



  }


public function postPayment(){

$gateway = Omnipay::create('RestGateway');

  $cardInput = array(
    'number' => '4444333322221111',
    'firstName' => 'MR. WALTER WHITE',
    'expiryMonth' => '03',
    'expiryYear' => '16',
    'cvv' => '333',
);


$card = Omnipay::creditCard($cardInput);
$response = Omnipay::purchase([
    'currency' => 'USD',
    'amount' => '100.00',
    'returnUrl' => 'http://bobjones.com/payment/return',
    'cancelUrl' => 'http://bobjones.com/payment/cancel',
    'card' => $cardInput
])->send();

dd($response->getMessage());

}

  public function hecho(){
    return View::make('hecho');

  }

  public function cancelada(){
    return View::make('cancelada');

  }



}
