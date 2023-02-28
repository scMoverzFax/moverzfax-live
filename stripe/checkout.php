<?php

require_once '../vendor/stripe/stripe-php/init.php';

require_once '../vendor/autoload.php';
require_once 'secrets.php'; //secrets.php stored in cpanel file manager inside stripe folder

\Stripe\Stripe::setApiKey($stripeSecretKey);
header('Content-Type: application/json');

session_start();
$role = $_SESSION['catagory'];

if($role == 'admin'){
  // print_r($_SESSION);
// $numberOfReports = $_SESSION['numberOfReports'];
  // $usdotArray = $_SESSION['usdotArray'];
  $moverNameArray = $_SESSION['moverNameArray'];
  $customerEmail = $_SESSION['email'];
  $customerName = 'Customer';

} else {
  // $numberOfReports = $_SESSION['numberOfReports'];
  // $usdotArray = $_SESSION['usdotArray'];
  $moverNameArray = $_SESSION['moverNameArray'];
  $customerEmail = $_SESSION['email'];
  $customerName = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
}

// print_r($moverNameArray);
print_r($_SESSION);

$lineItemsArrayOfPriceDatas = [];

foreach ($moverNameArray as $index => $product) {
    $unit_amount = 0;
    if ($index === 0) {
        $unit_amount = 1000;
    } elseif ($index === 2) {
        $unit_amount = 300;
    } elseif ($index === 3) {
        $unit_amount = 200;
    } elseif ($index === 4) {
        $unit_amount = 100;
    }

        $priceData = [
            'price_data' => [
                'currency' => 'usd',
                'unit_amount' => $unit_amount,
                'product_data' => [
                    'name' => 'MoverZfax Report for ' . $product,
                ],
            ],
            'quantity' => 1,
        ];
        $lineItemsArrayOfPriceDatas[] = $priceData;
}

$customer = \Stripe\Customer::create([
  'email' => $customerEmail,
  'name' => $customerName,
]);

if($role == 'admin'){
  $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => $lineItemsArrayOfPriceDatas,
    'mode' => 'payment',
    'invoice_creation' => ['enabled' => true],
    'success_url' => 'https://www.moverzfax.com/admin/confirmation.php',
    'cancel_url' => 'https://www.moverzfax.com/admin/admin_run_payment.php',
  //   'customer' => $customer->id,
    'billing_address_collection' => 'required',
  ]);
} else {
  $checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => $lineItemsArrayOfPriceDatas,
    'mode' => 'payment',
    'invoice_creation' => ['enabled' => true],
    'success_url' => 'https://www.moverzfax.com/model/payment_data_model.php',
    'cancel_url' => 'https://www.moverzfax.com/home/payment_app.php',
  //   'customer' => $customer->id,
    'billing_address_collection' => 'required',
  ]);
}

// Save the Checkout Session ID to a session variable
$_SESSION['checkout_session_id'] = $checkout_session->id;

// $checkout_session = \Stripe\Checkout\Session::create([
//   'line_items' => [[
//     'price' => 'price_1Mfr0vEekUL6ontJswp7tGGU',
//     'quantity' => 1,
//   ]],
//   'mode' => 'payment',
//   'success_url' => 'https://www.moverzfax.com/stripe/success.html',
//   'cancel_url' => 'https://www.moverzfax.com/stripe/cancel.html',
// ]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);