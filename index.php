<?php
session_start();
require 'function/index.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bangkit | Online Course</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="assets/style/app.css" />
</head>

<body class="bg-body-tertiary">
  <nav class="navbar navbar-expand-lg fixed-top shadows-lg" style="
    background-color: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
  ">
    <div class="container py-2">
      <a class="navbar-brand" href="#">
        <img src="assets/img/logo.svg" alt="Bangkit" width="55" />
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
            <a class="nav-link mx-3 active" href="<?= getRootURL(); ?>/courses">Course</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mx-3 active" href="<?= getRootURL(); ?>/roadmaps/">Roadmap</a>
          </li>
        </ul>
      </div>
      <div class="auth">

        <?php
        if (!isset($_SESSION['login'])) :
        ?>
          <ul class="navbar-nav">
            <li class="nav-item mx-3">
              <a class="py-3 px-4 bg-body-secondary rounded-pill text-decoration-none text-dark fw-bold" href="<?= getRootURL() ?>/login">Masuk/Daftar</a>
            </li>
          </ul>
        <?php
        endif;
        ?>
        <div class="auth d-flex">
          <p class="mt-3 me-3">Hi, <?= $_SESSION['name']; ?></p>
          <div class="dropdown">
            <a class="dropdown-toggle d-flex align-items-center text-decoration-none text-dark" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
              <div class="profile-initial">
                <span><?= substr($_SESSION['name'], 0, 1); ?></span>
              </div>
            </a>
            <ul class="dropdown-menu dropdown-menu-start dropdown-menu-lg-end" aria-labelledby="dropdownMenuLink">
              <?php
              if ($_SESSION['role'] == 'admin') :
              ?>
                <li><a class="dropdown-item" href="<?= getRootURL(); ?>/dashboard_admin">Dashboard Admin</a></li>
              <?php
              endif;
              ?>
              <li><a class="dropdown-item" href="<?= getRootURL(); ?>/dashboard">Dashboard</a></li>
              <hr class="dropdown-divider" />
              </li>
              <li><a class="dropdown-item" href="<?= getRootURL(); ?>/logout">Logout</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <section class="jumbotron" id="jumbotron">
    <div class="container" style="margin-top: 110px">
      <div class="row">
        <div class="col-6">
          <div class="d-flex justify-content-center flex-column" style="height: 500px">
            <h5 class="text-success">#SpiritOfLearning</h5>
            <h1 class="fw-bold text-dark mt-2 mb-3" style="font-size: 3rem">
              Your Dream Career Starts With Us
            </h1>
            <p class="fw-light fs-5">
              Bangkit provides UI/UX design, Web Development, and Freelancer
              classes for beginners.
            </p>
            <a href="" class="btn btn-primary w-25 py-2 fw-semibold rounded-pill">Roadmap</a>
          </div>
        </div>
        <div class="col-6">
          <div class="d-flex justify-content-center flex-column" style="height: 500px">
            <img src="assets/img/jumbotron.png" alt="" class="img-fluid" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="roadmap mt-5 vh-100" id="roadmap">
    <div class="container">
      <h5 class="fw-medium text-success">Folow The Roadmap</h5>
      <h1 class="fw-semibold">Bangkit Roadmap <br />to Build a Career</h1>
      <div class="row mt-5">
        <div class="col-lg-4">
          <a href="" class="text-decoration-none card-roadmap">
            <div class="card rounded-3 shadow border-0">
              <div class="card-body px-4 py-3">
                <img src="assets/img/cover1.webp" alt="" class="img-fluid rounded-5 mb-4" />
                <h5 class="card-title">Become User-Interface Designer</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  20 Course • 77 Hours
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="text-decoration-none card-roadmap">
            <div class="card rounded-3 shadow border-0">
              <div class="card-body px-4 py-3">
                <img src="assets/img/cover2.webp" alt="" class="img-fluid rounded-5 mb-4" />
                <h5 class="card-title">Become User-Interface Designer</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  20 Course • 77 Hours
                </h6>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="text-decoration-none card-roadmap">
            <div class="card rounded-3 shadow border-0">
              <div class="card-body px-4 py-3">
                <img src="assets/img/cover3.webp" alt="" class="img-fluid rounded-5 mb-4" />
                <h5 class="card-title">Become User-Interface Designer</h5>
                <h6 class="card-subtitle mb-2 text-body-secondary">
                  20 Course • 77 Hours
                </h6>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="start-learning mb-5" id="start-learning">
    <div class="container">
      <h5 class="text-success fw-medium">Start Learning Today</h5>
      <h1 class="fw-semibold">
        Online Design Class, <br />Development, and Freelancers
      </h1>
      <div class="row mt-5">
        <div class="col-lg-3">
          <div class="card rounded-3 shadow border-0">
            <div class="card-body px-4 py-3">
              <img src="assets/img/ic_flag.svg" alt="" class="img-fluid rounded-5 mb-4 w-25" />
              <div class="row mt-3">
                <a href="" class="d-inline-flex text-decoration-none">
                  <div class="col-10">
                    <h5 class="card-title text-dark">Pilih Roadmap</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                      The best Roadmap
                    </h6>
                  </div>
                  <div class="col-2">
                    <i class="bi bi-arrow-right-short fs-1 text-dark"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card rounded-3 shadow border-0">
            <div class="card-body px-4 py-3">
              <img src="assets/img/ic_design.svg" alt="" class="img-fluid rounded-5 mb-4 w-25" />
              <div class="row mt-3">
                <a href="" class="d-inline-flex text-decoration-none">
                  <div class="col-10">
                    <h5 class="card-title text-dark">Pilih Roadmap</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                      The best Roadmap
                    </h6>
                  </div>
                  <div class="col-2">
                    <i class="bi bi-arrow-right-short fs-1 text-dark"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card rounded-3 shadow border-0">
            <div class="card-body px-4 py-3">
              <img src="assets/img/ic_appcode.svg" alt="" class="img-fluid rounded-5 mb-4 w-25" />
              <div class="row mt-3">
                <a href="" class="d-inline-flex text-decoration-none">
                  <div class="col-10">
                    <h5 class="card-title text-dark">Pilih Roadmap</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                      The best Roadmap
                    </h6>
                  </div>
                  <div class="col-2">
                    <i class="bi bi-arrow-right-short fs-1 text-dark"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="card rounded-3 shadow border-0">
            <div class="card-body px-4 py-3">
              <img src="assets/img/ic_softskills.svg" alt="" class="img-fluid rounded-5 mb-4 w-25" />
              <div class="row mt-3">
                <a href="" class="d-inline-flex text-decoration-none">
                  <div class="col-10">
                    <h5 class="card-title text-dark">Pilih Roadmap</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">
                      The best Roadmap
                    </h6>
                  </div>
                  <div class="col-2">
                    <i class="bi bi-arrow-right-short fs-1 text-dark"></i>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="previlage pt-5 mb-5" id="previlage">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <img src="assets/img/previlage.png" alt="" class="img-fluid" />
        </div>
        <div class="col-lg-5 pt-5">
          <h5 class="text-success">You Deserve Better Career</h5>
          <h1 class="fs-2 fw-bold">Privileges From Bangkit Career Growing</h1>
          <ul class="list-unstyled fw-light">
            <li class="mt-2">
              <img src="assets/img/ic_check.svg" alt="" />
              Akses BuildWithAngga selamanya
            </li>
            <li class="mt-3">
              <img src="assets/img/ic_check.svg" alt="" />
              Free materi update kelas
            </li>
            <li class="mt-3">
              <img src="assets/img/ic_check.svg" alt="" />
              Real-world projects Freelancer
            </li>
            <li class="mt-3">
              <img src="assets/img/ic_check.svg" alt="" />
              Forum UI/UX design & Web Development
            </li>
            <li class="mt-3">
              <img src="assets/img/ic_check.svg" alt="" />
              Privileges kelas online lainnya
            </li>
          </ul>
          <a href="" class="btn btn-primary w-25 py-2 fw-semibold rounded-pill">Join Now</a>
        </div>
      </div>
    </div>
  </section>

  <section id="tools " class="tools pt-5 vh-100">
    <div class="container">
      <div class="text-center">
        <h5 class="text-success">Mastering Freelancer Tools</h5>
        <h1 class="fw-bold">
          Bangkit Course.<br />
          The Most Updated Material.
        </h1>
      </div>
      <div class="row mt-5">
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/react.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">React</h3>
                <p class="text-secondary">Frontend</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/python.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Python</h3>
                <p class="text-secondary">Data Science</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/excel.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Excel</h3>
                <p class="text-secondary">Data Analist</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/laravel.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Laravel</h3>
                <p class="text-secondary">Backend</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/figma.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Figma</h3>
                <p class="text-secondary">UI/UX Designer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/flutter.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Flutter</h3>
                <p class="text-secondary">Mobile Programing</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/kotlin.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Kotlin</h3>
                <p class="text-secondary">Android</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 mt-4">
          <div class="card p-2 border-0 shadow-sm rounded-3">
            <div class="d-flex flex-row align-items-center justify-content-start">
              <div class="icon ps-2">
                <img src="assets/img/vue-logomark.svg" alt="" width="50" />
              </div>
              <div class="ml-3 d-flex flex-column p-3">
                <h3 style="margin-bottom: -1px">Vue</h3>
                <p class="text-secondary">Frontend</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="course" class="course mb-5">
    <div class="container">
      <h5 class="text-success">Become Freelancer</h5>
      <h1 class="fw-semibold">
        Featured Bangkit class <br />
        Study Design & Development
      </h1>
      <div class="row mt-5">
        <div class="col-lg-4">
          <a href="" class="card-roadmap text-decoration-none">
            <div class="card border-0 shadow rounded-4 overflow-hidden">
              <img src="assets/img/course1.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title fw-semibold">
                  Full-Stack Laravel Flutter: Build e-Wallet Mobile Apps
                </h5>
                <p class="fw-light mt-2">Rp. 780.000</p>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person-fill text-primary fs-5"></i>
                  <span class="fw-light text-secondary">(79)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="card-roadmap text-decoration-none">
            <div class="card border-0 shadow rounded-4 overflow-hidden">
              <img src="assets/img/course2.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title fw-semibold">
                  Full-Stack Laravel Flutter: Build e-Wallet Mobile Apps
                </h5>
                <p class="fw-light mt-2">Rp. 780.000</p>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person-fill text-primary fs-5"></i>
                  <span class="fw-light text-secondary">(79)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-4">
          <a href="" class="card-roadmap text-decoration-none">
            <div class="card border-0 shadow rounded-4 overflow-hidden">
              <img src="assets/img/course3.png" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title fw-semibold">
                  Full-Stack Laravel Flutter: Build e-Wallet Mobile Apps
                </h5>
                <p class="fw-light mt-2">Rp. 780.000</p>
                <div class="d-flex align-items-center">
                  <i class="bi bi-person-fill text-primary fs-5"></i>
                  <span class="fw-light text-secondary">(79)</span>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="faq pt-5 mb-5" id="faq">
    <div class="container">
      <div class="text-center">
        <h5 class="text-success">Ask Bangkit!</h5>
        <h1 class="fw-semibold">
          Frequently Asked <br />
          Questions 😊
        </h1>
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-5">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-5">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
          <div class="accordion mt-3" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                  Apakahh Pemula bisa ikut?
                </button>
              </h2>
              <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>This is the third item's accordion body.</strong> It
                  is hidden by default, until the collapse plugin adds the
                  appropriate classes that we use to style each element. These
                  classes control the overall appearance, as well as the
                  showing and hiding via CSS transitions. You can modify any
                  of this with custom CSS or overriding our default variables.
                  It's also worth noting that just about any HTML can go
                  within the <code>.accordion-body</code>, though the
                  transition does limit overflow.
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="join mt-5" id="join">
    <div class="d-flex align-items-center justify-content-center flex-column vh-100">
      <img src="assets/img/ic_mentor.svg" alt="" width="100" />
      <h1 class="mt-4">Ready to Build Your Future?</h1>
      <p class="fw-light mt-2">
        Learn directly from experienced mentors in the field indefinitely
      </p>
      <a href="" class="btn btn-primary px-4 py-2 fw-semibold rounded-pill">Join</a>
    </div>
  </section>

  <div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 my-5 border-top">
      <div class="col mb-3">
        <a href="/" class="d-flex align-items-center mb-3 link-body-emphasis text-decoration-none">
          <img src="assets/img/logo.svg" alt="" width="55" />
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
  <script src="assets/js/index.js"></script>
</body>

</html>