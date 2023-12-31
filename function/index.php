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



function deleteRoadmap($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM roadmaps WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function addCourse($post)
{
  global $conn;

  $name = htmlspecialchars($post['name']);
  $description = htmlspecialchars($post['description']);
  $image = uploadImage();
  $price = htmlspecialchars($post['price']);
  $discount = htmlspecialchars($post['discount']);
  $mentor_id = $post['mentor_id'];
  $category_id = $post['category_id'];
  $roadmap_id = $post['roadmap_id'];

  $query = "INSERT INTO 
  `courses` (`name`, `description`, `image`, `price`, `discount`, `roadmap_id`, `mentor_id`, `category_id`) 
  VALUES ('$name', '$description', '$image', '$price', '$discount', '$roadmap_id', '$mentor_id', '$category_id')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function editRoadmap($post)
{
  global $conn;

  $id = $post['id'];
  $name = htmlspecialchars($post['name']);
  $description = htmlspecialchars($post['description']);
  $old_image = htmlspecialchars($post['old_image']);

  if ($_FILES['image']['error'] === 4) {
    $image = $old_image;
  } else {
    $image = uploadImage();
  }

  $query = "UPDATE roadmaps SET
            name = '$name',
            description = '$description',
            image = '$image'
            WHERE id = '$id';
  ";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function editCourse($post)
{
  global $conn;

  $id = $post['id'];
  $name = htmlspecialchars($post['name']);
  $description = htmlspecialchars($post['description']);
  $old_image = htmlspecialchars($post['old_image']);
  $price = htmlspecialchars($post['price']);
  $discount = htmlspecialchars($post['discount']);
  $mentor_id = $post['mentor_id'];
  $category_id = $post['category_id'];


  if ($_FILES['image']['error'] === 4) {
    $image = $old_image;
  } else {
    $image = uploadImage();
  }

  $query = "UPDATE courses SET 
            name = '$name',
            description = '$description',
            image = '$image',
            price = '$price',
            discount = '$discount',
            mentor_id = '$mentor_id',
            category_id = '$category_id'
            WHERE id = '$id';";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function deleteCourse($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM courses WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function addVideo($post)
{
  global $conn;

  $title = htmlspecialchars($post['title']);
  $description = htmlspecialchars($post['description']);
  $url = htmlspecialchars($post['url']);
  $input_time = htmlspecialchars($post['duration']);

  $duration = "00:" . $input_time;


  $course_id = $post['course_id'];

  $query = "INSERT INTO videos 
            VALUES 
            (null, '$title', '$description', '$url', '$duration', '$course_id')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function editVideo($post)
{
  global $conn;

  $id = $post['id'];
  $title = htmlspecialchars($post['title']);
  $description = htmlspecialchars($post['description']);
  $url = htmlspecialchars($post['url']);
  $input_time = htmlspecialchars($post['duration']);

  $duration = "00:" . $input_time;

  $query = "UPDATE videos SET 
            title = '$title',
            description = '$description',
            url = '$url',
            duration = '$duration'
            WHERE id = '$id'";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}

function deleteVideo($id)
{
  global $conn;
  mysqli_query($conn, "DELETE FROM videos WHERE id = $id");
  return mysqli_affected_rows($conn);
}

function uploadImage()
{

  $namaFile = $_FILES['image']['name'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];

  $ekstensiGambarValid = ['jpg', 'jpeg', 'png', 'svg', 'webp'];
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

  move_uploaded_file($tmpName, '../assets/img-upload/' . $namaFileBaru);

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


function userEnroll($user_id, $course_id)
{
  global $conn;

  $query = "INSERT INTO user_course (`user_id`, `course_id`) 
  VALUES ('$user_id', '$course_id')";

  mysqli_query($conn, $query);

  return mysqli_affected_rows($conn);
}
