<?php
session_start();
error_reporting(0);
include('includes/config.php');
if(isset($_POST['submit1']))
{
$fname=$_POST['fname'];
$email=$_POST['email'];	
$mobile=$_POST['mobileno'];
$subject=$_POST['subject'];	
$description=$_POST['description'];
$sql="INSERT INTO  tblenquiry(FullName,EmailId,MobileNumber,Subject,Description) VALUES(:fname,:email,:mobile,:subject,:description)";
$query = $dbh->prepare($sql);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);
$query->bindParam(':description',$description,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
$msg="Enquiry  Successfully submited";
}
else 
{
$error="Something went wrong. Please try again";
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
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}

.banner-1 {
    position: relative;
    background: url('images/bannertem.jpg') no-repeat center center; /* Đường dẫn tới ảnh của bạn */
    background-size: cover; /* Tràn full màn hình */
    height: 60vh; /* Full chiều cao màn hình */
    display: flex;
    justify-content: center; /* Căn giữa ngang chữ */
    align-items: center; /* Căn giữa dọc chữ */
    margin: 0;
    /*--
       background-size: cover;
    -webkit-background-size: cover;
    -o-background-size: cover;
    -ms-background-size: cover;
    -moz-background-size: cover;
    background-repeat: no-repeat;
    background-position: center;
    height: 100vh; /* Chiều cao toàn màn hình 
    margin: 0; /* Loại bỏ mọi khoảng cách */
    padding: 0; /* Loại bỏ padding nếu cần 
    --*/
}


.banner-1 .container {
    position: relative;
    text-align: center;
    color: white; /* Màu chữ nổi bật */
}


.banner-1 h1 {
    font-size: 10px; /* Kích thước chữ từ inline style */
    text-align: center; /* Canh giữa */
    
    color: #FFFFFF; /* Màu xanh lá cây */
    font-weight: bold; /* Đậm chữ */
    margin-bottom: 30px; /* Khoảng cách dưới */
    line-height: 1.38; /* Dòng cách như inline style */
    /*--
    font-size: 50px;
    margin-bottom: 40px;
    padding: 1.5em 0 0;
    text-align: center;
    color: #ffffff;
    --*/
}
		</style>

</head>
<body>
<!-- top-header -->
<div class="top-header">
<?php include('includes/header.php');?>
<div class="banner-1 ">

    <!-- 
	<div class="container">
    <img src="images/bannertem.jpg" alt="Travel Banner" class="img-responsive">
    -->
   
    <h1 class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; color:#fbeee6 ;animation-name: zoomIn;font-size:60pt"> Terms of use</h1>
     
    
		
	</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<!--- privacy ---->
<div class="privacy">
	<div class="container">

	
	<p dir="ltr" style="line-height:1.38;margin-top:12pt;margin-bottom:12pt;"><p dir="ltr" style="text-align:center; font-size:60px;  color:rgb(0, 0, 0);;font-weight:bold;">
    <br>
</p>
</p>
<p dir="ltr" style="text-align:center; color:rgb(0, 0, 0);;font-size:15pt;font-style: italic;">
    Welcome to Tourism Management System, your trusted partner in delivering exceptional travel experiences. By accessing our website, you are agreeing to the terms outlined below. Please read them carefully to ensure a smooth and satisfactory user experience.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
    1. General Terms
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
    1.1. By using our website or any of our services, you confirm that you accept these Terms of Use and agree to abide by them.
    <br>
    1.2. Tourism Management System offers a wide range of ticket booking services, covering transportation, guided tours, events, and more. These services are facilitated by various third-party providers, which are integral to your travel experience.
    <br>
    1.3. To utilize our platform, you must meet the minimum age requirement of 18 years or possess the legal authority as defined under the laws applicable in your region. By continuing, you affirm that you meet these requirements.
</p>

