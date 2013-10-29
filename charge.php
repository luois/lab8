<?php
require_once(dirname(__FILE__) . './config.php');

$token  = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => 'louissimard11@gmail.com',
    'card'  => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 5000,
    'currency' => 'cad'
));

echo '<h1>Successfully charged $50.00!</h1>';
?>

