<?php 

	function dbConnect(){
		$host = "localhost";
		$user = "zealicon_dbman";
		$password = "ni22le";
		$database = "nibble";
		$conn = new mysqli($host, $user, $password,$database);
		if ($conn->connect_errno) {
		    echo "Failed to connect to MySQL: (" . $conn->connect_errno . ") " . $conn->connect_error;
		    die;
		}
		return $conn;
	}

	function dbDisconnect($conn){
		$conn->close();
	}

?>