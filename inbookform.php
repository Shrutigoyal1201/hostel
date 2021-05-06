<?php

include"dbcon.php";

if(isset($_POST['submit']))
{
	echo $n=$_POST['name'];
	echo $e=$_POST['email'];
	echo $m=$_POST['mobile'];
	echo $g=$_POST['gender'];
	echo $q=$_POST['qual'];
	echo $p=$_POST['package'];

	$q="INSERT INTO booknow(name,email,mobile,gender,qual,package)values('$n','$e','$m','$g','$q','$p')";

	$query=mysqli_query($con,$q);

	if($query)
	{
		$_SESSION['success']="Thankyou! Your details are safe with us. Our coordinators will get back to you asap!";
		header('location:index.php');
	}
	else
	{
		$_SESSION['error']="Sorry! could not submit your details, Try again.";
		header('location:index.php');
	}
	
}