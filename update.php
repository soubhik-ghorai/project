<?php
$id=$_POST['id'];
$name=$_POST['name'];
$roll=$_POST['roll'];
$con=mysqli_connect("localhost","root","","soubhik");
$sql="update student set name='$name',roll='$roll' where id=$id";
mysqli_query($con,$sql);
header("location:index.php")
?>