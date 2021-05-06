<?php
include"dbcon.php";

echo $id=$_GET['id'];
$d="DELETE * FROM booknow where id=$id";
mysqli_query($con,$d);
header('location:booknow.php');

?>