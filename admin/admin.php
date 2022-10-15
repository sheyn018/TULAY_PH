<?php
$adminuser = $_POST['adminuser'];
$adminpass = $_POST['adminpass'];

if(($adminuser == "admin") && ($adminpass == "12345"))
		{
                echo "Login Successfully!";
				header("refresh: 1; url= viewadmin.html");
        }
        else {
            echo "Invalid Input";
            header("refresh: 1; url= adminlogin.html");
        }

?>
