<?php
  require_once 'vendor/autoload.php';

  $clientID = '269838572679-ekkklc7ga89sl9cmjki7d08iot2t7hqd.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Saludok/index%20usuario.php';

  // Se crea una solicitud de cliente para acceder a la API de google 
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>