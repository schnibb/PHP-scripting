<html>
<?php
$database = 'ds6225';
$db = mysqli_connect('', 'ds6225', 'emE0J3B5', $database);


$id= $_GET["id"];
$record = " Delete FROM divelog WHERE id=$id";
$result = mysqli_query($db, $record);
echo "<br>Your dive has been deleted.<br>";
 ?>

 <a href="view_divelog.php">Return to Divelog</a>
</html>
