<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "myDB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database

// $sql = "CREATE DATABASE myDB";
// if ($conn->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $conn->error;
// }

// sql to create table

// $sql = "CREATE TABLE users (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     username VARCHAR(32) NOT NULL,
//     email VARCHAR(50) NOT NULL,
//     password VARCHAR(32) NOT NULL,
//     phoneNumber INT(12),
//     address VARCHAR(500),
//     creditCardNo INT(16),
//     CCName VARCHAR(100),
//     CCExpiry VARCHAR(10),
//     CCValidationCode INT(3)
//     )";
    
//     if ($conn->query($sql) === TRUE) {
//       echo "Table Users created successfully";
//     } else {
//       echo "Error creating table: " . $conn->error;
//     }

$conn->close();
?>