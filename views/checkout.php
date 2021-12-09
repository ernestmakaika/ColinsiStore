
<?php

require('../settings/core.php');
require('../controllers/cart_controller.php');
check_login();

$amount = total_amount_controller($_SESSION['user_id']);
$total = round($amount['Amount'], 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Colins iStore | Payment</title>
    <link rel="icon" href="../img/Colins.png" type="../image/png">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
</head>
<?php include("menu.php");?>
<body>
    <div class = container>
    <form id = "paymentForm">
      <br>
    <div class="mb-3">
        <label for="email address" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email-address" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        
    </div>
    

    <div class="mb-3">
        <label for="Total Amount" class="form-label">Amount</label>
        <input type="text" class="form-control" id="amount" name = "amount" value= "<?php echo $total?>" readonly  required />
    </div>
    <button type="submit" class="btn btn-primary" onClick = "payWithPaystack()">Pay with Paystack</button>
    </form>
    </div>


	<!-- PAYSTACK INLINE SCRIPT -->
    <script src="https://js.paystack.co/v1/inline.js"></script> 
    <script>
  const paymentForm = document.getElementById('paymentForm');
  paymentForm.addEventListener("submit", payWithPaystack, false);

  // PAYMENT FUNCTION
  function payWithPaystack(e) {
	e.preventDefault();
	let handler = PaystackPop.setup({
		key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
		email: document.getElementById("email-address").value,
		amount: document.getElementById("amount").value * 100,
		currency:'GHS',
		onClose: function(){
		alert('Window closed.');
		},
		callback: function(response){
			window.location = `../actions/process_payment.php?email=${document.getElementById("email-address").value}&amount=${document.getElementById("amount").value}&reference=${response.reference}`
		}
	});
	handler.openIframe();
}
</script> 
</body>
</html>