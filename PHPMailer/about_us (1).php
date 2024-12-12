<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (isset($_POST['submit1'])) {
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $mobile = $_POST['mobileno'];
    $subject = $_POST['subject'];
    $description = $_POST['description'];
    $sql = "INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
    $query = $dbh->prepare($sql);
    $query->bindParam(':fname', $fname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':mobile', $mobile, PDO::PARAM_STR);
    $query->bindParam(':subject', $subject, PDO::PARAM_STR);
    $query->bindParam(':description', $description, PDO::PARAM_STR);
    $query->execute();
    $lastInsertId = $dbh->lastInsertId();
    if ($lastInsertId) {
        $msg = "Enquiry  Successfully submited";
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
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script>
    new WOW().init();
    </script>
    <style>
    /* General styling */
    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }

    h1,
    h5 {
        font-size: 20px;
        font-weight: bold;


    }


    h3 {
        font-size: 2em;
        color: #34ad00;
        font-weight: 700;
    }

    h6 {
        font-size: 1.2em;
        color: #1f8dd6;
        font-weight: 700;
        margin: 1em 0;
    }

    p {
        font-size: 15px;
        line-height: 1.6em;
        font-weight: 300;
        color: #999;
        margin: 1em 0;
    }



    .privacy h3 {
        color: #34ad00;
        font-size: 3em;
        font-weight: 700;
        margin-bottom: 1em;
    }

    .col-md-6 h5 {
        color: #333;
        font-size: 1.8em;
        font-weight: 700;
        margin-bottom: 1em;
    }

    /* Multi-layered background for destinations */
    .destination-section {
        position: relative;
        padding: 50px 0;
        background: linear-gradient(to right, rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.5)), url('images/destination-bg.jpg') no-repeat center center/cover;

        color: #333;
    }

    .destination-container {
        position: relative;
        z-index: 1;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 10px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    }

    .destination-card {
        margin-top: 20px;
        border: none;
        border-radius: 5px;
        overflow: hidden;
        transition: transform 0.3s;
    }

    .destination-card:hover {
        transform: scale(1.05);
    }

    /* Team section styling */
    .team-section {
        margin-top: 50px;
        overflow: hidden;
    }

    .team-slider {
        display: flex;
        transition: transform 0.5s ease;
    }

    .team-card {
        flex: 5 5 50%;
        margin-right: 30px;
        border: 1px solid #ddd;
        border-radius: 10px;
        overflow: hidden;
        text-align: center;
        transition: transform 0.3s;
    }

    .team-card img {
        width: 100%;
        border-bottom: 1px solid #ddd;
    }

    .team-card:hover {
        transform: scale(1.05);
    }


    .slider-button {
        background-color: #333;
        color: #fff;
        border: none;
        padding: 10px 20px;
        margin: 5px;
        cursor: pointer;
        border-radius: 25px;
        font-size: 16px;
        display: inline-flex;
        align-items: center;
        transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .slider-button span {
        margin: 0 5px;
    }

    .slider-button.prev {
        margin-right: auto;
    }

    .slider-button.next {
        margin-left: auto;
    }

    .slider-button:hover {
        background-color: #555;
        transform: scale(1.1);
    }

    .slider-button:focus {
        outline: none;
    }

    body {
        font-family: 'Open Sans', sans-serif;
        font-size: 16px;
        line-height: 1.6;
    }


    .about-us-container {
        background-image: linear-gradient(135deg, rgba(197, 232, 246, 0.71), rgba(205, 255, 183, 0.28));
        padding: 30px;
        border-radius: 10px;
        position: relative;
        overflow: hidden;
        margin-top: 30px;
    }

    .about-us-image {
        width: 100%;
        height: auto;
        border-radius: 10px;
        position: relative;
        z-index: 1;
    }

    .about-us-content {
        font-size: 1.1rem;
        line-height: 1.8;
        position: relative;
        z-index: 1;
    }

    .about-us-card::before {
        content: "";
        background: linear-gradient(135deg, rgba(255, 0, 0, 0.1), rgba(0, 0, 255, 0.1));
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        z-index: 0;
        border-radius: 10px;
    }

    .destination-card {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        position: relative;
        overflow: hidden;
    }

    .destination-card img {
        width: 100%;
        border-bottom: 1px solid #ddd;
        border-radius: 5px 5px 0 0;
    }

    .destination-card .card-body {
        padding: 15px;
        text-align: center;
    }

    .destination-card .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .destination-card .card-text {
        font-size: 1rem;
        color: #777;
    }

    .destination-card:hover {
        transform: scale(1.05);
        transition: 0.3s ease-in-out;
    }

    .destination-section {
        margin-top: 50px;
    }

    .destination-layer {
        background: rgba(255, 255, 255, 0.8);
        padding: 15px;
        position: absolute;
        bottom: 0;
        width: 100%;
    }

    .team-section {
        margin-top: 50px;
    }

    .team-card {
        margin-top: 20px;
        margin-bottom: 20px;
        border: 1px solid #ddd;
        box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        border-radius: 5px;
        overflow: hidden;
        text-align: center;
    }

    .team-card img {
        width: 100%;
        border-bottom: 1px solid #ddd;
    }

    .team-card .card-body {
        padding: 15px;

    }

    .team-card .card-title {
        font-size: 1.2rem;
        font-weight: bold;
    }

    .team-card .card-text {
        font-size: 1rem;
        color: #777;
    }


    .team-slider .slider-prev {
        left: 10px;
    }

    .team-slider .slider-next {
        right: 10px;
    }
    </style>
</head>

<body>
    <!-- top-header -->
    <div class="top-header">
        <?php include('includes/header.php'); ?>
        <div class="banner-1"
            style="background-image: url('./images/about.png'); background-size: cover; background-position: center; height: 400px; display: flex; align-items: center; justify-content: center;">
            <div class="container">


            </div>

        </div>


        <div class="privacy">
            <div class="container">
                <div class="about-us-container">
                    <h3 class="wow fadeInDown animated" data-wow-delay=".5s">About us</h3>

                    <img src="images/6.jpg" alt="About Us" class="about-us-image">
                    <div class="row">
                        <div class="col-md-6">
                            <p>



                            </p>
                            <p>



                            </p>
                            <h5>About Tourism Managerment System</h5>
                            <p>



                            </p>
                            <img src="images/sun.png" alt="About Us" class="about-us-image">
                        </div>
                        <div class="col-md-6 about-us-content">
                            <p>Tourism Management System (TMS) is your ultimate destination for planning and booking
                                unforgettable travel experiences. Our website offers a comprehensive range of services,
                                from customizable holiday packages to real-time booking options, all designed to make
                                your travel planning seamless and enjoyable.</p>
                            <h5>About Tourism</h5>
                            <p>Tourism is a powerful way to explore new cultures, landscapes, and experiences. It helps
                                boost the local economy, promotes cultural exchange, and enhances the overall global
                                connectivity. At TMS, we believe in responsible tourism that enriches both travelers and
                                the destinations they visit.</p>
                            <h5>Benefits & Features</h5>
                            <ul>
                                <li>Customizable holiday packages to suit your needs.</li>
                                <li>Real-time booking and travel options.</li>
                                <li>Expert travel advice from professionals.</li>
                                <li>Exclusive deals and discounts.</li>
                                <li>Secure and easy online payment methods.</li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--- /about us ---->

        <!--- Recommended Destinations Section ---->
        <div class="destination-section">
            <div class="container">
                <h3 class="wow fadeInDown animated" data-wow-delay=".5s">Recommended Destinations</h3>

                <div class="row">
                    <!-- Destination 1 -->
                    <div class="col-md-4">
                        <div class="card destination-card">
                            <img src="images/paris.png" alt="Destination 1">
                            <div class="card-body">
                                <h5 class="card-title">Paris, France</h5>
                                <p class="card-text">Discover the city of love, filled with art, culture, and romance.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Destination 2 -->
                    <div class="col-md-4">
                        <div class="card destination-card">
                            <img src="images/japan.jpg" alt="Destination 2">
                            <div class="card-body">
                                <h5 class="card-title">Kyoto, Japan</h5>
                                <p class="card-text">Experience the perfect blend of tradition and modernity in this
                                    beautiful city.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Destination 3 -->
                    <div class="col-md-4">
                        <div class="card destination-card">
                            <img src="images/bali.png" alt="Destination 3">
                            <div class="card-body">
                                <h5 class="card-title">Bali, Indonesia</h5>
                                <p class="card-text">A tropical paradise of stunning beaches, vibrant culture
                                    landscapes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Our Team Section -->
        <div class="team-section">
            <div class="container">
                <h3>Our Team</h3>
                <div class="team-slider">
                    <!-- Team Member 1 -->
                    <div class="team-card">
                        <img src="images/Team1.jpg" alt="Lê Thị Thắm">
                        <div class="card-body">
                            <h5 class="card-title">Lê Thị Thắm</h5>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="team-card">
                        <img src="images/team2.jpg" alt="Phạm Lan Nhi">
                        <div class="card-body">
                            <h5 class="card-title">Phạm Lan Nhi</h5>
                        </div>
                    </div>
                    <!-- Team Member 3 -->
                    <div class="team-card">
                        <img src="images/team3.jpg" alt="Lê Ngọc Khánh Linh">
                        <div class="card-body">
                            <h5 class="card-title">Lê Ngọc Khánh Linh</h5>
                        </div>
                    </div>
                    <!-- Team Member 4 -->

                    <div class="team-card">
                        <img src="images/team4.png" alt="Đoàn Lam Vân Kỳ">
                        <div class="card-body">
                            <h5 class="card-title">Đoàn Lam Vân Kỳ</h5>
                        </div>
                    </div>
                </div>
                <div class="team-controls">
                    <button onclick="slideLeft()">&#10094; Prev</button>
                    <button onclick="slideRight()">Next &#10095;</button>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <?php include('includes/footer.php'); ?>
        <!-- Signup -->
        <?php include('includes/signup.php'); ?>
        <!-- Signin -->
        <?php include('includes/signin.php'); ?>
        <!-- Write Us -->
        <?php include('includes/write-us.php'); ?>
    </div>

    <script>
    let currentIndex = 0;

    function slideLeft() {
        const teamSlider = document.querySelector('.team-slider');
        currentIndex = (currentIndex > 0) ? currentIndex - 1 : 0;
        teamSlider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    function slideRight() {
        const teamSlider = document.querySelector('.team-slider');
        const totalCards = document.querySelectorAll('.team-card').length;
        currentIndex = (currentIndex < totalCards - 3) ? currentIndex + 1 : totalCards - 3;
        teamSlider.style.transform = `translateX(-${currentIndex * 100}%)`;
    }
    </script>
</body>

</html>