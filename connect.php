<?php
$servername = "localhost";
$username = "eramossorian"; // enter you artemis account username
$password = "Qog0_dud"; // enter artemis account password

try {   
	                                            // database name will be "deejayscafe"
	$conn = new PDO("mysql: host = $servername, dbname = deejayscafe", $username, $password);

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	echo "Connected to database.";

}  catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();

}

?>
