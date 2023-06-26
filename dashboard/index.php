<?php
session_start();
require '../function/index.php';
require '../function/utility.php';

if (!isset($_SESSION['login'])) {
  header("Location: ../login");
  exit;
}

$currentUserId = $_SESSION['id'];

$courses = query("SELECT courses.* FROM courses
JOIN user_course ON courses.id = user_course.course_id
WHERE user_course.user_id = $currentUserId");

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
    <div class="container py-2">
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

  <div class="mt-navbar">
    <div class="container">
      <h1>My Courses</h1>
      <p class="fw-light">
        Upgrade terus ilmu dan pengalaman <br />
        terbaru kamu di bidang teknologi
      </p>
      <div class="row">
        <?php foreach ($courses as $course) : ?>
          <div class="col-lg-3 mt-3">
            <a href="../courses/course_playing.php?cid=<?= $course['id']; ?>&vid=<?= getVideoId($course['id']); ?>" class="text-decoration-none card-roadmap">
              <div class="card rounded-4 shadow border-0">
                <div class="card-body px-4 py-3">
                  <img src="../assets/img-upload/<?= $course['image']; ?>" alt="" class="img-fluid rounded-4 mb-4" />
                  <h5 class="card-title"><?= $course['name']; ?></h5>
                  <h6 class="card-subtitle mb-2 text-success mt-1">
                    <i class="bi bi-play-fill"></i> Continue Watching
                  </h6>
                </div>
              </div>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <img src="../assets/img/logo.svg" alt="" width="55" />
        </a>
        <p>PT. Bangkit Membangun Bangsa</p>
        <p class="text-body-secondary">&copy; 2023</p>
      </div>

      <div class="col mb-3"></div>

      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">About</a>
          </li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">About</a>
          </li>
        </ul>
      </div>

      <div class="col mb-3">
        <h5>Section</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Home</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Features</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">Pricing</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">FAQs</a>
          </li>
          <li class="nav-item mb-2">
            <a href="#" class="nav-link p-0 text-body-secondary">About</a>
          </li>
        </ul>
      </div>
    </footer>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>

</html>