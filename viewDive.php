<html>
<center><h3>Your Dive:</he></center>
<table BORDER=2>
  <tr>
    <th>Dive Number</th>
    <th>Dive Date</th>
    <th>Dive Time</th>
    <th>Dive Location</th>
    <th>Dive Site</th>
    <th>Water Type</th>
    <th>Entry Type</th>
    <th>Dive Type</th>
    <th>EAN</th>
    <th>Weight</th>
    <th>Exposure Type</th>
    <th>Tank Size</th>
    <th>Tank Type</th>
    <th>Starting PSI</th>
    <th>Ending PSI</th>
    <th>Bottom Time</th>
    <th>Max Depth</th>
    <th>Water Temperature</th>
    <th>Buddy</th>
    <th>Surface Interval</th>
    <th>Notes</th>
  </tr>
<?php
$database = 'ds6225';
$db = mysqli_connect('', 'ds6225', 'emE0J3B5', $database);


$id= $_GET["id"];
$record = "SELECT * FROM divelog WHERE id=$id";
$result = mysqli_query($db, $record);

while($line = mysqli_fetch_array($result, MYSQL_ASSOC))
{
  echo " <tr>\n ";
  foreach (array('id', 'dive_date', 'dive_time', 'dive_location', 'dive_site', 'water',
  'entry_type', 'dive_type', 'ean', 'weight', 'exp_pro', 'tank_size',
'tank_type', 'starting_psi', 'ending_psi', 'bottom_time', 'max_depth', 'water_temp', 'buddy', 'si',
'notes') as $field){
  echo "<td>{$line[$field]}</td>";
}
echo "\n </tr>\n";
}

 ?>

 <br><a href="view_divelog.php">Return to Divelog</a>
</html>
