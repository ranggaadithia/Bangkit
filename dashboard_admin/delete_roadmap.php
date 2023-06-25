<?php
session_start();

require '../function/index.php';

$id = $_GET["id"];


if (deleteRoadmap($id) > 0) {
  $_SESSION['delete_roadmap'] = true;
  header("Location: index.php");
} else {
  echo mysqli_error($conn);
}
