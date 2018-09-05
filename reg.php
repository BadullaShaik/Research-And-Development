!DOCTYPE html>
<html>
<head>
</head>
<body style="background-color:#CCCCCC">
?php
if($_POST){
	$servername = "cse";
	$username = "root";
	$password = "";
	$dbname = "users";
	$fname = $_POST["fname"];
	$lname = $_POST["lname"];
	$moname = $_POST["moname"];
	$frname = $_POST["frname"];
	$email = $_POST["email"];
	$dob = $_POST["dob"];
	$year = $_POST["year"];
	$phone = $_POST["phone"];
	$add = $_POST["add"];
 
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}
	$sql = "INSERT INTO users (first_name, last_name, mother_name, 		father_name, email, DOB, class, lang, phone, address)
VALUES ('{$fname}', '{$lname}', '{$moname}', '{$frname}', '{$email}', '{$dob}', '{$year}', '{$phone}', '{$add}')";
		if ($conn->query($sql) === TRUE){
		echo "<font color='green'>Information Submitted 		Successfully</font>";
		exit();}
		else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}
		$conn->close();
	}
?>
</body>
</html>