<html lang="en">
	<head>
		<meta name="robots" content="noindex, nofollow">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Email Sample</title>

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style>
			 body {
				background-color: #f0f0f0;
				color: #333;
				font-family: 'Arial', sans-serif;
				text-align: center;
			}

			.social-icons {
					margin-top: 20px;
			}

			.social-icons a {
				display: inline-block;
				margin: 0 10px;
				color: #333;
				text-decoration: none;
			}

			.social-icons i {
				font-size: 24px;
			}

			.social-buttons {
				display: flex;
				justify-content: space-evenly;
			}
			.social-buttons a {
				color: #a3a3a3;
				margin-left: 20px;
			}
			.social-buttons a:hover {
				color: #29a7fc;
			}

			.container {
				max-width: 600px;
				margin: 0 auto;
			}

			.card {
				padding: 10px;
				margin: 20px;
				box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
				background-color: #fff;
			}

			.card-body {
				padding: 20px;
			}

			.email-footer {
				margin-top: 20px;
				padding: 15px 100px 15px 100px;
			}

			.email-footer-title, 
			.email-footer-text, 
			.social-buttons {
				margin: 15px;
			}

			.email-footer-title {
				font-size: 18px;
			}

			.email-footer-text {
				display: flex;
				align-content: center;
				font-size: 14px;
			}
			.email-text-body {
				width: 100%;
			}
			b.website-name {
				color: #7489f7;
				display: contents;
			}

			.abstract-shape {
				width: 220px;
				height: 100px;
				display: flex;
				flex-direction: column!important;
				background-color: #5b6dcd;
				color: #fff;
				padding: 10px;
				border-radius: 90% 25% / 15% 80%;
				justify-content: center!important;
    		align-items: center!important;
			}
		</style>
	</head>

	<body style="background-color: rgb(136,189,191)">
		<div class="container" style="padding: 50px 0;">
			<div class="card p-5">
				<div class="card">
					<div class="card-body">
						<div class="email-text-body">
							<div class="container abstract-shape">
								<h1 style="margin: auto;">Welcome!</h1>
							</div>
							<hr>
							@if ($content['actionType'] == 'analysisForm')
								<p>Thank you for reaching out to <b class="website-name">Proconnect</b>.  <br><br>
								We have received your analysis inquiry and we are pleased to have you onboard with us on our mission to help businesses enhance their digital presence as well as grow with us. 
								We will get back to you as soon as possible so stay close!</p>
							@else
								<p>Thank you for subscribing and becoming a member to receive our newsletter at <b class="website-name">Proconnect</b>.  
									Here at <b class="website-name">Proconnect</b>, we consistently keep our subscribed users updated with updates, news, and offers. 
									We hope you have a great and enjoyable day!</p>
							@endif
						</div>
					</div>
				</div>

				<div class="email-footer container">
					<h3 class="email-footer-title">Stay in touch</h3>

					<div class="social-buttons">
						<a class="social-button facebook" href="#"><i class="fa fa-facebook fa-2x"></i></a>
						<a class="social-button twitter" href="#"><i class="fa fa-twitter fa-2x"></i></a>
						<a class="social-button google" href="#"><i class="fa fa-instagram fa-2x"></i></a>
						<a class="social-button google" href="#"><i class="fa fa-youtube fa-2x"></i></a>
					</div>

					<p class="email-footer-text">Email sent by <b class="website-name">Proconnect</b>.com <br>
					Copyright © 2023 Proconnect All rights reserved</p>
				</div>
			</div>
		</div>
	</body>
</html>
