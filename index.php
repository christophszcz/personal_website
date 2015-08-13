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
    <title>Christoph Szczechowicz Porfoilio Page</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
  </head>
  <body>
  
  <!--Navbar -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Christoph Szczechowicz</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#2">About</a></li>
        <li><a href="#3">Portfolio</a></li>
        <!-- <li><a href="#4">Channel</a></li> -->
        <li><a href="#5">Contact</a></li>
         
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
  <!--Home /Main Section -->
  <div id="#" style= "min-height:1000px;background:white;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
           
        </div>
      </div>
    </div>
  </div>

  <!--About Section -->
  <div id="2" style= "min-height:1000px;background:lightgrey;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <br>
          <br>
          <h2>About</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- Porfolio Section -->
  <div id="3" style= "min-height:1000px;background:white;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <br>
          <br>
          <h2>Porfolio</h2>
        </div>
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
  <div id="5" style= "min-height:500px;background:lightgrey;">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 centered">
          <br>
          <br>
          <h2 class="contact-form-title">Contact</h2>

            <!--Contact Form -->
            <div class="container-fluid">  
              <form method="post">
                <div class="col-md-12 text-center">
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

                  <div class="form-group">
                    <textarea rows="4"  name="comment" class="form-control" placeholder="Message:"><?php echo $_POST['comment']; ?></textarea>
                  </div>

                  <input type="submit" name="submit" class="btn btn-success btn-md" value="Submit">
                </div>
              </form>          
            </div>
      </div>
    </div>
  </div>
  
  <!--Footer -->
  <div class="container-fluid footer-section">
    <div class="row">
      <div class="col-md-4">
        <h6><strong>Christoph Szczechowicz &copy; 2015 </strong></h6>
      </div>
      <div class="col-md-8">
        <a href="https://twitter.com/christophszcz"><span class="link"><strong>Twitter</strong></span></a>
        <a href="https://github.com/christophszcz"><span class="link"><strong>GitHub</strong></span></a>
        <a href="https://ca.linkedin.com/in/christophszczechowicz"><span class="link"><strong>Linkedin</strong></span></a>
      </div>
    </div>
  </div>  

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
    $(document).ready(function(){
      $('.nav li a').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
        && location.hostname == this.hostname) {
          var $target = $(this.hash);
          $target = $target.length && $target
          || $('[name=' + this.hash.slice(1) +']');
          if ($target.length) {
            var targetOffset = $target.offset().top;
            $('html,body')
            .animate({scrollTop: targetOffset}, 1500);
           return false;
          }
        }
      });
    });    
    </script>
  </body>
</html>
