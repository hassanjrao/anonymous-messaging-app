<?php 


$username = $_SERVER["HTTP_HOST"] == "localhost" ? "root" : "confieohsn";

$password = $_SERVER["HTTP_HOST"] == "localhost" ? "" : "kJb9L4YWrnkpu9b";

$db_name = $_SERVER["HTTP_HOST"] == "localhost" ? "msgs_db" : "confieohsn";

$servername="localhost";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$db_name", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "Connected successfully";
  } catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
  }


?>