<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<html>
	<title>Functions call</title>
	<body>
		<h3>Functions calls:</h3>

		<br/>
		<br/>
		<h4>The result is: </h4>

		<?php

		    require_once dirname(__FILE__).'/FlightAwareClient.php';

			$faClient = new FlightAwareClient('username', 'api_key');

			if ($_GET["function"] == "inFlightInfo") {
				/*
				$result = $paymentHubIntegration->startTransaction();
				print "<pre>";
				print_r($result);
				print "</pre>";
				*/
			}

		?>


	</body>
</html>
