<?php
$con = mysqli_connect("localhost","root","","login");
if (mysqli_connect_errno())
  {
  echo "Could not connect to MySQL: " . mysqli_connect_error();
  }
?>