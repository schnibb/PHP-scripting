<html>
<?php

$database = 'username';
$db = mysqli_connect('', 'username', 'password', $database);
$id= $_GET["id"];
$getRecord = "SELECT * FROM divelog WHERE id=$id";
$resultFromTable = mysqli_query($db, $getRecord);
$myrow = mysqli_fetch_array($resultFromTable);

if(isset($_POST['update'])){
  $date = $_POST["date"];
  $time = $_POST["time"];
  $loc = $_POST["location"];
  $site = $_POST["site"];
  $water = $_POST["water"];
  $entry = $_POST["entry"];
  $type = $_POST["type"];
  $gas = $_POST["gas"];
  $weight = $_POST["weight"];
  $exp = $_POST["exp"];
  $size = $_POST["size"];
  $tank = $_POST["tank"];
  $psiS = $_POST["psiS"];
  $psiE = $_POST["psiE"];
  $dive_time = $_POST["dive_time"];
  $depth = $_POST["depth"];
  $temp = $_POST["temp"];
  $buddy = $_POST["buddy"];
  $si = $_POST["si"];
  $notes = $_POST["notes"];
$record = "UPDATE divelog SET dive_date='$date', dive_time='$time', dive_location='$loc', dive_site='$site',
water='$water', entry_type='$entry', dive_type='$type', ean='$gas', weight='$weight', exp_pro='$exp',
tank_size='$size', tank_type='$tank', starting_psi='$psiS', ending_psi='$psiE', bottom_time='$dive_time',
max_depth='$depth', water_temp='$temp', buddy='$buddy', si='$si', notes='$notes' WHERE id=$id";
$result = mysqli_query($db, $record);
echo "Thank you, the information has been updated.\n";
?>
<a href="view_divelog.php">Return to Divelog</a><br>
<?
} else{
 ?>
 <h3><center>Replace the current information with the updated information:</center></h3>
<form method="post" action="<?php echo $PHP_SELF?>">
  Dive Date(Format year month day):
  <input type="date" name="date" value=<?php echo $myrow["dive_date"]?>><br>
  Dive Time(Format ):
  <input type="time" name="time" value=<?php echo $myrow["dive_time"]?>><br>
  Dive Location:
  <input type="text" name="location" maxlength="40" value=<?php echo $myrow["dive_location"]?>><br>
  Dive Site:
  <input type="text" name="site" maxlength="40" value=<?php echo $myrow["dive_site"]?>><br><br>
  Type of Water:<br>
  <select name="water" value=<?php echo $myrow["water"]?>>
    <option value="fresh">fresh</option>
    <option value="salt">salt</option>
  </select><br>
  Type of Entry:<br>
  <select name="entry" value=<?php echo $myrow["entry_type"]?>>
    <option value="boat">boat</option>
    <option value="shore">shore</option>
  </select><br>
  Type of Dive:<br>
  <select name="type" value= <?php echo $myrow["dive_type"]?>>
    <option value="fun">fun</option>
    <option value="class">class</option>
  </select><br>
  EAN:
  <input type="number" name="gas" min="21" max="40" value=<?php echo $myrow["ean"]?>><br>
  Weight:
  <input type="number" name="weight" min="0" max="40" value=<?php echo $myrow["weight"]?>><br>
  Exposure Protection:
  <select name="exp" value=<?php echo $myrow["exp_pro"]?>>
    <option value="none">None</option>
    <option value="1mm">1mm</option>
    <option value="2mm">2mm</option>
    <option value="3mm">3mm</option>
    <option value="4mm">4mm</option>
    <option value="5mm">5mm</option>
    <option value="6mm">6mm</option>
    <option value="7mm">7mm</option>
    <option value="Drysuit">Drysuit</option>
  </select><br>
  Tank Size:
  <select name="size" value=<?php echo $myrow["tank_size"]?>>
    <option value="60">60</option>
    <option value="80">80</option>
    <option value="100">100</option>
    <option value="110">110</option>
  </select><br>
  Tank Type:
  <select name="tank" value=<?php echo $myrow["tank_type"]?>>
    <option value="AL">AL</option>
    <option value="Steel">Steel</option>
  </select><br>
  Starting PSI:
  <input type="number" name="psiS" step="100" min="0" max="3000" value=<?php echo $myrow["starting_psi"]?>><br>
  Ending PSI:
  <input type="number" name="psiE" step="100" min="0" max="3000" value=<?php echo $myrow["ending_psi"]?>><br>
  Bottom Time(as a number ex. 60 for 1 hour):
  <input type="text" name="dive_time" maxlength="3" size="5" value=<?php echo $myrow["bottom_time"]?>><br>
  Max Depth:
  <input type="number" name="depth" min="5" max="130" value=<?php echo $myrow["max_depth"]?>><br>
  Water Temperature(Just the number):
  <input type="text" name="temp" maxlength="3" size="5"  value=<?php echo $myrow["water_temp"]?>><br>
  Buddy:
  <input type="text" name="buddy" maxlength="50"  value=<?php echo $myrow["buddy"]?>><br>
  Surface Interval(as a number ex. 60 for 1 hour):
  <input type="text" name="si" maxlength="4" size="5"  value=<?php echo $myrow["si"]?>><br>
  Add your dive notes below</br>
  <textarea name="notes" rows="4" cols="50" maxlength="250"><?php echo $myrow["notes"]?></textarea><br>
  <input type="submit" name="update" value="update">
</form>
   <br><a href="view_divelog.php">Go back to Divelog</a>
 <?
 }
 ?>
</html>
