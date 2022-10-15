<?php

$donorgname = $_POST['donorgname'];
$donorgconper = $_POST['donorgconper'];
$donorgaff = $_POST['donorgaff'];
$donorgeadd = $_POST['donorgeadd'];
$donorgtype = $_POST['donorgtype'];
$donorgmon = $_POST['donorgmon'];
$donorgink = $_POST['donorgink'];
$donorgsoi = $_POST['donorgsoi'];

//database connection
$conn = new mysqli('remotemysql.com', 'SNd4FOM10l', 'vWIgcql3tS', 'SNd4FOM10l');
if ($conn->connect_error){
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into donorgform(donorgname, donorgconper, donorgaff, donorgeadd, donorgtype, donorgmon, donorgink, donorgsoi)
	values (?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssssss", $donorgname, $donorgconper, $donorgaff, $donorgeadd, $donorgtype, $donorgmon, $donorgink, $donorgsoi);

	$stmt->execute();
	echo "Recorded Successfully";
	$stmt->close();
	$conn->close();
}

header("refresh: 1; url = 4.2.donor.html");
?>
