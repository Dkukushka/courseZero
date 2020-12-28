<?php
require_once "google-api/vendor/autoload.php";
$gClient = new Google_Client();
$gClient->setClientId("301906575797-v5gdcvkm2sgm7v4n6a3ulcb3adrinqmn.apps.googleusercontent.com");
$gClient->setClientSecret("b4rdaPGA5QOD4yihgf-eVwpj");
$gClient->setRedirectUri("http://localhost/coursezero/login-with-google/controller.php");
$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

// login URL
$login_url = $gClient->createAuthUrl();
?>