<?php
require_once 'index.php';

function getMentorName($mentor_id)
{
  $mentor = query("SELECT * FROM users WHERE id = '$mentor_id'")[0];

  return $mentor['name'];
}

function getCategoryName($category_id)
{
  $category = query("SELECT * FROM category_class WHERE id = '$category_id'")[0];

  return $category['name'];
}

function getVideoId($id)
{
  $result = query("SELECT * FROM videos WHERE course_id = '$id'")[0];

  return $result['id'];
}

function money_format($price)
{
  $result = "Rp " . number_format($price, 0, '', '.');
  return $result;
}

function total_enrollment($course_id)
{
  $result = query("SELECT COUNT(*) AS total_enrollment FROM user_course 
  WHERE course_id = '$course_id'")[0];

  return $result['total_enrollment'];
}

function courses_count($id)
{
  $result = query("SELECT COUNT(*) as count FROM courses WHERE roadmap_id = '$id'")[0];

  return $result['count'];
}

function video_count($id)
{
  $result = query("SELECT COUNT(*) as count FROM videos WHERE course_id = '$id'")[0];

  return $result['count'];
}


function total_duration($id)
{
  $result = query("SELECT ROUND(CONCAT(SUM(TIME_TO_SEC(duration)) / 60)) AS total_duration
  FROM videos WHERE course_id = '$id'")[0];

  return $result['total_duration'];
}

function get_minutes($id)
{
  $result = query("SELECT ROUND(TIME_TO_SEC(duration) / 60) as duration
  FROM videos WHERE id = '$id'")[0];

  return $result['duration'];
}

function date_formated($data)
{
  $result = query("SELECT DATE_FORMAT('$data', '%M %Y') AS formatted_date
  FROM courses")[0];

  return $result['formatted_date'];
}

function discount($price, $discount)
{
  $discount = $price * $discount / 100;
  $result = $price - $discount;
  return money_format($result);
}

function limitCharacter($string, $limit)
{
  if (strlen($string) > $limit) {
    $string = substr($string, 0, $limit) . "...";
  }
  return $string;
}
