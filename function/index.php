<?php
$host = 'localhost';
$db_name = 'bangkit';
$username = 'root';
$password = '';
$conn = mysqli_connect($host, $username, $password, $db_name);

function query($query)
{
  global $conn;
  $result = mysqli_query($conn, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function addUser($post)
{
  global $conn;
  $name = htmlspecialchars($post["name"]);
  $email = htmlspecialchars($post["email"]);
  $password = htmlspecialchars($post["password"]);

  // Hash the password
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO `users` (`name`, `email`, `password`) VALUES ('$name', '$email', '$hashedPassword')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
