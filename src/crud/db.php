<?php
session_start();

$conn = mysqli_connect(
  'cruddb.cmjveaivm8l6.us-east-2.rds.amazonaws.com',
  'root',
  'password12345',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
