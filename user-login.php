<?php
session_start();
if(count($_SESSION) > 0){
if($_SESSION['user'] == 'Industry')
  header("Location:Industry_home.php");
if($_SESSION['user'] == 'Student')
  header("Location:Student_home.php");
if($_SESSION['user'] == 'institute_admin')
  header("Location:Admin_home.php");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>JobAdda - Login</title>

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

  <body class="login-page">


    <main>

      <div class="login-block">
        <img src="assets/img/logo.png" alt="">
        <h1>Log into your account</h1>

        <form action="connectivity.php" method="POST">


          <div>
              <label>User</label>
              <select name="user">
                <option value="Industry">Industry</option>
              	<option value="Student">Applicant</option>
                <option value="institute_admin">Admin</option>

              </select>
          </div>


          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-email"></i></span>
              <input type="text" name="l_uname" class="form-control" placeholder="Username">
            </div>
          </div>
          
          <hr class="hr-xs">

          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="ti-unlock"></i></span>
              <input type="password" name="l_pwd" class="form-control" placeholder="Password">
            </div>
          </div>

          <button class="btn btn-primary btn-block" name="login_db" type="submit">Login</button>

      
        </form>
      </div>

      <div class="login-links">
        <a class="pull-left" href="user-forget-pass.php">Forget Password?</a>
        <a class="pull-right" href="Reg_student.php">Student Registration</a> <p>OR</p>
        <a class="pull-right" href="Reg_industry.php">Industry Registration</a>
      </div>

    </main>


    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/thejobs.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
