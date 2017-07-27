<!DOCTYPE html>
<html lang="en">

<!-- important heading -->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="favicon.ico">
  <title>project</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
  <link href="css/animate.css" rel="stylesheet">
  <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:bold|Roboto" rel="stylesheet">  google font -->
</head>

<body>

  <!-- navigation -->
  <nav class="navbar navbar-default navbar-fixed-top"> <!-- add body{ padding-top:50px; } to fix problem with fixed top-->
    <div class="container">
      
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Project</a>
      </div>
      
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!--/.nav-collapse -->
    
    </div>
  </nav>

  <!-- works/portfolio Row -->
  <div id="blog" class="blog paddingSection">
    <div class="container">
      <div class="row">

          <div class="marginElement col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="post blogElement">
              <a target="_blank" href="#">
                <img src="img/hoverImageSample.jpg" class="img-responsive"></img>
                <div class="blogOverlay">
                  <div class="blogText">
                    <h3 class="text-center text-uppercase orange">title goes here</h3>
                    <p class="pearl">sample text goes here</p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="marginElement col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="post blogElement">
              <a target="_blank" href="#">
                <img src="img/hoverImageSample.jpg" class="img-responsive"></img>
                <div class="blogOverlay">
                  <div class="blogText">
                    <h3 class="text-center text-uppercase orange">title goes here</h3>
                    <p class="pearl">sample text goes here</p>
                  </div>
                </div>
              </a>
            </div>
          </div>

          <div class="marginElement col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="post blogElement">
              <a target="_blank" href="#">
                <img src="img/hoverImageSample.jpg" class="img-responsive"></img>
                <div class="blogOverlay">
                  <div class="blogText">
                    <h3 class="text-center text-uppercase orange">title goes here</h3>
                    <p class="pearl">sample text goes here</p>
                  </div>
                </div>
              </a>
            </div>
          </div>

      </div>
    </div>
  </div>
  
  <div class="footer">
  </div>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/viewportchecker.js"></script><!-- viewport checker for triggerAnimation.js -->
  <script src="js/animationTrigger.js"></script><!-- controls/triggers the animation.css on scroll -->
  <script src="js/respond.min.js"></script><!-- fix ie 6, 7 and 8 -->
</body>

</html>