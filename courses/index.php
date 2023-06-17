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
      <a class="navbar-brand" href="/Bangkit">
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

  <section class="course " id="course">
    <div class="container mt-navbar">
      <h5 class="text-success">#LearnFromExpert</h5>
      <h1 class="fw-semibold">Courses Cataloge</h1>
      <p class="fw-light">
        Bangkit provides UI/UX classes design <br />& Web Development for
        beginners to advanced
      </p>
      <div class="row mt-5">
        <h4 class="fw-semibold">New Realesed</h4>
        <?php for ($i = 0; $i < 4; $i++) : ?>
          <div class="col-lg-3 mt-3">
            <a href="" class="card-roadmap text-decoration-none">
              <div class="card border-0 shadow rounded-4 overflow-hidden">
                <img src="../assets/img/course1.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-semibold">
                    Build e-Wallet Mobile Apps
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
        <?php endfor; ?>
      </div>
      <div class="row mt-5">
        <h4 class="fw-semibold">Browse Course <br>
          According to your career</h4>
        <?php for ($i = 0; $i < 10; $i++) : ?>
          <div class="col-lg-3 mt-3">
            <a href="" class="card-roadmap text-decoration-none">
              <div class="card border-0 shadow rounded-4 overflow-hidden">
                <img src="../assets/img/course2.png" class="card-img-top" alt="..." />
                <div class="card-body">
                  <h5 class="card-title fw-semibold">
                    Build e-Wallet Mobile Apps
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
        <?php endfor; ?>
      </div>
    </div>
  </section>

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