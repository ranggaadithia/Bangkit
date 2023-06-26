<?php
session_start();
require '../function/index.php';
require '../function/utility.php';

$id = $_GET['cid'];

$course = query("SELECT * FROM courses WHERE id = '$id'")[0];

$videos = query("SELECT * FROM videos WHERE course_id = '$id' LIMIT 4");

if (isset($_POST['submit'])) {
  if (!isset($_SESSION['login'])) {
    Header("Location: ../login");
    exit;
  } else if (userEnroll($_SESSION['id'], $id)) {
    $_SESSION['course_id'] = $id;
    Header("Location: success_join.php");
    exit;
  }
}

?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Class Title | Bangkit</title>
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
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="nav-link active" aria-current="page" href="sales/">Flash Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 active" href="courses/">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 active" href="roadmaps/">Roadmap</a>
          </li>
        </ul>
      </div>
      <div class="auth">
        <ul class="navbar-nav">
          <li class="nav-item mx-3">
            <a class="py-3 px-4 bg-body-secondary rounded-pill text-decoration-none text-dark fw-bold" href="#">Masuk/Daftar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container mt-navbar">
    <div class="text-center">
      <h1 class="fs-2 fw-bold lh-base text-secondary-emphasis">
        Online Course <br />
        <?= $course['name']; ?>
      </h1>
      <p class="fw-light">Learn how to build a real project from scratch</p>
      <div class="d-flex mt-5 w-50 m-auto justify-content-between">
        <div class="d-flex align-items-center flex-rowr">
          <i class="bi bi-globe2 fs-4 me-2 text-secondary-emphasis"></i>
          <span>Release date <?= date_formated($course['release']); ?></span>
        </div>
        <div class="d-flex align-items-center flex-row">
          <i class="bi bi-layers fs-4 me-2 text-secondary-emphasis"></i>
          <span>Last Update <?= date_formated($course['updated']); ?></span>
        </div>
      </div>
      <div class="d-flex mt-5 w-75 m-auto justify-content-between">
        <div class="text-center">
          <p>Members</p>
          <p><span class="fw-bold"><?= total_enrollment($course['id']); ?></span> enrolled</p>
        </div>
        <div class="text-center">
          <p>Level</p>
          <i class="bi bi-bar-chart-fill fs-4 text-primary"></i>
        </div>
        <div class="text-center">
          <p>Certificate</p>
          <img src="../assets/img/ic_check_blue.svg" alt="" />
        </div>
        <div class="text-center">
          <p>Consultation</p>
          <img src="../assets/img/ic_check_blue.svg" alt="" />
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-8">
        <div class="ratio ratio-16x9">
          <iframe src="<?= $videos[0]['url']; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen class="rounded-4 shadow-lg"></iframe>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="card rounded-4 border-0 shadow overflow-hidden">
          <div class="card-body px-4 pt-4">
            <h5 class="fw-bold fs-6">12 lessons (31 minutes)</h5>
            <ul class="list-unstyled mt-3">
              <?php
              foreach ($videos as $video) :
              ?>
                <li class="mt-3">
                  <a class="w-100 btn py-2 bg-body-secondary rounded-pill text-decoration-none text-dark btn-play" href="#">
                    <div class="d-flex align-items-center justify-content-between fw-light ">
                      <i class="bi bi-play-circle-fill fs-5"></i>
                      <span><?= limitCharacter($video['title'], 19); ?></span>
                      <span><?= get_minutes($video['id']); ?> mins</span>
                    </div>
                  </a>
                </li>
              <?php
              endforeach;
              ?>
              <li class="mt-3">
                <a class="w-100 btn py-2 bg-body-secondary rounded-pill text-decoration-none text-dark btn-play" href="#">
                  <div class="d-flex justify-content-start align-items-center fw-light">
                    <i class="bi bi-play-circle-fill fs-5 mx-2"></i>
                    <span><?= video_count($course['id']); ?> another videos</span>
                  </div>
                </a>
              </li>
            </ul>
          </div>
          <a href="#join" class="btn btn-primary w-100 py-3 rounded-0">Join Now</a>
        </div>
      </div>
    </div>
    <div class="row mt-5">
      <div class="col-lg-8">
        <h5 class="fw-bold">Develop Your Skills</h5>
        <p class="fw-light">
          <?= $course['description']; ?>
        </p>
      </div>
    </div>
    <div class="row mt-5">
      <h5 class="fw-bold">Learn With Expert</h5>
      <div class="col-lg-4">
        <div class="card rounded-4 border-0 shadow-sm">
          <div class="card-body">
            <div class="d-flex justify-content-start align-items-center">
              <img src="../assets/img/default-profile-photo.jpg" alt="" width="80px" class="rounded-circle border border-primary border-3 p-1" />
              <div class="ms-3">
                <h5 class="fw-bold"><?= getMentorName($course['mentor_id']); ?></h5>
                <span class="fw-light"><?= getCategoryName($course['category_id']); ?></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="join" id="join">
      <div class="row mt-5 justify-content-center">
        <div class="text-center mt-5">
          <h1 class="fs-2 fw-bold">Low Risk, High Return</h1>
          <span class="fw-light">Investasi kepada diri kita sendiri memberikan <br />
            leverage kuat untuk masa depan karir kita
          </span>
        </div>
        <div class="col-lg-4 mt-3">
          <div class="card border-0 rounded-4 shadow-sm">
            <div class="card-body p-4">
              <img src="../assets/img/ic_review.svg" alt="" width="70px" />
              <p class="mt-3">Selamanya</p>
              <?php
              if ($course['discount'] > 0) :
              ?>
                <h3 class="text-danger fw-normal"><s><?= money_format($course['price']); ?></s></h3>
              <?php
              endif;
              ?>
              <h3 class="fw-bold"><?= discount($course['price'], $course['discount']); ?></h3>
              <p class="fw-light">
                Miliki kelas Premium secara permanen dan bangun sebuah projek
                nyata
              </p>
              <div class="border border-bottom border-dark border-opacity-10 mt-3"></div>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Akses kelas selamanya
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Premium rewards
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Career consultation
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Assets & group konsultasi
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Sertifikat kelulusan
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Free akses kelas Freemium
                </li>
              </ul>
              <ul class="list-unstyled mt-3">
                <li>
                  <img src="../assets/img/ic_check.svg" alt="" class="me-1" />
                  Lowongan magang dan kerja
                </li>
              </ul>
              <form action="" method="post">
                <button type="submit" name="submit" class="btn btn-primary w-100 mt-4 rounded-pill">Join Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="row mt-5 justify-content-center">
      <div class="col-lg-8">
        <div class="card border-0 rounded-4 shadow-sm">
          <div class="card-body p-4">
            <div class="d-flex align-items-center justify-content-between">
              <img src="../assets/img/ic_sekali_bayar.svg" alt="" width="90px" />
              <div class="ms-4 pe-4">
                <h5>Jaminan Uang Kembali</h5>
                <span class="fw-light">
                  Tidak perlu khawatir untuk mulai berinvestasi karena Anda
                  bisa melakukan refund
                </span>
              </div>
              <a class="py-3 px-4 bg-body-secondary rounded-pill text-decoration-none text-dark fw-bold" href="#">Pelajari</a>
            </div>
          </div>
        </div>
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