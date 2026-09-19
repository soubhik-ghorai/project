<?php
$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","soubhik");
$sql="delete from student where id=$id";
mysqli_query($con,$sql);
header("location:index.php")
?>