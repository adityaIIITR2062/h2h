<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect form data
	$name = $_POST["name"];
	$birthdate = $_POST["birthdate"];
	$aadhar = $_POST["aadhar"];
	$email = $_POST["email"];
	$state = $_POST["state"];
	$income = $_POST["income"];
	$phone = $_POST["phone"];


	if (empty($name) || empty($birthdate) || empty($aadhar) || empty($email) || empty($state) || empty($income) || empty($phone)) {
		echo "Please fill in all fields";
	} else {
		
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "registration";
		$conn = mysqli_connect($servername, $username, $password, $dbname);

		
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}

		
		$name = mysqli_real_escape_string($conn, $name);
		$aadhar = mysqli_real_escape_string($conn, $aadhar);
		$email = mysqli_real_escape_string($conn, $email);
		$state = mysqli_real_escape_string($conn, $state);

		
		$sql = "INSERT INTO registration (name, birthdate, aadhar, email, state, income, phone)
				VALUES ('$name', '$birthdate', '$aadhar', '$email', '$state', $income, $phone)";
		if (mysqli_query($conn, $sql)) {
			echo "Form submitted successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}

		
		mysqli_close($conn);
	}
}
?>
