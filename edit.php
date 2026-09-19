<?php

$id=$_GET['id'];
$con=mysqli_connect("localhost","root","","soubhik");
$sql="select*from student where id=$id";
$res=mysqli_query($con,$sql);
$r=mysqli_fetch_assoc($res)
?>
<form action="update.php" method="post">
    <input type="hidden" name="id" value="<?php echo $r['id']  ?>">
<input type="text" name="name" value="<?php echo $r['name']?>">
<input type="number" name="roll" value="<?php echo $r['roll']?>">
<input type="submit" value="update">
</form>
