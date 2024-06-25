<?php
// connect to the database
$conn = mysqli_connect("database-1.c3gskywgqkaj.ap-southeast-2.rds.amazonaws.com", "admin", "Unlock-RDS", "system_data");
// Check for connection errors
if (mysqli_connect_errno()) {
  die("Connection Fail" . mysqli_connect_error());
}
