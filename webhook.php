<?php
 
  require_once 'vendor/autoload.php'; // You have to require the library from your Composer vendor folder

  MercadoPago\SDK::setAccessToken("APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398"); // Either Production or SandBox AccessToken

  MercadoPago\SDK::setIntegratorId("dev_24c65fb163bf11ea96500242ac130004");

  
/*
//MP envia una notificacion con el siguiente formato
{
    "id": 12345,
    "live_mode": true,
    "type": "payment",
    "date_created": "2015-03-25T10:04:58.396-04:00",
    "application_id": 123123123,
    "user_id": 44444,
    "version": 1,
    "api_version": "v1",
    "action": "payment.created",
    "data": {
        "id": "999999999"
    }
}
*/

http_response_code(200);

$fichero = 'webhook.txt';
$data = json_encode(var_export($_POST, TRUE));
// Escribe el contenido al fichero
file_put_contents($fichero, $data);

?>