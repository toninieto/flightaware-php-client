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

		    require_once dirname(__FILE__).'/config.php';
		    require_once dirname(__FILE__).'/FlightAwareClient.php';

			$faClient = new FlightAwareClient(user_name, api_key);

			if ($_GET["function"] == "inFlightInfo") {

				$id_flight = strtoupper("VY2591");
				$inFlightInfo = $faClient->inFlightInfo($id_flight); // reformats waypoints with distinct latitude and longitude array keys
				print "depurar flight info: <br/><pre>";
				print_r($inFlightInfo);
				print "</pre>";
			}

		?>


	</body>
</html>
