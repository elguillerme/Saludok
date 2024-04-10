<?php
  require_once 'vendor/autoload.php';

  $clientID = '809959953989-oig8lp6936qh6r6ltu96rd9mlpjifa38.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Copia%20de%20Saludok%202/index%20usuario.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>