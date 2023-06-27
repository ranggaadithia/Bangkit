<?php
session_start();
require '../function/index.php';

if (isset($_POST["login"])) {
  $email = $_POST["email"];
  $password = $_POST["password"];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    if (password_verify($password, $row["password"])) {
      // set session
      $_SESSION['login'] = true;
      $_SESSION['name'] = $row['name'];
      $_SESSION['id'] = $row['id'];
      $_SESSION['role'] = $row['role'];
    }
  }

  $error = true;
}

if (isset($_SESSION["role"])) {
  if ($_SESSION["role"] == "student") {
    header("Location: ../dashboard/index.php");
  } else if ($_SESSION["role"] == "admin") {
    header("Location: ../dashboard_admin/index.php");
    exit;
  }
}




?>


<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login | Bangkit</title>
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
        <h1 class="mt-3 fw-bold">Login</h1>
        <?php if (isset($_SESSION["register_success"])) : ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Congratulation</strong> your account successfuly created. Please login tu continue
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            your email or password is wrong
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>
        <p class="fw-light mt-3">
          Login to start learning
        </p>
        <div class="card rounded-4 border-0 shadow-sm mt-3">
          <div class="card-body p-4">
            <form action="" method="post">
              <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control rounded-4" id="email" autocomplete="off" name="email" />
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control rounded-4" id="password" autocomplete="off" name="password" />
              </div>
              <button type="submit" class="btn btn-primary rounded-pill w-100 py-2 fw-bold" name="login">
                Login
              </button>
            </form>
            <p class="text-center">
              Don't have an account yet? <a href="<?= getRootURL(); ?>/register/index.php">Register here</a>
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