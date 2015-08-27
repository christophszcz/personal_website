<?php
 
  if ($_POST["submit"]) {
      
     if (!$_POST['name']) {
 
       $error="<br />Please enter your name";
 
     }
      
     if (!$_POST['email']) {
 
       $error.="<br />Please enter your email address";
 
     }

     if (!$_POST['comment']) {
 
       $error.="<br />Please enter a messsage";
 
     }
      
    if ($_POST['email']!="" AND !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      
      $error.="<br />Please enter a valid email address";
 
     }
      
     if ($error) {
 
      $result='<div class="alert alert-danger"><strong>There were error(s) in your form:</strong>'.$error.'</div>';
 
      } else {
 
      if (mail("cjszczechowicz@gmail.com", "Comment from website!", "Name: " .$_POST['name'] ."
      
      Phone number: " .$_POST['phone']." 
      
      Email: " .$_POST['email']."
      
      Comment: ". $_POST['comment'])) {
 
        $result='<div class="alert alert-success"><strong>Thank you. Your form has been submitted!</strong></div>';
 
      } else {
 
      $result='<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
 
      }
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Chris Szczechowicz Porfoilio Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Cinzel:400,700,900' rel='stylesheet' type='text/css'>
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  </head>
  <body>
  
  <!--Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed navbar-ex1-collapse  " data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Chris Szczechowicz</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#about">About</a>
        </li>
        <li>
          <a href="#portfolio">Portfolio</a>
        <li>
        <!-- <li><a href="#4">Channel </li>-->
        <li>
          <a href="#contact">Contact</a>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--Home /Main Section -->
  <div id="1" class="main-section">
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="main-text"> 
                  $ Hi there, my name is Chris...<br>
                  $ and I <3 programming 
                  <span id="caption"></span>
                  <span  class="main-text" id="cursor">|</span>
                </div>
                <br>
                <a href="#about" class="page-scroll btn btn-xl">Find Out More</a>
            </div>
        </div>
    </header>
  </div>

  <!--About Section -->
  <div id="about" class="about-section">
    <div class="container">
          <div class="row">
                  <br>
                  <br>
                  <div class="col-lg-12 text-center">
                      <h2 class="about-title">About</h2>
                  </div>
          </div>
              <div class="row">
                  <div class="col-sm-4"></div>
                  <div class="col-sm-4">
                      <div class="team-member">
                          <img src="img/personalPhoto.jpg" class="img-responsive img-circle" alt="">
                          <h4 class="col-lg-12 text-center">Chris Szczechowicz</h4>
                          <p class="text-muted col-lg-12 text-center">Full Stack Web Developer</p>
                          <ul class="list-inline social-buttons">
                              <li><a href="https://twitter.com/christophszcz"><i class="fa fa-twitter"></i></a>
                         
                              <li><a href="https://github.com/christophszcz"><i class="fa fa-github"></i></a>
                         
                              <li><a href="https://ca.linkedin.com/in/christophszczechowicz"><i class="fa fa-linkedin"></i></a>
                         
                          </ul>
                      </div>
                  </div>
                  <div class="col-sm-4"></div>
              </div>

              <div class="row">
                  <div class="col-lg-8 col-lg-offset-2 text-center">
                      <p class="large description"> I am currently a freelance developer proficient in  HTML5, CSS3, Ruby on Rails, JavaScript, jQuery, Foundation, Bootstrap, WordPress, Git, SQL and PostgreSQL databases and using AJAX. I also have limited experience working with Adobe Photoshop, InDesign and writing code using PHP and MySQL. </p>
                  </div>
              </div>

              <div class = "container-fluid" id="download-button">
                <div class="btn-group" role="group" aria-label="...">
                  <a type="button"class="button-link btn-black btn-primary btn-lg outline btn-responsive" href ="pdf/Christoph'sGraphicResume.pdf">DOWNLOAD RESUME</a>
                </div> 
              </div> 
      </div>
    </div>
  </div>

  <!-- Porfolio Section -->
  <div id="portfolio" class="portfolio-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <br>
          <br>
          <h2 class="portfolio-title">Portfolio</h2>
          <h3>Here are a few of my projects and contributions (click on each thumbnail for more information):</h3>
        </div>
      </div>
      <br>

        <div class="row">
          <div class="col-md-4">
              <a href="#firstModal" data-toggle="modal"><img class="thumbnail img-responsive" src="img/portfolio/SundayNightEntertainment.png" alt=""></a>

              <div class="portfolio-caption">
                <h4>Sunday Night Entertainment</h4>
                <p class="text-muted">Entertainment Portfolio Website</p>
              </div>
          </div>

          <div class="col-md-4">
            <a href="#secondModal" data-toggle="modal"><img class="thumbnail img-responsive" src="img/portfolio/Task_Hackr.png" alt=""></a>

            <div class="portfolio-caption">
              <h4>Task Hackr</h4>
              <p class="text-muted">Ruby on Rails Web Application</p>
            </div>
          </div>

          <div class="col-md-4">
            <a href="#thirdModal" data-toggle="modal" data-target="#thirdModal"><img class="thumbnail img-responsive" src="img/portfolio/UofTAnatomyDatabook.png" alt=""></a>

            <div class="portfolio-caption">
              <h4>U of T Anatomy Databook</h4>
              <p class="text-muted">Ruby on Rails Web Application</p>
            </div>
          </div> 

      </div>

      <div class="row">

      <div class="col-md-2"></div>

      <div class="col-md-4">
          <a href="#fourthModal" data-toggle="modal" data-target="#fourthModal"><img class="thumbnail img-responsive"src="img/portfolio/WillemandJools.png" alt=""></a>

          <div class="portfolio-caption">
            <h4>Willem & Jools |  European Bucket Flowers</h4>
            <p class="text-muted">Business Website</p>
          </div>
      </div>

      <div class="col-md-4">
          <a href="#fifthModal" data-toggle="modal" data-target="#fifthModal"><img class="thumbnail img-responsive" src="img/portfolio/ChefBen.png" alt=""></a> 
          <div class="portfolio-caption">
            <h4>Chef Ben Catering</h4>
            <p class="text-muted">Business Website</p>
          </div>
      </div>

        <div class="col-md-2"></div>
        
      </div>
    </div>
  </div>


  <!--Channel Section -->
<!--   <div id="4" style= "min-height:1000px;background:lightgrey;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <br>
          <br>
          <h2>Channel</h2>
        </div>
      </div>
    </div>
  </div> -->

  <!-- Contact Section -->
  <div id="contact" class="contact-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 centered">
          <br>
          <br>
          <h2 class="contact-form-title">Contact</h2>
          <br>

            <!--Contact Form -->
            <div class="container-fluid">  
              <form method="post">
                <div class="col-md-6 text-center">
                  <div class="form-group">

                  <?php echo $result; ?>
                    <input type="text" name="name" class="form-control" placeholder="Name:" value="<?php echo $_POST['name']; ?>" />
                  </div>

                  <div class="form-group">
                    <input type="email" name="email" class="form-control" placeholder="Email Address:" value="<?php echo $_POST['email']; ?>" />
                  </div>

                  <div class="form-group">
                    <input type="phone" name="phone" class="form-control" placeholder="Phone number:"  />
                  </div>
                </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <textarea rows="7"  name="comment" class="form-control" placeholder="Message:"><?php echo $_POST['comment']; ?></textarea>
                    </div>
                    <input type="submit" name="submit" class="btn btn-success btn-lg" value="Send Message">
                  </div>

              </form>          
            </div>
      </div>
    </div>
  </div>
  
  <!--Footer -->
  <footer>
    <div class="container-fluid footer-section">
    <div class="row">
      <div class="col-md-4">
        <h6 class="copyright">
          <strong> Copyright &copy; Chris Szczechowicz 2015 </strong>
        </h6>
      </div>
      <div class="col-md-8 footer-items">
        <a href="mailto:cjszczechowicz@gmail.com"><span class="link"><strong><img src ="img/icons/emailLogoFooter.png" height="50" width="50"></strong></span></a>
        <a href="https://twitter.com/christophszcz"><span class="link"><img src="img/icons/twitterLogoFooter.png" height="50" width="50"></span></a>
        <a href="https://github.com/christophszcz"><span class="link"><img src ="img/icons/GitHubIconFooter.png" height="50" width="50"></span></a>
        <a href="https://ca.linkedin.com/in/christophszczechowicz"><span class="link"><strong><img src ="img/icons/linkedinLogoFooter.png" height="50" width="50"></strong></span></a>
      </div>
    </div>
  </div>  
  </footer>

  <!--Modals -->

  <div class="modal" id="firstModal">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">Sunday Night Entertainment</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="image" height="276px" width="570px" src="./img/portfolio/SundayNightEntertainment.png">
        <br>
        <br>
        <b>Environment:</b>
        <p>HTML, CSS, JavaScript, jQuery, & Bootstrap</p>
        <b>URL:</b><br>
        <a href="http://sundaynight.ca/">http://sundaynight.ca/</a>
        <div class="modal-footer">
          <a href="https://github.com/lizhodgson/SNE_website" class="btn btn-success" role="button">Source Code</a>
        </div>
      </div>
    </div>
  </div>

  <div class="modal" id="secondModal">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">Task Hackr</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="image" height="276px" width="570px" src="./img/portfolio/Task_Hackr.png">
        <br>
        <br>
        <b>Environment:</b>
        <p>HTML, CSS, Ruby on Rails, & Foundation</p>
        <div class="modal-footer">
          <a href="https://github.com/christophszcz/finalproject_taskapp" class="btn btn-success" role="button">Source Code</a>
        </div> 
      </div>
    </div>
  </div>

  <div class="modal" id="thirdModal">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">U of T Anatomy Databook</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="image" src="./img/portfolio/UofTAnatomyDatabook.png" height="276px" width="570px">
        <br>
        <br>
        <b>Environment:</b>
        <p>HTML, CSS, JavaScript, jQuery, Ruby on Rails & Bootstrap</p>
        <div class="modal-footer">
          <a href="https://github.com/christophszcz/anatom_d" class="btn btn-success" role="button">Source Code</a>
        </div>
      </div>
    </div> 
  </div>

  <div class="modal" id="fourthModal">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">Willem & Jools |  European Bucket Flowers</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="image" src="./img/portfolio/WillemandJools.png" height="276px" width="570px">
        <br>
        <br>
        <b>Environment:</b>
        <p>WordPress</p>
        <b>URL:</b><br>
        <a href="http://willemandjools.com/">http://willemandjools.com/</a>
      </div>
    </div>
  </div>

  <div class="modal" id="fifthModal">
    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">X</button>
        <h4 class="modal-title">Chef Ben Catering</h4>
      </div>
      <div class="modal-body">
        <img class="img-responsive" id="image" src="./img/portfolio/ChefBen.png" height="276px" width="570px">
        <br>
        <br>
        <b>Environment:</b>
        <p>WordPress</p>
        <b>URL:</b><br>
        <a href="http://chefben.ca/">http://chefben.ca/</a>
      </div>
    </div>
  </div>
           
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/cursor.js"></script>
    <script src="js/scrolling.js"></script>
    
  </body>
</html>
