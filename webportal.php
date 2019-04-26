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
<iframe id="google" style="border-style: none; border-color: ; border-width: 0px; height:700px; width:100%;" src="amazon.php" scrolling="false"></iframe>

          <br><br>

          <div class="row">
            <div class="col-sm-12 col-md-8">
               <iframe width="650" height="450" frameborder="0" id = '1' style="border:0" src="abp.php" allowfullscreen></iframe> 
       

          <br><br>
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

    
    		<!-- <script> 

              var iframe1 = document.getElementsByTagName('iframe')[1];
              var url1 = iframe1.src;
              var getData1 = function (data) {
                  if (data && data.query && data.query.results && data.query.results.resources && data.query.results.resources.content && data.query.results.resources.status == 200) loadHTML(data.query.results.resources.content);
                  else if (data && data.error && data.error.description) loadHTML(data.error.description);
                  else loadHTML('Error: Cannot load ' + url1);
              };
              var loadURL1 = function (src) {
                  url = src;
                  var script1 = document.createElement('script');
                  script1.src = 'http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20data.headers%20where%20url%3D%22' + encodeURIComponent(url1) + '%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=getData';
                  document.body.appendChild(script1);
              };
              var loadHTML1 = function (html) {
                  iframe1.src = 'about:blank';
                  iframe1.contentWindow.document.open();
                  iframe1.contentWindow.document.write(html.replace(/<head>/i, '<head><base href="' + url1 + '"><scr' + 'ipt>document.addEventListener("click", function(e) { if(e.target && e.target.nodeName == "A") { e.preventDefault(); parent.loadURL(e.target.href); } });</scr' + 'ipt>'));
                  iframe1.contentWindow.document.close();
              }

              loadURL(iframe1.src);


              </script>-->

  </body>
</html>
