<?php

$donindname = $_POST['donindname'];
$donindconnum = $_POST['donindconnum'];
$donindadd = $_POST['donindadd'];
$donindeadd = $_POST['donindeadd'];
$donindtype = $_POST['donindtype'];
$donindmon = $_POST['donindmon'];
$donindink = $_POST['donindink'];
$donindsoi = $_POST['donindsoi'];

//database connection
$conn = new mysqli('remotemysql.com', 'SNd4FOM10l', 'vWIgcql3tS', 'SNd4FOM10l');
if ($conn->connect_error){
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into donindform(donindname, donindconnum, donindadd, donindeadd, donindtype, donindmon, donindink, donindsoi)
	values (?, ?, ?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssssss", $donindname, $donindconnum, $donindadd, $donindeadd, $donindtype, $donindmon, $donindink, $donindsoi);

	$stmt->execute();
	echo "Recorded Successfully";
	$stmt->close();
	$conn->close();
}
header("refresh: 1; url = 4.2.donor.html");
?>
