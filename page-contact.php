<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Post a job position or create your online resume by TheJobs!">
    <meta name="keywords" content="">

    <title>JobAdda - Contact us</title>

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

  <body 

  <?php
  include('navigation.php');
  ?>

    <!-- Site header -->
    <header class="page-header bg-img size-lg" style="background-image: url(assets/img/contact.jpg)">
      <div class="container no-shadow">
        <h1 class="text-center">Contact us</h1>
      </div>
    </header>
    <!-- END Site header -->


    <!-- Main container -->
    <main>

      <section>
        <div class="container">

          <iframe width="1000" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJMejQdIvZ5zsRgUwsl3OWPQ8&key=AIzaSyAmTm4y0KydYkU1mjp4VIw41WyYTCy8t4s" allowfullscreen></iframe> 
          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-8">
              <h4>Contact form</h4>
              <form>
                <div class="form-group">
                  <input type="text" class="form-control input-lg" placeholder="Name">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control input-lg" placeholder="Email">
                </div>

                <div class="form-group">
                  <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
                
                <button type="submit" class="btn btn-primary">Send</button>
              </form>
            </div>

            <div class="col-sm-12 col-md-4">
              <h4>Information</h4>
              <div class="highlighted-block">
                <dl class="icon-holder">
                  <dt><i class="fa fa-map-marker"></i></dt>
                  <dd>URAN, PANVEL</dd>

                  <dt><i class="fa fa-phone"></i></dt>
                  <dd>(+91) 865 283 3135</dd>

                  <dt><i class="fa fa-fax"></i></dt>
                  <dd>(+91) 989 251 3852</dd>

                  <dt><i class="fa fa-envelope"></i></dt>
                  <dd>sobiyasardar@gmail.com</dd>
                  <dd>adhikarishehzeen@gmail.com</dd>
                </dl>
              </div>

              <br>

              <ul class="social-icons size-sm text-center">
                <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
                <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>

            </div>
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
    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>

  </body>
</html>
