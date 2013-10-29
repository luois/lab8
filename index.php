<?php

require_once('./lib/Stripe.php');

$stripe = array(
    "secret_key"      => "sk_test_qg5C7Loef1tABym4Mv7M51S0",
    "publishable_key" => "pk_test_W37hzVqH3qgXXPwGn4ce9wjS"
);

Stripe::setApiKey($stripe['secret_key']);
?>



?>
<html>
<head>
   <title></title>
</head>
<body>

<?php require_once('./config.php'); ?>

<form action="charge.php" method="post">
    <script src="https://checkout.stripe.com/v2/checkout.js" class="stripe-button"
            data-key="<?php echo $stripe['publishable_key']; ?>"
            data-amount="5000" data-description="One year's subscription"></script>
</form>



<?php
require_once(dirname(__FILE__) . '/config.php');

$token  = $_POST['stripeToken'];

$customer = Stripe_Customer::create(array(
    'email' => 'customer@example.com',
    'card'  => $token
));

$charge = Stripe_Charge::create(array(
    'customer' => $customer->id,
    'amount'   => 5000,
    'currency' => 'usd'
));

echo '<h1>Successfully charged $50.00!</h1>';
?>



</body>
</html>