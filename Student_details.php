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
          <li><a href="Admin_home.php">Admin Home</a></li>
           
          
  </nav>
    <!-- Page header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/bg-banner1.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Student details</h1>
        <p class="lead text-center">Student information</p>
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

$sql = "select * from Student";
$query=mysqli_query($con,$sql);
if($query){
  while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
  $r[]=$row;
  }
 }
?>

<!-- Student detail -->
            <div class="col-xs-12">
              <?php
                  for($i=0;$i<sizeof($r);$i++){
                  ?>
              <div class="item-block">
                <header>
                  <h6>Hello : <?php echo $r[$i]['uname']; ?></h6>
                  <h6>Name : <?php echo $r[$i]['name']; ?></h6>
                  <h6>Email : <?php echo $r[$i]['email']; ?></h6>
                  <h6>Department : <?php echo $r[$i]['department']; ?></h6>
                  </header>
              </div>
              <?php
                }
                  ?>
            </div>
            <!-- END Student detail -->


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
