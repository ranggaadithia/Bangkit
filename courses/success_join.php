<?php
session_start();
require '../function/index.php';
require '../function/utility.php';

$id = $_SESSION['course_id'];

$vid = query("SELECT * FROM videos WHERE course_id = '$id'")[0];


?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Title | Bangkit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/style/app.css" />
</head>

<body class="bg-body-tertiary">
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-6 text-center">
        <img src="../assets/img/ill_success_join.svg" alt="" class="img-fluid w-75" />
        <div class="text-center my-5">
          <h1 class="fw-bold">Happy Learning</h1>
          <p class="fw-light">
            Silakan mempelajari materi kelas yang telah kami design dengan
            baik untuk mencapai goals
          </p>
          <a href="course_playing.php?cid=<?= $id; ?>&vid=<?= $vid['id']; ?>" class="btn w-75 py-2 fw-bold btn-primary rounded-pill">Start Learning</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>

</html>