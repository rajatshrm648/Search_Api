<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('735922191033-23i5vfsd9flo9c18hd5qo1vk0iu8d323.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/search_api/index.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
