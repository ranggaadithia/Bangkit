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
