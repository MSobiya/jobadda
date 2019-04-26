<?php
session_start();
if(count($_SESSION) == 0)
  header("Location:index.php");
  
  $uname = $_SESSION['l_uname'];
  $mod_val = select('*','resume',$uname);
  // print_r($mod_val);


function select($select,$from,$where) {
	require 'connectivity.php';
	$select_value = "SELECT $select FROM `$from` WHERE `uname`='$where'";
	$result = mysqli_query($con, $select_value);
	$row = mysqli_fetch_assoc($result);
	return $row;
	mysqli_close($con);	
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">
	
	<title>JobAdda- Modify resume</title>

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
      </div>
      <ul class="nav-menu">
          <li><a href="Student_home.php">Student Home</a></li>
          <li><a href="quiz_random.php">apply for Test</a></li>
          <!-- <li>
            <a href="#">Setting</a>
            <ul>
              <li><a href="addresume.php">Add Resume</a></li>
              <li><a href="modresume.php">Edit Resume</a></li>
              <li><a href="index.php">Logout</a></li>
            </ul>
          </li> -->

  </nav>

    <form action="field.php" method="post">

      <!-- Page header -->
      <header class="page-header">
        <div class="container page-name">
          <h1 class="text-center">Modify your resume</h1>
          <p class="lead text-center">Modify your resume and put it online.</p>
        </div>

        <div class="container">

          <div class="row">

            <div class="col-xs-12 col-sm-12">
              <div class="form-group">
                <input type="text" name="r_name" class="form-control input-lg" placeholder="Name" value="<?php echo $mod_val['r_name1'] ?>">
              </div>
              
              <div class="form-group">
                <input type="text" name="r_head" class="form-control" placeholder="Headline (e.g. Front-end developer)"
                value="<?php echo $mod_val['r_head1'] ?>">
              </div>

              <div class="form-group">
                <textarea name="r_desc" class="form-control" rows="3" placeholder="Short description about you"></textarea>
              </div>

              <hr class="hr-lg">

              <h6>Basic information</h6>
              <div class="row">

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                    <input type="text" name="r_loc" class="form-control" placeholder="Location, e.g. Melon Park, CA"
                    value="<?php echo $mod_val['r_loc1'] ?>">

                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-globe"></i></span>
                    <input type="text" name="r_web" class="form-control" placeholder="Website address"
                    value="<?php echo $mod_val['r_web1'] ?>">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-usd"></i></span>
                    <input type="text" name="r_sal" class="form-control" placeholder="Salary, e.g. 85"
                    value="<?php echo $mod_val['r_sal1'] ?>">
                    <span class="input-group-addon">Per hour</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                    <input type="text" name="r_age" class="form-control" placeholder="Age"value="<?php echo $mod_val['r_age1'] ?>">
                    <span class="input-group-addon">Years old</span>
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                    <input type="text" name="r_phn" class="form-control" placeholder="Phone number"
                    value="<?php echo $mod_val['r_phn1'] ?>">
                  </div>
                </div>

                <div class="form-group col-xs-12 col-sm-6">
                  <div class="input-group input-group-sm">
                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                    <input type="text" name="r_mail" class="form-control" placeholder="Email address"
                    value="<?php echo $mod_val['r_mail1'] ?>">
                  </div>
                </div>

              </div>


            </div>
          </div>

        </div>
      </header>
      <!-- END Page header -->


      <!-- Main container -->
      <main>


        <!-- Social media -->
        <section>
          <div class="container">

            <header class="section-header">
              <span>Get connected</span>
              <h2>Social media</h2>
            </header>

            <div class="row">
              <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-facebook"></i></span>
                    <input type="text" name="r_fb" class="form-control" placeholder="Profile URL"
                    value="<?php echo $mod_val['r_fb1'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-google-plus"></i></span>
                    <input type="text" name="r_g" class="form-control" placeholder="Profile URL"
                    value="<?php echo $mod_val['r_g1'] ?>">
                  </div>
                </div>


              <div class="col-xs-12 col-sm-12">
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-twitter"></i></span>
                    <input type="text" name="r_tw" class="form-control" placeholder="Profile URL"
                    value="<?php echo $mod_val['r_tw1'] ?>">
                  </div>
                </div>

                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-github"></i></span>
                    <input type="text" name="r_git" class="form-control" placeholder="Profile URL"
                    value="<?php echo $mod_val['r_git1'] ?>">
                  </div>
                </div>


              </div>
            </div>

          </div>
        </section>
        <!-- Social media -->



        <!-- Education -->
        <section class=" bg-alt">
          <div class="container">

            <header class="section-header">
              <span>Latest degrees</span>
              <h2>Education</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    
                    <div class="row">
                      
                      <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                          <input type="text" name="r_deg" class="form-control" placeholder="Degree, e.g. Bachelor"
                          value="<?php echo $mod_val['r_deg1'] ?>">
                        </div>

                        <div class="form-group">
                          <input type="text" name="r_maj" class="form-control" placeholder="Major, e.g. Computer Science" value="<?php echo $mod_val['r_maj1'] ?>">
                        </div>
                        <div class="form-group">
                          <input type="text" name="r_ins" class="form-control" placeholder="School name, e.g. Massachusetts Institute of Technology" value="<?php echo $mod_val['r_ins1'] ?>">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input type="text" name="r_doa" class="form-control" placeholder="e.g. 2012"
                            value="<?php echo $mod_val['r_doa1'] ?>">
                            <span class="input-group-addon">Date to</span>
                            <input type="text" name="r_dol" class="form-control" placeholder="e.g. 2016"
                            value="<?php echo $mod_val['r_dol1'] ?>">
                          </div>
                        </div>
                      </div>
                    </div>

                  </div>
                </div>
              </div>



            </div>
          </div>
        </section>
        <!-- END Education -->


        <!-- Work Experience -->
        <section>
          <div class="container">
            <header class="section-header">
              <span>Past positions</span>
              <h2>Work Experience</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">
  
                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
    
                      </div>

                      <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                          <input type="text" name="r_cmp" class="form-control" placeholder="Company name"
                          value="<?php echo $mod_val['r_cmp1'] ?>">
                        </div>

                        <div class="form-group">
                          <input type="text" name="r_pos" class="form-control" placeholder="Position, e.g. UI/UX Researcher" value="<?php echo $mod_val['r_pos1'] ?>">
                        </div>

                        <div class="form-group">
                          <div class="input-group">
                            <span class="input-group-addon">Date from</span>
                            <input type="text" name="r_doaC" class="form-control" placeholder="e.g. 2012"
                            value="<?php echo $mod_val['r_doaC1'] ?>">

                            <span class="input-group-addon">Date to</span>
                            <input type="text" name="r_dolC" class="form-control" placeholder="e.g. 2016"
                            value="<?php echo $mod_val['r_dolC1'] ?>"
                            >
                          </div>
                        </div>

                      </div>

                    </div>

                  </div>
                </div>
              </div>


            </div>

          </div>
        </section>
        <!-- END Work Experience -->

        <!-- Skills -->
        <section class=" bg-alt">
          <div class="container">
            <header class="section-header">
              <span>Expertise Areas</span>
              <h2>Skills</h2>
            </header>
            
            <div class="row">

              <div class="col-xs-12">
                <div class="item-block">
                  <div class="item-form">

                    <div class="row">
                      <div class="col-xs-12 col-sm-12">
                        <div class="form-group">
                          <input type="text" name="r_exp" class="form-control" placeholder="Skill name, e.g. HTML"
                            value="<?php echo $mod_val['r_exp1'] ?>">
                          
                          
                        </div>
                      </div>

                    </div>

                  </div>
                </div>
              </div>

            </div>

          </div>
        </section>
        <!-- END Skills -->



        <!-- Submit -->
        <section class=" bg-img" style="background-image: url(assets/img/bg-facts.jpg);">
          <div class="container">
            <header class="section-header">
              <span>Are you done?</span>
              <h2>Submit resume</h2>
              <p>Please review your information once more and press the below button to update your resume.</p>
            </header>

            <p class="text-center"><button name ="edit_resume" value="Upload file" class="btn btn-success btn-xl btn-round">Update resume</button></p>

          </div>
        </section>
        <!-- END Submit -->


      </main>
      <!-- END Main container -->

    </form>

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
