<?php
// HELL jjhjkhkk
$x=$_POST['name'];
$y=$_POST['roll'];
$con=mysqli_connect("localhost","root","","soubhik");
$sql="insert into student (name,roll) values ('$x','$y')";
mysqli_query($con,$sql);
header("location:index.php")

?>