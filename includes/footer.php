



<!--- /footer-top ---->
<!---copy-right ---->
<!-- <div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;"> TMS . All Rights Reserved </p>
	</div>
</div> -->
<!DOCTYPE HTML>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Footer Example</title>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<style>
		/* CSS for Footer */
		#footer {
			/* #34ad00 */
			/* background-color: #3f84b1; */
			/* background-color: #ecf2ff; */
			background-color: #f7f7f7;

			/* background-color: #ddf1f5; */
			padding: 30px 0;
			color: #333;
		}

		.footer {
			display: flex;
			flex-direction: column;
			align-items: flex-start;
		}

		.footer-title {
			font-size: 16px;
			font-weight: bold;
			margin-bottom: 20px;
			color: #333;
		}

		.footer-links {
			list-style: none;
			padding: 0;
		}

		.footer-links li {
			margin-bottom: 10px;
		}

		.footer-links a {
			color: #333;
			text-decoration: none;
			transition: color 0.2s;
		}

		.footer-links li i {
			margin-right: 15px;
			color: #34ad00;
			width: 14px;
			text-align: center;
		}

		.footer-links a:hover {
			color: #34ad00;
		}

		.social-links {
			margin-bottom: 20px;
		}

		.social-links a {
			display: flex;
			align-items: center;
			gap: 10px;
			margin-bottom: 10px;
			color: #333;
			text-decoration: none;
			transition: color 0.3s, background-color 0.3s;
		}

		/* Icon mạng xã hội */
		.social-links a i {
			color: #34ad00;
			font-size: 14px;
			transition: color 0.3s;
			margin-right: 10px;
		}

		.social-links a:hover {
			background-color: transparent;
			color: #34ad00;
		}

		.subscribe-form {
			display: flex;
			gap: 10px;
			align-items: center;
		}

		.subscribe-form input {
			flex: 1;
			padding: 12px;
			border: none;
			background-color: #f2f2f2;
			border-radius: 5px 0 0 5px;
			font-size: 14px;
			color: #6c757d;
		}

		.subscribe-form button {
			padding: 12px 20px;
			background-color: #34ad00;
			color: #fff;
			border: none;
			border-radius: 0 5px 5px 0;
			cursor: pointer;
			transition: background-color 0.2s;
			font-size: 14px;
		}

		.subscribe-form button:hover {
			background-color: #34ad00;
		}

		hr {
			border-color: #e0e0e0;
			margin: 20px 0;
		}

		.text-right {
			text-align: right;
		}
	</style>
</head>

<body>
	<!-- Footer Section -->
	<footer id="footer">
		<div class="container">
			<div class="row">
				<!-- About Us Section -->
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">About Us</h3>
						<ul class="footer-links">
							<li><a href="#"><i class="fa fa-map-marker"></i> 470 Trần Đại Nghĩa</a></li>
							<li><a href="#"><i class="fa fa-phone"></i> 023 636 7117</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i> Tourismms@gmail.com</a></li>
						</ul>
					</div>
				</div>

				<!-- Categories Section -->
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Quick links</h3>
						<ul class="footer-links">
							<li><a href="#">Home</a></li>
							<li><a href="#">About</a></li>
							<li><a href="#">Tour Packages</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Enquiry</a></li>
						</ul>
					</div>
				</div>

				<!-- Follow Us Section -->
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Follow us</h3>
						<div class="social-links">
							<a href="#"><i class="fa fa-facebook"></i> Facebook</a>
							<a href="#"><i class="fa fa-twitter"></i> Twitter</a>
							<a href="#"><i class="fa fa-instagram"></i> Instagram</a>
							<a href="#"><i class="fa fa-linkedin"></i> LinkedIn</a>
						</div>
					</div>
				</div>

				<!-- Subscribe Section -->
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Subscribe us</h3>

						<form class="subscribe-form">
							<input type="email" placeholder="Enter email address">
							<button type="submit">Subscribe</button>
						</form>
					</div>
				</div>
			</div>

			<hr>

			<!-- Footer Copyright -->
			<div class="row">
				<div class="col-md-6">
					<span class="copyright">
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved
					</span>
				</div>
			</div>
		</div>
	</footer>
</body>

</html>