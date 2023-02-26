<?php

require_once '../vendor/stripe/stripe-php/init.php';

require_once '../vendor/autoload.php';
require_once 'secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

$YOUR_DOMAIN = 'https://www.moverzfax.com/stripe';

session_start();
$numberOfReports = $_SESSION['numberOfReports'];
$usdotArray = $_SESSION['usdotArray'];

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => 'price_1MfYV9EekUL6ontJJ2cyri9W',
    'quantity' => $numberOfReports,
  ]],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
  "metadata" => [
    "product_name" => "My Variable Product"
],
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);