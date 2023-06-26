<?php
session_start();
require '../function/index.php';
require '../function/utility.php';

$id = $_GET['cid'];

$vid = $_GET['vid'];

$course = query("SELECT * FROM courses WHERE id = '$id'")[0];

$videos = query("SELECT * FROM videos WHERE course_id = '$id'");

$videoPlay = query("SELECT * FROM videos WHERE id = '$vid'")[0];


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
  <nav class="navbar navbar-expand-lg fixed-top shadows-lg" style="
        background-color: rgba(255, 255, 255, 0.8);
        backdrop-filter: blur(10px);
      ">
    <div class="container-xxl py-2">
      <a class="navbar-brand" href="#">
        <img src="../assets/img/logo.svg" alt="Bangkit" width="55" />
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-5">
          <a href="" class="text-decoration-none text-dark">My Dashboard </a>
        </ul>
      </div>
      <div class="auth d-flex">
        <p class="mt-3 me-3">Hi, Rangga</p>
        <div class="dropdown">
          <a class="dropdown-toggle d-flex align-items-center text-decoration-none text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
            <div class="profile-initial">
              <span>R</span>
            </div>
          </a>

          <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>



  <div class="container-xxl" style="margin-top: 120px">
    <div class="row">
      <div class="col-lg-3">
        <div class="card border-0 rounded-4 shadow" style="height: 500px">
          <span class="p-3 fw-bold shadow"><?= video_count($course['id']); ?> videos (35 minutes)</span>
          <div class="card-body overflow-auto">
            <ul class="list-unstyled">
              <?php foreach ($videos as $video) : ?>
                <li class="mt-3">
                  <a class="w-100 btn py-2 bg-body-secondary rounded-pill text-decoration-none text-dark btn-play" href="course_playing.php?cid=<?= $id; ?>&vid=<?= $video['id']; ?>">
                    <div class="d-flex justify-content-start align-items-center fw-light">
                      <i class="bi bi-play-circle-fill fs-5"></i>
                      <div class="d-flex flex-column text-start ms-3">
                        <span><?= $video['title']; ?></span>
                        <span style="font-size: 12px"><?= get_minutes($video['id']); ?> mins</span>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-lg-9">
        <div class="ratio ratio-16x9">
          <iframe src="<?= $videoPlay['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-4 shadow-lg"></iframe>
        </div>
        <div class="d-flex mt-3 justify-content-between">
          <div class="">
            <h3 class="fw-bold"><?= $videoPlay['title']; ?></h3>
            <p class="fw-light">
              <?= $videoPlay['description']; ?>
            </p>
          </div>
          <!-- <a href="course_playing.php?cid=<?= $id; ?>&vid=<?= $video['id'] + 1; ?>" class="btn btn-primary h-25 px-5 py-2 fw-bold rounded-pill">Next</a> -->
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>

</html>