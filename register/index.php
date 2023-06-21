<?php
session_start();
require '../function/index.php';

if (isset($_POST["submit"])) {
  if (addUser($_POST) > 0) {
    $_SESSION['register_success'] = true;
    header('Location: ../login/index.php');
  }
} else {
  echo mysqli_error($conn);
}

?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Registration | Bangkit</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,600;1,700&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="../assets/style/app.css" />
</head>

<body class="bg-body-tertiary">
  <div class="d-flex align-items-center">
    <div class="img-cover vh-100 col-lg-4"></div>
    <div class="col-lg-8 d-flex justify-content-center">
      <div class="w-50">
        <img src="../assets/img/logo.svg" alt="" width="60" />
        <h1 class="mt-3 fw-bold">New Account</h1>
        <p class="fw-light mt-3">
          Lengkapi form di bawah dengan menggunakan data Anda yang valid
        </p>
        <div class="card rounded-4 border-0 shadow-sm mt-3">
          <div class="card-body p-4">
            <form action="" method="post">
              <div class="mb-3">
                <label for="name" class="form-label">Name (maks. 50 karakter)</label>
                <input type="text" class="form-control rounded-4" id="name" name="name" autocomplete="off" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control rounded-4" id="email" name="email" autocomplete="off" />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control rounded-4" id="password" name="password" autocomplete="off" />
              </div>
              <button type="submit" name="submit" class="btn btn-primary rounded-pill w-100 py-2 fw-bold">
                Register
              </button>
            </form>
            <p class="text-center">
              Already have a account? <a href="/login/index.php">Login here</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>

</html>