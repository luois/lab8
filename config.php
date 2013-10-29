<?php
require_once('./Stripe/lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_qg5C7Loef1tABym4Mv7M51S0",
    "publishable_key" => "pk_test_W37hzVqH3qgXXPwGn4ce9wjS"
);

Stripe::setApiKey($stripe['secret_key']);
?>

