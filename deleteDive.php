<html>
<?php
$database = 'username';
$db = mysqli_connect('', 'username', 'password', $database);


$id= $_GET["id"];
$record = " Delete FROM divelog WHERE id=$id";
$result = mysqli_query($db, $record);
echo "<br>Your dive has been deleted.<br>";
 ?>

 <a href="view_divelog.php">Return to Divelog</a>
</html>
