<?php
if (!defined('ABSPATH')) {
    die('-1');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<title></title>
        <meta http-equiv="cleartype" content="on">
        <meta name="MobileOptimized" content="320">
        <meta name="HandheldFriendly" content="True">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
		<link rel="stylesheet" type="text/css" href="assets/css/style.css"/>
    </head>
    <body>
		<div class="wrap">
			<div class="top-bar">
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
				<div></div>
			</div>
			<div class="container">
				<div class="page-wrap clearfix">
					<header class="header">
						<div class="logo">
							<img src="assets/images/logo.png" width="159" height="83" alt="Porter Dodson"/>
						</div>
						<div class="wifi-icon">
							<img src="assets/images/wifi-icon.png" width="127" height="96" alt="wifi"/>
						</div>
					</header>
					<main class="main">
						<h1>Welcome to our offices</h1>
						<p>To connect to our WiFi, please fill out the form below.</p>
						<form class="main-form" action="" method="post">
							<div class="form-row clearfix">
								<div class="form-field col-1of2">
									<input id="first-name" type="text" name="first_name" value="" placeholder=""/>
									<label for="first-name" class="form-field-label">First Name <span class="required-asterisk">*</span></label>
								</div>
								<div class="form-field col-1of2">
									<input id="last-name" type="text" name="last_name" value="" placeholder=""/>
									<label for="last-name" class="form-field-label">Last Name <span class="required-asterisk">*</span></label>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-field col-full">
									<input id="email" type="email" name="email" value="" placeholder=""/>
									<label for="email" class="form-field-label">Email <span class="required-asterisk">*</span></label>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-field col-full">
									<label for="terms-conditions" class="form-field-label-cb">
										<input id="terms-conditions" type="checkbox" name="terms_conditions" value="1"/>
										<span>I have read and agree to the terms and conditions below</span>
									</label>
								</div>
							</div>
							<div class="form-row clearfix">
								<div class="form-submit-row form-field col-full clearfix">
									<div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
									<div class="form-submit-wrap">
										<input type="hidden" name="submitted" value="1"/>
										<input id="submit" type="submit" name="sbmit" value="Connect"/>
									</div>
								</div>
							</div>
						</form>
					</main>
					<footer class="footer clearfix">
						<h4 class="footer-title">Terms & Conditions <span class="tc-toogle-arrow"></span></h4>
						<div class="footer-content">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris rutrum a enim interdum porta. Nulla at mauris lobortis, rhoncus purus quis, sodales felis. Nulla massa elit, aliquet id lacus a, cursus facilisis diam. Morbi hendrerit nulla nunc, sed viverra dolor vestibulum in. Donec ornare, diam nec consectetur condimentum, neque nibh venenatis tortor, maximus viverra est justo ac erat.</p>
							<p>Pellentesque et auctor sapien, ac iaculis purus. Quisque sed neque sapien. Quisque finibus ante nibh, sit amet dictum lorem convallis sit amet. Sed pulvinar quam eget accumsan venenatis. Sed ex ipsum, dictum nec varius vitae, rutrum at tellus. In varius, sapien vitae ornare condimentum, sapien orci auctor leo, id accumsan sapien arcu viverra mauris. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nunc eget erat a nulla vehicula elementum in et orci. Curabitur a est tempor nibh auctor mollis.</p>
							<p>Aenean volutpat volutpat auctor. Fusce ultrices vehicula feugiat. Nulla dignissim convallis metus at interdum. Nam cursus eleifend ex fermentum suscipit. Morbi eget tincidunt massa. Donec feugiat, leo eu cursus malesuada, dolor ipsum vulputate risus, at sodales diam tellus sed mauris. Maecenas ultricies, quam sed accumsan tincidunt, sem risus interdum eros, molestie tincidunt ligula nisl quis magna. Phasellus nunc ex, rhoncus at sagittis in, consectetur faucibus nibh. Donec vehicula congue pulvinar.</p>
							<p>Curabitur convallis nec tellus non sodales. Etiam vel condimentum arcu, quis iaculis tortor. Nam at massa vulputate, tinci</p>
						</div>
					</footer>
				</div>
			</div>
			<div class="bottom-bar"></div>
		</div>
		<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
		<script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>
