<?php

session_start();

$state = hash('sha256', microtime(true) . rand());
$_SESSION['oauth2_state'] = $state;

$params = [
    'response_type' => 'code',
    'client_id' => getenv('VIRTUAL_BADGE_CLIENT_ID'),
    'redirect_uri' => getenv('VIRTUAL_BADGE_REDIRECT_URI'),
    'scope' => 'openid',
    'state' => $state,
    'prompt' => 'none'
];

if (isset($_GET['progress'])){
    $_SESSION['authorised'] = $_GET['progress'];
}

$authUrl = 'https://idea.org.uk/oauth/authorize?' . http_build_query($params);

header("Location: $authUrl");