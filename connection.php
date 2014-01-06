<?php
// Create connection
$connect=mysqli_connect("co-project","team15","qfg84knv","team_15");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>