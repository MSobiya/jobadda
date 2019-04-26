<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>JobAdda - Manage jobs</title>

    <!-- Styles -->
    <link href="assets/css/app.min.css" rel="stylesheet">
    <link href="assets/css/thejobs.css" rel="stylesheet">
    <link href="assets/css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,800%7COpen+Sans:300,400,500,600,700,800%7CMontserrat:400,700' rel='stylesheet' type='text/css'>

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
      <ul class="nav-menu">
          <li><a href="index_2.php">Home</a></li>
          <li>
            <a href="#">Setting</a>
            <ul>
              <li><a href="addresume.php">Add Resume</a></li>
              <li><a href="modresume.php">Edit Resume</a></li>
              <li><a href="index.php">Logout</a></li
            </ul>

          </li>
  </nav>
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Show Available Jobs</h1>
        <p class="lead text-center">Here's the list of jobs according to your domain and department.</p>
      </div>
    </header>
    <!-- END Page header -->


    <!-- Main container -->
    <main>
      <section class="no-padding-top bg-alt">
        <div class="container">
          <div class="row">


<!--PHP CODE-->
<?php
$con = mysqli_connect("localhost","root","root","JOBADDA");
if(!$con)
{
  echo  "Error connecting to database";
}


$sql = "select * from job";
$query=mysqli_query($con,$sql);
if($query){
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
  $r[]=$row;
  }
 }
?>

            <!-- Job detail -->
            <div class="col-xs-12">
              <?php
                  for($i=0;$i<sizeof($r);$i++){
                  ?>
              <div class="item-block">
                <header>
                  <a href= <?php echo $r[$i]['cweb']; ?> > <?php echo $r[$i]['cname']; ?> </a>
                  <br>
                  <h6>Location : <?php echo $r[$i]['location']; ?></h6>
                  <h6>Post : <?php echo $r[$i]['jpost']; ?></h6>
                  <h6>Salary : <?php echo $r[$i]['salary']; ?></h6>
                  <h6>Department : <?php echo $r[$i]['jdept']; ?></h6>
                  <h6>Domain : <?php echo $r[$i]['jdomain']; ?></h6>
                  </header>
              </div>
              <?php
                }
                  ?>
            </div>
            <!-- END Job detail -->


          </div>
        </div>
      </section>
    </main>
    <!-- END Main container -->


  <?php
  include('footer.php');
  ?>

    <!-- Scripts -->
    <script src="assets/js/app.min.js"></script>
    <script src="assets/js/thejobs.js"></script>
    <script src="assets/js/custom.js"></script>

  </body>
</html>
