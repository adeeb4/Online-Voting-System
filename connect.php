<?php


$connect = mysqli_connect("localhost" , "root" , "8958787231" , "voting") or die("connection failed!");

if($connect)
{
	echo "connected!";
}

else
{
	echo "Not Connected!";
}

?>