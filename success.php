<?php

 require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either Production or SandBox AccessToken

  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");


/*
Caso:
c) El pago haya sido exitoso. En la pantalla se deberá mostrar la información
proveniente de los parámetros que enviamos en el Query String como:
payment_method_id que se usó para pagar, el valor del campo
external_reference y el ID de pago (payment_id o collection_id) de Mercado
Pago.
i) Se deberá configurar para que desde el checkout de Mercado Pago el
retorno en caso de pago aprobado sea automático (auto_return).

//Estos son los parámetros que enviamos en la QueryString cuando redirigimos a las back_url establecidas:
https://www.tusitio.com/success.php?
collection_id=[PAYMENT_ID]&
collection_status=approved&
external_reference=[EXTERNAL_REFERENCE]&
payment_type=credit_card&
preference_id=[PREFERENCE_ID]&
site_id=[SITE_ID]&
processing_mode=aggregator&
merchant_account_id=null
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