<?php
  require_once 'configuracion.php';

// codigo de atentiicacion de Google OAuth Flow
if (isset($_GET['code'])) {
  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);
  
  // obtenemos informacion de perfil
  $google_oauth = new Google_Service_Oauth2($client);
  $google_account_info = $google_oauth->userinfo->get();
  $email =  $google_account_info->email;
  $name =  $google_account_info->name;
 
  // Ahora se puede utilizar esta informacion de perfil para crear una cuenta en el sitio web realizar el inicio de sesion del usuario.
}
?>