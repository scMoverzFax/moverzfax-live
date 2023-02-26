<?php

require_once '../vendor/stripe/stripe-php/init.php';

require_once '../vendor/autoload.php';
require_once 'secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://www.moverzfax.com/';



$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1MfYV9EekUL6ontJJ2cyri9W',
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);