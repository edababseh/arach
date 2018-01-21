<?php
//Variables for the connection
	$servername = "ap-cdbr-azure-east-a.cloudapp.net";
	$server_username =  "b6086b3d92bdcd";
	$server_password = "8bc4f0a2";
	$dbName = "users";
	
//Variable from the user	
	$username = $_POST["usernamePost"]; //"Lucas Test AC";
	$email = $_POST["emailPost"];//"test email";
	$password = $_POST["passwordPost"];//"123456";
	
	//Make Connection
	$conn = new mysqli($servername, $server_username, $server_password, $dbName);
	//Check Connection
	if(!$conn){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "INSERT INTO users (username, email, password)
			VALUES ('".$username."','".$email."','".$password."')";
	$result = mysqli_query($conn ,$sql);
	
	if(!result) echo "there was an error";
	else echo "Everything ok.";

?>
