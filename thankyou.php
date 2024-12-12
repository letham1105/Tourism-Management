<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<title>TMS | Confirmation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> 
  addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
  function hideURLbar(){ window.scrollTo(0,1); } 
</script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
  new WOW().init();
</script>
</head>
<body>
  <!-- Header -->
  <?php include('includes/header.php'); ?>


  <!-- Confirmation Section -->
  <div class="confirmation">
    <div class="container">
      <h3 class="section-title">Confirmation</h3>
      <div class="confirmation-message">
        <div class="col-md-10 contact-left">
          <div class="con-top animated wow fadeInUp" data-wow-duration="1200ms" data-wow-delay="500ms" style="visibility: visible; animation-duration: 1200ms; animation-delay: 500ms; animation-name: fadeInUp;">
            <div class="alert alert-success text-center">
              <i class="fa fa-check-circle" style="font-size: 50px; color: green;"></i>
              <h4 class="message-text">
                <?php echo htmlentities($_SESSION['msg']);?>
              </h4>
            </div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

  <!-- Sign Up and Sign In Modals -->
  <?php include('includes/signup.php'); ?>  
  <?php include('includes/signin.php'); ?>  

  <!-- Write Us -->
  <?php include('includes/write-us.php'); ?>
  
  <style>
    /* Styling for the confirmation page */
    .banner-1 {
      background: url('images/banner-bg.jpg') no-repeat center center;
      background-size: cover;
      height: 60vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .banner-1 h1 {
      font-size: 3em;
      font-weight: bold;
      color: #fff;
      text-align: center;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.7);
    }

    .confirmation {
      padding: 50px 0;
      background-color: #f9f9f9;
    }

    .section-title {
      text-align: center;
      font-size: 36px;
      font-weight: bold;
      color: #2c3e50;
      margin-bottom: 30px;
    }

    .confirmation-message {
      background-color: #fff;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
      margin: 0 auto;
      max-width: 600px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .alert {
      padding: 40px;
      border-radius: 10px;
      background-color: #dff0d8;
      border: 1px solid #d0e9c6;
      width: 100%;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .alert .fa-check-circle {
      margin-bottom: 20px;
    }

    .message-text {
      font-size: 22px;
      color: #3c763d;
      font-weight: 600;
      margin-top: 10px;
    }

    .message-text:hover {
      color: #27ae60;
      transition: color 0.3s ease-in-out;
    }

    .clearfix {
      clear: both;
    }
  </style>

</body>
</html>
