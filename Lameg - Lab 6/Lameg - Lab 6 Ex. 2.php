<?php
    // get the data from the form
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount = $_POST['discount'];
	$tax = $_POST['tax'];
	$ship = $_POST['ship'];
	$payments = $_POST['payments'];
	
	$total = $quantity * $price - $discount + $ship;
	$totaltx = ($total * (1 + ($tax / 100) ) );
	$mnthpay = $totaltx / $payments;
?>
<!DOCTYPE html>
<html>
	<head>


	</head>
	<body>
		<?php echo "You have selected to purchase: <br>
			<b>$quantity</b> widget(s) at <br>
			<b>$$price</b> each plus a <br>
			<b>$$ship</b> shipping cost and a <br>
			<b>$tax</b> percent tax rate.<br>
			After your $ <b>$$discount</b> discount, the total cost is <b>$$totaltx</b>.<br>
			Divided over <b>$payments</b> monthly payments, that would be <b>$$mnthpay</b> each"; ?>
	</body>
</html>
