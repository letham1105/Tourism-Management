<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $sql = "INSERT INTO  tblenquiry(FullName,EmailId,Message) VALUES(:fname,:email,:message)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':message', $message, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Your request has been sent";
    } else {
        $error = "Something went wrong. Please try again";
    }
}

?>
<!DOCTYPE HTML>
<html>

<head>
    <title>TMS | Tourism Management System</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Tourism Management System In PHP" />
    <script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Custom Theme files -->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!--animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <style>
        .errorWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #dd3d36;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .succWrap {
            padding: 10px;
            margin: 0 0 20px 0;
            background: #fff;
            border-left: 4px solid #5cb85c;
            -webkit-box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
            box-shadow: 0 1px 1px 0 rgba(0, 0, 0, .1);
        }

        .contact-submit {
            margin-top: 15px;
            background-color: #34ad00;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact h3 {
            margin-top: -40px;
            color: #34ad00;
            /* Giảm khoảng cách phía trên */
        }

        .contact h4 {
            margin-top: -10px;
            /* Giảm khoảng cách phía trên */
            color: #34ad00;
        }

        .map {
            width: 100%;
            /* Chiếm toàn bộ chiều rộng */
            height: 100vh;
            /* Chiếm toàn bộ chiều cao của màn hình */
            position: relative;
            margin: 0;
            padding: 0;
        }

        .map iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }
    </style>
</head>

<body>
    <!-- top-header -->
    <div class="top-header">
        <?php include('includes/header.php'); ?>
        <!-- <div class="banner-1 ">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">TMS-Tourism Management System</h1>
            </div>
        </div> -->
        <div class="banner-1" style="background-image: url('./images/contact1.png'); background-size: cover; background-position: center; height: 435px; display: flex; align-items: center; justify-content: center;">
            <div class="container">
                <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn; color: white; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);"
                    </h1>
            </div>
        </div>

        <!--- /banner-1 ---->
        <!--- Contact Us Section ---->
        <div class="contact" style="text-align: center;">
            <div class="container">
                <h3 class="wow fadeInDown animated" data-wow-delay=".5s">Contact us</h3>
                <h4>Let us know how we can help you and our team will be in touch as soon as possible!</h4>

                <!-- PHP xử lý form -->
                <?php if ($error) { ?>
                    <div class="errorWrap"><strong>ERROR</strong>: <?php echo htmlentities($error); ?></div>
                <?php } else if ($msg) { ?>
                    <div class="succWrap"><strong>SUCCESS</strong>: <?php echo htmlentities($msg); ?></div>
                <?php } ?>

                <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-top: 20px;">
                    <!-- Thông tin liên hệ bên trái -->
                    <div class="contact-info" style="flex: 1; text-align: left; margin-right: 20px;">
                        <h4>Contact Information</h4>
                        <p>Please contact us if you need help!</p>
                        <p><i class="fa fa-home" aria-hidden="true"></i> <b>Address:</b> 470 Trần Đại Nghĩa, Hoà Hải, Ngũ Hành Sơn, TP Đà Nắng</p>
                        <p><i class="fa fa-phone" aria-hidden="true"></i> <b>Phone:</b> 023 6366 7117</p>
                        <p><i class="fa fa-envelope" aria-hidden="true"></i> <b>Email:</b> <a href="mailto:tourismms@gmail.com">tourismms@gmail.com</a></p>

                        <!-- Theo dõi mạng xã hội -->
                        <div class="follow-us" style="margin-top: 20px;">
                            <h4>Follow Us</h4>
                            <p>Follow us on our social channels:</p>
                            <a href="https://www.facebook.com/yourpage" target="_blank"><i class="fa fa-facebook"></i> Facebook</a> |
                            <a href="https://www.twitter.com/yourpage" target="_blank"><i class="fa fa-twitter"></i> Twitter</a> |
                            <a href="https://www.instagram.com/yourpage" target="_blank"><i class="fa fa-instagram"></i> Instagram</a>
                        </div>
                    </div>

                    <!-- Form liên hệ bên phải -->
                    <div style="flex: 1; margin-left: 20px;">
                        <form name="contact" method="post" style="border: 1px solid #ccc; padding: 20px; border-radius: 8px; background-color: #f9f9f9; max-width: 400px; margin: auto;">
                            <p>

                                <label for="fname"><b>Your Name</b></label><br>
                                <input type="text" name="fname" class="form-control" id="fname" placeholder="Your Name" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; transition: border 0.3s;">
                            </p>
                            <p>
                                <label for="email"><b>Email</b></label><br>
                                <input type="email" name="email" class="form-control" id="email" placeholder="Valid Email" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; transition: border 0.3s;">
                            </p>
                            <p>
                                <label for="message"><b>Message</b></label><br>
                                <textarea name="message" class="form-control" rows="6" id="message" placeholder="How can we help you?" required style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; transition: border 0.3s;"></textarea>
                            </p>
                            <p>
                                <button type="submit" name="submit1" class="btn-primary btn contact-submit">SEND MESSAGE</button>
                            </p>
                        </form>
                    </div>
                </div>

                <!-- Vị trí trên bản đồ -->
                <div class="map" style="text-align: center; margin-top: 30px;">
                    <h4>Our Location</h4>
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15685.372840514148!2d108.2483561!3d15.9752603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142108997dc971f%3A0x1295cb3d313469c9!2sTr%C6%B0%C6%9Dng%20Đ%E1%BA%A1i%20h%E1%BB%8Dc%20C%C3%B4ng%20ngh%E1%BB%87%20Th%C3%B4ng%20tin%20v%C3%A0%20Truy%E1%BB%81n%20th%C3%B4ng%20Vi%E1%BB%87t%20-%20H%C3%A0n!5e0!3m2!1svi!2s!4v1630466540858!5m2!1svi!2s"
                        width="100%" height="100vh" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy">
                    </iframe>
                </div>
            </div>
        </div>


        <!--- /privacy ---->
        <!--- footer-top ---->
        <!--- /footer-top ---->
        <?php include('includes/footer.php'); ?>
        <!-- signup -->
        <?php include('includes/signup.php'); ?>
        <!-- //signu -->
        <!-- signin -->
        <?php include('includes/signin.php'); ?>
        <!-- //signin -->
        <!-- write us -->
        <?php include('includes/write-us.php'); ?>
</body>

</html>