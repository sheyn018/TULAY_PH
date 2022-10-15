<?php

$orgname = $_POST['orgname'];
$conper = $_POST['conper'];
$aff = $_POST['aff'];
$eadd = $_POST['eadd'];
$parttype = $_POST['parttype'];
$inquiry = $_POST['inquiry'];

//database connection
$conn = new mysqli('remotemysql.com', 'SNd4FOM10l', 'vWIgcql3tS', 'SNd4FOM10l');
if ($conn->connect_error){
	die('Connection Failed : ' .$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into partform(orgname, conper, aff, eadd, parttype, inquiry)
	values (?, ?, ?, ?, ?, ?)");

	$stmt->bind_param("ssssss", $orgname, $conper, $aff, $eadd, $parttype, $inquiry);

	$stmt->execute();
	echo "Recorded Successfully";
	$stmt->close();
	$conn->close();
}

header("refresh: 1; url = 4.3.part.html");
?>