<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
2. Booking and Payment
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
2.1. All bookings are conditional upon availability and will be confirmed by the respective service providers. Any reservation is considered provisional until a confirmation email is sent to you.
<br>
2.2. Full payment is required at the time of booking unless stated otherwise. Payment methods supported by the Tourism Management System include major credit/debit cards and other available payment gateways.
<br>
2.3. The prices displayed on the website are inclusive of taxes, handling fees, and any applicable service charges unless specified. Users are advised to carefully review the pricing details before proceeding with a purchase.
<br>
2.4. Any errors in pricing due to technical glitches will be rectified, and you will have the option to proceed at the corrected price or cancel the booking without penalties.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
3. Cancellations and Refunds
</p><p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
3.1. Cancellation policies are governed by the terms set forth by the service providers, which may vary between services. Detailed policies for each booking are available during the checkout process.
<br>
3.2. Refunds, where applicable, will be processed based on the provider's cancellation policy. Any administrative or processing fees deducted will sbe communicated upfront.
<br>
3.3. Tourism Management System retains the right to cancel any reservation due to unforeseen technical issues, disruptions, or force majeure events. In such situations, a full refund will be issued promptly.
<br>
3.4. Users are encouraged to contact customer support promptly in the event of any booking discrepancies or cancellation requests.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
4. User Responsibilities
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
4.1. You are responsible for providing accurate and up-to-date personal information during the booking process. Inaccurate information may result in booking delays or cancellations, for which Tourism Management System holds no liability.
<br>
4.2. It is your responsibility to review and adhere to the specific terms and conditions set forth by the chosen service provider, including rules related to cancellations, rescheduling, and conduct.
<br>
4.3. The website must not be used for purposes deemed unlawful, fraudulent, or harmful to other users or third parties. Misuse of the platform may result in suspension or legal action.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
5. Limitation of Liability
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
5.1. Tourism Management System functions as a mediator, facilitating interactions between users and service providers. We are not responsible for any service failures, delays, or incidents caused directly by the providers.
<br>
5.2. While we endeavor to ensure uninterrupted service, we cannot guarantee that the website will be error-free or free from disruptions due to technical issues, maintenance, or external factors.
<br>
5.3. Any compensation claims or disputes arising from the service provider’s shortcomings must be directed to them in accordance with their policies.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
6. Intellectual Property
</p>
<p dir="ltr" style="font-size: 17px; color:rgb(0, 0, 0);">
6.1. The content available on Tourism Management System’s website, including but not limited to logos, images, designs, and text, is protected under applicable intellectual property laws.
<br>
6.2. Reproduction, distribution, or unauthorized usage of our intellectual property is strictly prohibited and may result in legal action. Users are welcome to share public content for personal use only.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
7. Privacy and Data Security
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
7.1. Tourism Management System is committed to safeguarding your personal data. We process your information in accordance with our [Privacy Policy], ensuring transparency and security.
<br>
7.2. By using our services, you consent to the collection and use of your data as outlined in our Privacy Policy.
</p>
<p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
8. Modifications to Terms
</p>
<p dir="ltr" style="font-size: 17px; color: rgb(0, 0, 0);">
8.1. Tourism Management System reserves the right to amend these Terms of Use at its discretion, with updates effective upon publication on the website.
<br>
8.2. Users are encouraged to review the Terms periodically to stay informed of any changes. Continued use of the platform signifies acceptance of the updated Terms.
</p><p dir="ltr" style=" font-size: 30px;font-weight: bold; color: #28a745;  ">
9. Contact Information
</p><p dir="ltr" style="font-size: 17px; color:rgb(0, 0, 0);">
   For any questions, assistance, or feedback regarding these Terms of Use, please contact us via:
<br>
Email: TourismManagement@.udn.vn
<br>
Phone: 096389 438905
<br>
Address: 123 Tran Hung Dao Street
</p>
<p dir="ltr" style="   color: #28a745; text-align: center;font-size:18pt;font-style:italic;">
    Thank you for choosing Tourism Management System. We are dedicated to making your travel dreams a reality. Have a fantastic journey!
</p>
										
										
										
		
	</div>
</div>
<!--- /privacy ---->
<!--- footer-top ---->
<!--- /footer-top ---->
<?php include('includes/footer.php');?>
<!-- signup -->
<?php include('includes/signup.php');?>			
<!-- //signu -->
<!-- signin -->
<?php include('includes/signin.php');?>			
<!-- //signin -->
<!-- write us -->
<?php include('includes/write-us.php');?>
</body>
</html>
