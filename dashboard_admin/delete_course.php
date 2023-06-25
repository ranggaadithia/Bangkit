<?php
session_start();

require '../function/index.php';

$id = $_GET["id"];
$roadmap_id = $_GET["rid"];

if (deleteCourse($id) > 0) {
  $_SESSION['delete_course'] = true;
  header("Location: course.php?rid=$roadmap_id");
} else {
  echo mysqli_error($conn);
}
