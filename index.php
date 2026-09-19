<!DOCTYPE html>
<head>
    <title>Document</title>
</head>
<body>
    <form action="action.php" method="post">
        <input type="text" placeholder="enter your name" name="name">
        <input type="number" placeholder="enter your roll" name="roll">
        <input type="submit" value="submit">
    </form>
    <table border="1">
<tr>
<th>ID</th>
<th>NAME</th>
<th>ROLL</th>
<th>EDIT</th>
<th>DELETE</th>
</tr>
<?php
$con=mysqli_connect("localhost","root","","soubhik");
$sql="select * from student";
$d=mysqli_query($con,$sql);
while($r=mysqli_fetch_assoc($d)){?>
<tr>
    <td><?php echo $r['id']; ?></td>
    <td><?php echo $r['name']; ?></td>
    <td><?php echo $r['roll']; ?></td>
    <td><a href="edit.php ?id=<?php echo $r['id'] ?>">EDIT</a></td>
    <td><a href="delete.php ?id=<?php echo $r['id'] ?>">DELETE</a></td>
</tr>
<?php
}
 ?>
 </table>
</body>
</html>