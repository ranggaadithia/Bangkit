<?php
session_start();

require '../function/index.php';

$id = $_GET["id"];
$course_id = $_GET["cid"];

if (deleteVideo($id) > 0) {
  $_SESSION['delete_video'] = true;
  header("Location: video.php?cid=$course_id");
} else {
  echo mysqli_error($conn);
}
