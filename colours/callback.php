<?php

require '../vendor/autoload.php';

session_start();

$state = $_GET['state'];
$code = $_GET['code'];

if (isset($_GET['error']))
{
    if( $_GET['error'] === 'login_required' || $_GET['error'] === 'consent_required' || $_GET['error'] === 'interaction_required'  )
    {
        header("Location: https://idea.org.uk/");
        exit();
    }
}

if (!isset($code)) {
    exit('Failed to get an authorization code');
}

if (isset($state) && $state !== $_SESSION['oauth2_state']) {
    session_destroy();
    exit('This badge is currently under maintenance, please try again in 10 minutes.');
}

$client = new \GuzzleHttp\Client();

$res = $client->request('POST', 'https://idea.org.uk/oauth/token', [
    'form_params' => [
        'client_id' => getenv('COLOURS_BADGE_CLIENT_ID'),
        'client_secret' => getenv('COLOURS_BADGE_CLIENT_SECRET'),
        'redirect_uri' => getenv('COLOURS_BADGE_REDIRECT_URI'),
        'code' => $code,
        'grant_type' => 'authorization_code'
    ]
]);

$json = json_decode($res->getBody());

$_SESSION['oauth2_access_token'] = $json->access_token;
$_SESSION['oauth2_id_token'] = $json->id_token;

header('Location: badge.php');