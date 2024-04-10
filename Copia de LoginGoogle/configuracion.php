<?php
  require_once 'vendor/autoload.php';

  $clientID = '375886740315-ljcreqn7fqmdn43evvts0asctmrgaihg.apps.googleusercontent.com';
  $clientSecret = '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';
  $redirectUri = 'http://localhost/Saludok/Login.php';

  // create Client Request to access Google API
  $client = new Google_Client();
  $client->setClientId($clientID);
  $client->setClientSecret($clientSecret);
  $client->setRedirectUri($redirectUri);
  $client->addScope("email");
  $client->addScope("profile");

 
?>