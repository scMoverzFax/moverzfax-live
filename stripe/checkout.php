<?php

require_once '../vendor/stripe/stripe-php/init.php';

require_once '../vendor/autoload.php';
require_once 'secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');


session_start();
$numberOfReports = $_SESSION['numberOfReports'];
$usdotArray = $_SESSION['usdotArray'];


$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 2000,
      'product_data' => [
        'name' => 'test',
      ],
    ],
    'quantity' => 1,
  ],
  [
    'price_data' => [
      'currency' => 'usd',
      'unit_amount' => 1000,
      'product_data' => [
        'name' => 'test1',
      ],
    ],
    'quantity' => 1,
  ]],
  'mode' => 'payment',
  'success_url' => 'https://www.moverzfax.com/stripe/success.html',
  'cancel_url' => 'https://www.moverzfax.com/stripe/cancel.html',
]);

// $checkout_session = \Stripe\Checkout\Session::create([
//   'line_items' => [[
//     'price' => 'price_1MfYV9EekUL6ontJJ2cyri9W',
//     'quantity' => $numberOfReports,
//   ]],
//   'mode' => 'payment',
//   'success_url' => 'https://www.moverzfax.com/stripe/success.html',
//   'cancel_url' => 'https://www.moverzfax.com/stripe/cancel.html',
// ]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);