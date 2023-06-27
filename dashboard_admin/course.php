<?php
session_start();
require '../function/index.php';
require '../function/utility.php';


if (!isset($_SESSION["login"]) || $_SESSION["role"] != "admin") {
  Header("Location: ../login");
  exit;
}

$roadmap_id = $_GET['rid'];

$roadmap = query("SELECT * FROM roadmaps WHERE id = '$roadmap_id'")[0];

$courses = query("SELECT * FROM courses WHERE roadmap_id = '$roadmap_id'");



?>

<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Course | Bangkit</title>
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
    <div class="d-flex justify-content-between">
      <h1>Courses From <?= $roadmap["name"]; ?></h1>
      <a href="add_course.php?rid=<?= $roadmap_id; ?>" class="btn btn-primary" style="height: 40px;">Add Course</a>
    </div>
    <?php if (isset($_SESSION["add_course"])) : ?>
      <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
        New Course successfully added
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION["add_course"]) ?></button>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["edit_course"])) : ?>
      <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
        New Course successfully added
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION["edit_course"]) ?></button>
      </div>
    <?php endif; ?>
    <?php if (isset($_SESSION["delete_course"])) : ?>
      <div class="alert alert-success my-3 alert-dismissible fade show" role="alert">
        The course successfully deleted
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><?php unset($_SESSION["delete_course"]) ?></button>
      </div>
    <?php endif; ?>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Price</th>
          <th scope="col">Discount</th>
          <th scope="col">Mentor</th>
          <th scope="col">Category</th>
          <th scope="col">Members</th>
          <th scope="col">Last Updated</th>
          <th scope="col">Action</th>
        </tr>
      </thead>

      <tbody>
        <?php $i = 1; ?>
        <?php foreach ($courses as $course) : ?>
          <tr>
            <th scope="row"><?= $i++; ?></th>
            <td><?= $course['name']; ?></td>
            <td><?= money_format($course['price']); ?></td>
            <td><?= $course['discount']; ?>%</td>
            <td><?= getMentorName($course['mentor_id']) ?></td>
            <td><?= getCategoryName($course['category_id']) ?></td>
            <td><?= total_enrollment($course['id']) ?></td>
            <td><?= $course['updated']; ?></td>
            <td>
              <a href="video.php?cid=<?= $course['id']; ?>" class="btn btn-success">Video</a>
              <a href="edit_course.php?id=<?= $course['id']; ?>&rid=<?= $roadmap_id; ?>" class="btn btn-warning">Edit</a>
              <a href="delete_course.php?id=<?= $course['id']; ?>&rid=<?= $roadmap_id; ?>" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin mengapus data ini?');">Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>

      </tbody>
    </table>
  </div>



  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  <script src="../assets/js/index.js"></script>
</body>