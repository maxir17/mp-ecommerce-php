<?php

 require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either Production or SandBox AccessToken

  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


/*
Caso:
a) El pago haya sido “rechazado” o no haya finalizado (failure)
*/


//recibo: [PAYMENT_ID]
$collection_id = $_GET['collection_id']; 

//recibo: approved
$collection_status = $_GET['collection_status']; 

//recibo: [EXTERNAL_REFERENCE]
$external_reference = $_GET['external_reference'];

//recibo: credit_cardeference']; 
$payment_type = $_GET['payment_type']; 

//recibo: [PREFERENCE_ID]
$preference_id = $_GET['preference_id'];

//recibo: [SITE_ID]rence_id']; 
$site_id = $_GET['site_id']; 

//recibo: aggregator
$processing_mode = $_GET['processing_mode']; 

//recibo: null
$merchant_account_id = $_GET['merchant_account_id'];

echo "Payment Status: <b>".strtoupper($collection_status)."</b><br><br>";
echo "Payment Method ID: ".$payment_type."<br>";
echo "External Reference: ".$external_reference."<br>";
echo "Collection ID: ".$collection_id."<br>";

?>