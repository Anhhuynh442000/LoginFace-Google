<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('1062506262292-48cg4v7e0f5sjg47fousi7p0s8lqm1os.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('4IMos_4IDXtgebbWdlhhIBDN');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://anhhuynh.com/ConnectGoogle/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
