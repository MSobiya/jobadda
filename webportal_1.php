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
  <body
  <?php
  include('navigation.php');
  ?>

    <!-- Site header -->
    <header class="site-header size-lg text-center" style="background-image: url(assets/img/home.jpg)">
      <div class="container">
        <div class="col-xs-12">
          <br><br>

            <!-- <iframe src="http://www.google.co.in" width="500" height="300"></iframe> -->

            <!--<iframe id="google" style="border-style: none; border-color: ; border-width: 0px; height:700px; width:100%;" src="http://www.google.co.in"></iframe> -->

            <br>
            <iframe width="1000" height="450" frameborder="0" style="border:0" src="http://www.amazon.com" allowfullscreen></iframe> 
          <br><br>



              <script type="text/javascript">
                var iframe = document.getElementsByTagName('iframe')[0];
              var url = iframe.src;
              var getData = function (data) {
                  if (data && data.query && data.query.results && data.query.results.resources && data.query.results.resources.content && data.query.results.resources.status == 200) loadHTML(data.query.results.resources.content);
                  else if (data && data.error && data.error.description) loadHTML(data.error.description);
                  else loadHTML('Error: Cannot load ' + url);
              };
              var loadURL = function (src) {
                  url = src;
                  var script = document.createElement('script');
                  script.src = 'http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20data.headers%20where%20url%3D%22' + encodeURIComponent(url) + '%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=getData';
                  document.body.appendChild(script);
              };
              var loadHTML = function (html) {
                  iframe.src = 'about:blank';
                  iframe.contentWindow.document.open();
                  iframe.contentWindow.document.write(html.replace(/<head>/i, '<head><base href="' + url + '"><scr' + 'ipt>document.addEventListener("click", function(e) { if(e.target && e.target.nodeName == "A") { e.preventDefault(); parent.loadURL(e.target.href); } });</scr' + 'ipt>'));
                  iframe.contentWindow.document.close();
              }

              loadURL(iframe.src);

                var iframe = document.getElementsByTagName('iframe')[1];
              var url = iframe.src;
              var getData = function (data) {
                  if (data && data.query && data.query.results && data.query.results.resources && data.query.results.resources.content && data.query.results.resources.status == 200) loadHTML(data.query.results.resources.content);
                  else if (data && data.error && data.error.description) loadHTML(data.error.description);
                  else loadHTML('Error: Cannot load ' + url);
              };
              var loadURL = function (src) {
                  url = src;
                  var script = document.createElement('script');
                  script.src = 'http://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20data.headers%20where%20url%3D%22' + encodeURIComponent(url) + '%22&format=json&diagnostics=true&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys&callback=getData';
                  document.body.appendChild(script);
              };
              var loadHTML = function (html) {
                  iframe.src = 'about:blank';
                  iframe.contentWindow.document.open();
                  iframe.contentWindow.document.write(html.replace(/<head>/i, '<head><base href="' + url + '"><scr' + 'ipt>document.addEventListener("click", function(e) { if(e.target && e.target.nodeName == "A") { e.preventDefault(); parent.loadURL(e.target.href); } });</scr' + 'ipt>'));
                  iframe.contentWindow.document.close();
              }

              loadURL(iframe.src);


              </script>

          <h2>Find Job According to Your interested <mark>Department</mark> and <mark>Domain</mark>!</h2>
          <h3>Job vacancies right now!</h3>
          <h5 class="font-alt">Find your desire one in a minute</h5>
          <br><br><br>
          
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
