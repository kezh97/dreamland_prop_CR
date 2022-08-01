<?php 
include 'header.php';

echo '<section class="contact_section">
		<h1 class="contact_header">get in touch</h1>

		<div class="container">
			<div class="contact_form row">
				<div class="form_field col-md-6">
					<input type="text" id="name" class="input-text">
					<label for="name" class="label">name</label>
				</div>

				<div class="form_field col-md-6">
					<input type="text" id="email" class="input-text">
					<label for="email" class="label">email address</label>
				</div>

				<div class="form_field col-md-6">
					<input type="text" id="number" class="input-text">
					<label for="number" class="label">phone number</label>
				</div>

				<div class="form_field col-md-12">
					<input type="text" id="message" class="input-text">
					<label for="message" class="label">message</label>
				</div>

				<div class="form_field col-md-12 text-center">
					<input type="submit" value="submit" class="btn btn-primary text-uppercase submit-btn">
				</div>
				
			</div>
		</div>
	</section>';

include 'footer.php';
?>