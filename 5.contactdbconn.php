<?php

$name = $_POST['name'];
$yemail = $_POST['yemail'];
$ynumber = $_POST['ynumber'];
$message = $_POST['message'];

//database connection
$conn = new mysqli('remotemysql.com', 'SNd4FOM10l', 'vWIgcql3tS', 'SNd4FOM10l');
if ($conn->connect_error){
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into contactus(name, yemail, ynumber, message)
	values (?, ?, ?, ?)");

	$stmt->bind_param("ssss", $name, $yemail, $ynumber, $message);

	$stmt->execute();
	echo "Recorded Successfully";
	$stmt->close();
	$conn->close();
}

header("refresh: 1; url = 5.contact.html");
?>
