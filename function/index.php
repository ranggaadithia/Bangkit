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

function getRootURL()
{
  $protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https://' : 'http://';
  $host = $_SERVER['HTTP_HOST'];
  $root = $protocol . $host;

  return $root . '/bangkit';
}


function addRoadmap($post)
{
  global $conn;

  $name = htmlspecialchars($post["name"]);
  $description = htmlspecialchars($post["description"]);

  $image = uploadImage();

  $query = "INSERT INTO roadmaps VALUES (null, '$name', '$description', '$image')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function uploadImage()
{

  $namaFile = $_FILES['image']['name'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'svg'];
  $ekstensiGambar = explode('.', $namaFile);
  $ekstensiGambar = strtolower(end($ekstensiGambar));

  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    echo "<script>
						alert('yang anda upload bukan gambar!');
					</script>";
    return false;
  }

  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  move_uploaded_file($tmpName, '../assets/img/' . $namaFileBaru);

  return $namaFileBaru;
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
