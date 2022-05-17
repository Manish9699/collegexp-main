<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="../css/display5.css">
  <link rel="stylesheet" type="text/css" href="../css/gradient.css">
  <link rel="stylesheet" type="text/css" href="../css/fonts.css">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/9d1c6456d4.js" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  <title>Document</title>
</head>

<body class="gradientbackground">
  <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="#"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class=" fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link active">Home</a>
          <a href="projects.php" class="nav-item nav-link">Projects</a>
          <a href="userdashboard.php" class="nav-item nav-link">Dashboard</a>
        </div>
      </div>
      <?php
      if (!isset($_SESSION['name'])) {
        echo '<div class="navbar-nav ms-auto"><a href="userlogin.php" style="text-decoration: none;">Login</a></div>';
      } else {
        echo '<div class="navbar-nav ms-auto px-3"> Hi ' . $_SESSION['name'][0] . '</div>';
        echo '<div class="navbar-nav ms-auto"><a href="logout.php" style="text-decoration: none;">Logout</a></div>';
      }
      ?>
    </div>
  </nav>
  <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"><strong>COLLEG</strong><span class="text-danger"><strong>EXP</strong></span></a>
      <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar">
        <span class=" fas fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbar">
        <div class="navbar-nav">
          <a href="#" class="nav-item nav-link">Home</a>
          <a href="projects.php" class="nav-item nav-link">Projects</a>
          <a href="userdashboard.php" class="nav-item nav-link active">Dashboard</a>
        </div>
      </div>
    </div>
  </nav>
  <div class="py-0 px-0 my-3 mx-3 row d-flex justify-content-around">
    <div class="col-8 mx-0 px-0 py-1 row">
      <div class="col-12 row d-flex bg-light justify-content-between mb-2 rounded shadow float-start align-items-middle">
        <div class="text-dark px-2 py-3 col-8">
          <span class="fsize-m font-encode-500">NFT FUTURES CONTRACTS</span>
        </div>
        <div class="col-2 text-center text-success px-2 py-3">
          <i class="fa-regular fa-pen-to-square fa-lg"></i><span> Edit</span>
        </div>
      </div>
      <div class="col-12 row mt-2 bg-light px-0 py-1 rounded shadow">
        <div class="col-7 px-3 py-2 text-info">
          <span class="fsize-sm font-encode-300">Ushnish Dey Bhowmik</span>
        </div>
      </div>
      <div class="col-12 row mt-2 px-0 py-1 d-flex justify-content-between">
        <div class="col-4 px-3 py-2 text-info bg-light rounded shadow">
          <span class="fsize-sm font-encode-300">Ushnish Dey Bhowmik</span>
        </div>
        <div class="col-7 row px-3 py-2 text-info bg-light rounded shadow">
          <span class="fsize-sm font-encode-300">Objectives</span><br>
            <div class="col-12 py-2 fsize-sm text-success align-items-middle">
            <i class="fa-solid fa-check"></i><span class="ps-2"> Objective 1. Hello There!</span>
          </div>
          <div class="col-12 py-2 fsize-sm text-warning align-items-middle">
          <i class="fa-regular fa-square"></i><span class="ps-2"> Objective 2. Gotta Complete This</span>
          </div>
          <div class="col-12 py-2 fsize-sm align-items-middle">
          <button class="btn btn-block btn-sm btn-success"><i class="fa-solid fa-plus"></i></button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-3 mx-0 bg-dark row px-0 py-1 text-light rounded shadow text-justify">
      <div class="col-12 px-3 py-2">
        <span class="h6 font-encode-400">DESCRIPTION</span><br>
        <hr color="white">
        <p class="h6 font-zen-400 fsize-xs">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In euismod molestie purus et pulvinar. Fusce justo diam, condimentum eget lobortis vel, ultricies placerat leo. Integer tempor arcu nibh, nec imperdiet est placerat imperdiet. Nunc scelerisque sed ex a dictum. Etiam pharetra nisi non venenatis laoreet. Nam posuere, libero sed tempus cursus, felis nisl scelerisque turpis, eu sollicitudin urna augue in est. </p>
      </div>
      <div class="col-12 px-3 py-2">
        <span class="h6 font-encode-300">MEMBERS</span><br>
        <hr class="text-light">
      </div>
    </div>
  </div>
  <footer class="bg-dark mt-5 py-5 px-2 container-fluid text-center text-light font-weight-light">
    <i class="fas fa-copyright"></i> 2022. All Rights Reserved.
  </footer>
</body>

</html>