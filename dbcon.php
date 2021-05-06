<?php

$con=mysqli_connect('localhost','root','','hostel');

if($con)
{
	echo "connected";
}
else
{
	echo "not connected";
}

?>