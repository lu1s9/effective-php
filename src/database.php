<?php
$db_server = getenv('DB_HOST');
$db_user = getenv('DB_USER');
$db_pass = getenv('DB_PASSWORD');
$db_name =getenv('DB_NAME');
$conn = "";
  try {
  $conn= mysqli_connect($db_server, $db_user,$db_pass,$db_name);
  } catch (mysqli_sql_exception) {  
  echo "Could not connect! <br>";
  }
?>