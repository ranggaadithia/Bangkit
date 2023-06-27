<?php
session_start();
require '../function/index.php';
require '../function/utility.php';


if (!isset($_SESSION["login"]) || $_SESSION["role"] != "admin") {
  Header("Location: ../login");
  exit;
}

$mentors = query("SELECT * FROM users WHERE role = 'mentor'");
$categories = query("SELECT * FROM category_class");


$roadmap_id = $_GET['rid'];
$id = $_GET['id'];

$course = query("SELECT * FROM courses WHERE id = '$id'")[0];

if (isset($_POST["submit"])) {
  if (editCourse($_POST) > 0) {
    $_SESSION["edit_course"] = true;
    header("Location: course.php?rid=$roadmap_id");
    exit;
  } else {
    echo mysqli_error($conn);
  }
}

?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Edit Course | Bangkit</title>
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
          <a href="<?= getRootURL(); ?>/dashboard_admin" class="text-decoration-none text-dark">My Dashboard </a>
        </ul>
      </div>
      <?php
      if (isset($_SESSION['login'])) :
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
      <?php
      endif;
      ?>
    </div>
  </nav>
  <div class="container" style="margin-top: 150px;">

    <div class="row justify-content-center">
      <div class="col-10">
        <div class="card">
          <div class="card-body">
            <h3 class="text-center">Edit Course</h3>
            <form action="" method="post" enctype="multipart/form-data">
              <input type="hidden" value="<?= $course['id']; ?>" name="id">
              <input type="hidden" value="<?= $course['image']; ?>" name="old_image">
              <div class="mb-3">
                <label for="name" class="form-label">Course Name</label>
                <input type="text" class="form-control" id="name" name="name" autocomplete="off" value="<?= $course['name']; ?>" />
              </div>
              <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" rows="5" class="form-control" id="description" name="description"><?= $course['description']; ?></textarea>
              </div>
              <div class="mb-3">
                <label for="Image" class="form-label">Image</label>
                <br>
                <img src="../assets/img-upload/<?= $course['image']; ?>" alt="" class="w-50 img-thumbnail mb-1">
                <input class="form-control" type="file" id="Image" name="image">
              </div>
              <div class="d-flex">
                <div class="w-25 me-4 ">
                  <label for="price" class="form-label">Price</label>
                  <div class="input-group mb-3">
                    <span class="input-group-text" id="price">Rp </span>
                    <input type="number" class="form-control" aria-describedby="price" name="price" id="price" value="<?= $course['price']; ?>">
                  </div>
                </div>
                <div class="w-25">
                  <label for="price" class="form-label">Discount</label>
                  <div class="input-group mb-3">
                    <input type="number" class="form-control" aria-describedby="discount" name="discount" id="discount" value="<?= $course['discount']; ?>">
                    <span class="input-group-text" id="discount">%</span>
                  </div>
                </div>
              </div>

              <div class="mb-3">
                <label for="mentor">Mentor</label>
                <select class="form-select w-50" aria-label="mentor" name="mentor_id">
                  <?php
                  foreach ($mentors as $mentor) :
                  ?>
                    <option <?php if ($course['mentor_id'] == $mentor['id']) : ?> selected <?php endif; ?> value="<?= $mentor['id']; ?>"><?= $mentor['name']; ?></option>
                  <?php
                  endforeach;
                  ?>


                </select>
              </div>

              <div class="mb-3">
                <label for="category_id">Category</label>
                <select class="form-select w-50" aria-label="category" name="category_id">
                  <option selected>Select Category</option>
                  <?php
                  foreach ($categories as $category) :
                  ?>
                    <option <?php if ($course['category_id'] == $category['id']) : ?> selected <?php endif; ?> value="<?= $category['id']; ?>"><?= $category["name"]; ?></option>
                  <?php
                  endforeach;
                  ?>
                </select>
              </div>
              <button type="submit" name="submit" class="btn btn-primary">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>


  </div>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>