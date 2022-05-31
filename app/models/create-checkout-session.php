<?php

$price = $_POST['price'];

require $_SERVER['DOCUMENT_ROOT'] . '/Proiect/vendor/autoload.php';
// This is a public sample test API key.
// Don’t submit any personally identifiable information in requests made with this key.
// Sign in to see your own test API key embedded in code samples.
\Stripe\Stripe::setApiKey('sk_test_51L5T1fD7rQUI4Ggbc3NJY1suESgrEE6PvZheNb3hzwuiC9gAyFKB8fedUVAcqRpjIeeMeZH3CWeG90Js1ffYr4ys00BQVFxrRC');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/proiect/app/models';

$checkout_session = \Stripe\Checkout\Session::create([
    'line_items' => [[
        # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
        'price' => $price,
        'quantity' => 1,
    ]],
    'mode' => 'payment',
    'success_url' => $YOUR_DOMAIN . '/checkoutSuccess.php',
    'cancel_url' => $YOUR_DOMAIN . '/checkoutError.php',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);