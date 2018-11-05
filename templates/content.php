<?php
if (!defined('ABSPATH')) {
    die('-1');
}
?>
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