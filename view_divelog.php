<html>
<center><h2>Dive Log</h2>
<a href="addDive.html">Add a Dive</a>
<h4>Search for a Dive</h4>
<form action="searchDive.php" method="post">
  Search By:
  <select name="field">
    <option value="id">Dive Number</option>
    <option value="dive_date">Dive Date</option>
    <option value="dive_time">Dive Time</option>
    <option value="dive_location">Dive Location</option>
    <option value="dive_site">Dive Site</option>
    <option value="water">Water</option>
    <option value="entry_type">Entry Type</option>
    <option value="dive_type">Dive Type</option>
    <option value="ean">EAN</option>
    <option value="weight">weight</option>
    <option value="exp_pro">Exposure Protection</option>
    <option value="tank_size">Tank Size</option>
    <option value="tank_type" checked>Tank Type</option>
    <option value="starting_psi">Starting PSI</option>
    <option value="ending_psi">Ending PSI</option>
    <option value="bottom_time">Bottom Time</option>
    <option value="max_depth">Max Depth</option>
    <option value="water_temp">Water Temperature</option>
    <option value="buddy">Buddy</option>
    <option value="si">Surface Interval</option>
  </select>
  Search For:
  <input type="text" name="term">
  <input type="submit" value="search">
</form>
<?php
$db = mysql_connect('', 'ds6225', 'emE0J3B5');
mysql_select_db('ds6225', $db);

$result = mysql_query("SELECT * FROM divelog", $db);
echo "<table BORDER=2>";
echo "<tr>
      <th> Dive Number </th>
      <th> Dive Date </th>
      <th> Dive Time </th>
      <th> Dive Location </th>
      <th> Options </th>
      </tr>";

      while($myrow = mysql_fetch_array($result)){
        echo "<tr>
              <td>".$myrow["id"];
        echo "</td><td>".$myrow["dive_date"];
        echo "</td><td>".$myrow["dive_time"];
        echo "</td><td>".$myrow["dive_location"];
        echo "</td><td> <a href=\"viewDive.php?id=".$myrow[id]."\">View</a>
              <a href=\"updateDive.php?id=".$myrow[id]."\">Update</a>
              <a href=\"deleteDive.php?id=".$myrow[id]."\">Delete</a>
              </td></tr>";
      }
      echo "</table>";
?>
</center>
</html>
