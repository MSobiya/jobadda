<?php
session_start();
if(count($_SESSION) == 0)
  header("Location:index.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>JobAdda - Add Jobs</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/vendors/summernote/summernote.css" rel="stylesheet">
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
        <div class="pull-right user-login">
           <a class="btn btn-sm btn-primary" href="logout.php">Logout</a>

        </div>
      </div>
  </nav>


    <form action="connectivity.php" method="POST">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Add Jobs available in company</h1>
          <p class="lead text-center">Create a profile for your company and put it online.</p>
        </div>

              <div class="col-xs-12 text-right">
              <br>
              <a class="btn btn-primary btn-sm" href="My_jobs.php">Show Posted Jobs</a>
            </div>


        <div class="container">

          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                
                <div class="col-xs-12 col-sm-4 col-lg-2">
                  <div class="form-group">
                    <input type="file" class="dropify" data-default-file="assets/img/logo-default.png">
                    <span class="help-block">A square logo</span>
                  </div>
                </div>

                <!-- <div class="col-xs-12 col-sm-8 col-lg-10">
                  <div class="form-group">
                    <input type="text" name="co_name" class="form-control input-lg" placeholder="Comapny name" required>
                  </div>
                </div> -->


              <div class="form-group col-xs-12 col-sm-8 col-lg-10">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="j_pos" class="form-control" placeholder="Job Position">
                  </div>
              </div>


              <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <label>Department</label>
                    <select name="j_dept">
                      <option value="computer">computer</option>
                      <option value="civil">civil</option>
                      <option value="mechanical">mechanical</option>
                      <option value="electrical">electrical</option>
                      <option value="telecom">telecom</option>
                      <option value="other">other</option>
                    </select>
                  </div>
                </div>


                <div class="form-group col-xs-12 col-sm-8 col-lg-10">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="j_domain" class="form-control" placeholder="Job Domain" required>
                  </div>
              </div>

              <div class="form-group col-xs-12 col-sm-8 col-lg-10">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="j_sal" class="form-control" placeholder="Salary">
                  </div>
              </div>

            </div>

            <div class="col-xs-12">
              <div class="row">

                <div class="form-group col-xs-12 col-sm-8 col-lg-10">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="j_loc" class="form-control" placeholder="Location, e.g. Melon Park, CA">
                  </div>
              </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" name="j_web" class="form-control" placeholder="Website address" required>
                  </div>
                </div>


                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="j_phone" class="form-control" placeholder="Phone number">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6 col-md-4">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="j_email" class="form-control" placeholder="Email address" required>
                  </div>
                </div>

              </div>
            </div>


          </div>

        </div>
      </header>
      <!-- END Page header -->


        <!-- Submit -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit it</h2>
              <p>Please review your information once more and press the below button to put your company online.</p>
            </header>

           <p class="text-center"><button type="submit" class="btn btn-success btn-xl btn-round" name="job_db">Submit Job</button></p> 
           <!--<button class="btn btn-primary btn-block" name="job_db" type="submit">Submit Job</button> -->

          </div>
        </section>
        <!-- END Submit -->


      <?php
  include('footer.php');
  ?>
    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/vendors/summernote/summernote.min.js"></script>
    <script src="assets/js/thejobs.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
