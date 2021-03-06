<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job or create your online resume by JobAdaa!">
    <meta name="keywords" content="">

    <title>JobAdda</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/thejobs.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="icon" href="assets/img/favicon.ico">
  </head>
  <body class="nav-on-header smart-nav">
  <nav class="navbar">
      <div class="container">
      </div>
      <ul class="nav-menu">
          <li><a href="index_2.php">Home</a></li>
          <li><a href="app_home.php">Show Available Jobs</a></li>
          <li>
            <a href="#">Setting</a>
            <ul>
              <li><a href="addresume.php">Add Resume</a></li>
              <li><a href="modresume.php">Edit Resume</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
          </li>

  </nav>
    <!-- END Navigation bar -->
  
    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(assets/img/home.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>
          <h2>Find Job According to Your <mark>Department</mark> and <mark>Domain</mark>!</h2>
          <h3>Job vacancies right now!</h3>
          <h5 class="font-alt">Find your desire one in a minute</h5>
          <br><br><br>
          <form class="header-job-search">
            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Department name">
            </div>

            <div class="input-keyword">
              <input type="text" class="form-control" placeholder="Domain name">
            </div>

            <div class="btn-search">
              <button class="btn btn-primary" type="submit">Find jobs</button>
              
            </div>
          </form>
        </div>

      </div>
    </header>
    <!-- END Site header -->


  
  <?php
  include('footer.php');
  ?>


    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/thejobs.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
