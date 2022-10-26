<?php
session_start();

$conn = mysqli_connect(
  'db',
  'root',
  'password12345',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));

?>
