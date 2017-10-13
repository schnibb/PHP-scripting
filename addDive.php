<!doctype html>
<html>
<body>
  <?php
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

    $record = "INSERT INTO divelog(dive_date, dive_time, dive_location, dive_site, water, entry_type,
    dive_type, ean, weight, exp_pro, tank_size, tank_type, starting_psi, ending_psi, bottom_time, max_depth,
    water_temp, buddy, si, notes) VALUES('$date','$time','$loc','$site','$water','$entry',
    '$type','$gas','$weight','$exp','$size','$tank','$psiS','$psiE','$dive_time','$depth','$temp','$buddy',
    '$si','$notes')";

    $db = mysql_connect('', 'ds6225', 'emE0J3B5');
    mysql_select_db('ds6225', $db);

    mysql_query($record);

    echo "Your information was received and submitted to your Dive Log <br>";

   ?>

   <a href="addDive.html">Click here to enter another dive</a><br>
   <a href="view_divelog.php">Go back to Divelog</a>
</body>
</html>
