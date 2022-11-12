<?php
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;

require './autoload.php';

// For test payments we want to enable the sandbox mode. If you want to go live
// then you need to change this setting to `false`.
$enableSandbox = true;

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = [
    'client_id' => 'AXuaCNsN2p9O1AVvKLykk3pQKg9_8Fi0yKI63jYkk9mvowIAT1QuTHCU5YKTeOgGl0Kke7Bi4za0E5Zl',
    'client_secret' => 'EBssJafl0MDZyKmp6iAa96_wCmd_Gx5ZBcOccOIjbxJk2SklUyi-QMvogjWZ9wE5-OVEYMx9gYDWi1hR',
    'return_url' => 'http://localhost/appnation/paypal/response.php',
    'cancel_url' => 'http://localhost/appnation/paypal/payment-cancelled.html'
];

// Database settings. Change these for your database configuration.
$dbConfig = [
    'host' => 'localhost',
    'username' => 'root',
    'password' => 'system25$',
    'name' => 'baseoncode'
];

$apiContext = getApiContext($paypalConfig['client_id'], $paypalConfig['client_secret'], $enableSandbox);

/**
 * Set up a connection to the API
 *
 * @param string $clientId
 * @param string $clientSecret
 * @param bool   $enableSandbox Sandbox mode toggle, true for test payments
 * @return \PayPal\Rest\ApiContext
 */
function getApiContext($clientId, $clientSecret, $enableSandbox = false)
{
    $apiContext = new ApiContext(
        new OAuthTokenCredential($clientId, $clientSecret)
    );

    $apiContext->setConfig([
        'mode' => $enableSandbox ? 'sandbox' : 'live'
    ]);

    return $apiContext;
}