<?php
    // get the data from the form
    $Title = $_POST['Title'];
    $name = $_POST['name'];
    $usremail = $_POST['usremail'];
	$usrnum = $_POST['usrnum'];
	$response = $_POST['response'];
	$comments = $_POST['comments'];
?>
<!DOCTYPE html>
<html>
	<head>


	</head>
	<body>
		<?php echo "Thank you, $Title $name, for your comments.
		<br>Your e-mail address is $usremail and your phone number is $usrnum.
		<br>You stated that you found this example to be '$response' and added: $comments"; ?>
	</body>
</html>
