<?php
require_once 'api/google-api-php-client/src/Google_Client.php';
require_once 'api/google-api-php-client/src/contrib/Google_PlusService.php';

// Set your cached access token. Remember to replace $_SESSION with a
// real database or memcached.
session_start();

$client = new Google_Client();
$client->setApplicationName('Google+ PHP Starter Application');
// Visit https://code.google.com/apis/console?api=plus to generate your
// client id, client secret, and to register your redirect uri.
$client->setClientId('insert_your_oauth2_client_id');
$client->setClientSecret('insert_your_oauth2_client_secret');
$client->setRedirectUri('insert_your_oauth2_redirect_uri');
$client->setDeveloperKey('insert_your_simple_api_key');
$plus = new Google_PlusService($client);

if (isset($_GET['code'])) {
    $client->authenticate();
    $_SESSION['token'] = $client->getAccessToken();
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
    $client->setAccessToken($_SESSION['token']);
}

if ($client->getAccessToken()) {
    $activities = $plus->activities->listActivities('me', 'public');
    print 'Your Activities: <pre>' . print_r($activities, true) . '</pre>';

    // We're not done yet. Remember to update the cached access token.
    // Remember to replace $_SESSION with a real database or memcached.
    $_SESSION['token'] = $client->getAccessToken();
} else {
    $authUrl = $client->createAuthUrl();
    print "<a href='$authUrl'>Connect Me!</a>";
}



session_start();
require_once "google-api-php-client/src/Google_Client.php";
require_once "google-api-php-client/src/contrib/Google_CalendarService.php";

const CLIENT_ID = '...';
const SERVICE_ACCOUNT_NAME = '...';

// Make sure you keep your key.p12 file in a secure location, and isn't
// readable by others.
const KEY_FILE = '...';

$client = new Google_Client();
$client->setApplicationName("...");


if (isset($_SESSION['token'])) {
    $client->setAccessToken($_SESSION['token']);
}

// Load the key in PKCS 12 format (you need to download this from the
// Google API Console when the service account was created.
$key = file_get_contents(KEY_FILE);
$client->setAssertionCredentials(new Google_AssertionCredentials(
        SERVICE_ACCOUNT_NAME,
        array('https://www.googleapis.com/auth/calendar', "https://www.googleapis.com/auth/calendar.readonly"),
        $key)
);

$client->setClientId(CLIENT_ID);
$service = new Google_CalendarService($client);

//Save token in session
if ($client->getAccessToken()) {
    $_SESSION['token'] = $client->getAccessToken();
}

//And now you can use the code in their PHP examples, like: $service->events->listEvents(...)