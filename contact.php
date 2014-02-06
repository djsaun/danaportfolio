<?php 
$headerOne = "A Teacher in the Making – Contact Me";
$section = "contact";
include 'includes/meta.html'; 
include 'includes/headernav.php'; ?>
		<div class="contactinfo">
			<p>Please enter your information and message in the form below.</br> 
				I will respond to you shortly. Thank you!</p>
		</div>
		<form method="POST" action="mailto:djsaun@gmail.com" name="contact_form" class="container six columns" id="contactform">
			<fieldset>
<!-- 			<input type="hidden" name="To" value="djsaun@gmail.com"></input>
				<input type="hidden" name="Subject" value="Contact Form Feedback"></input> -->
				<div class="name">
					<label for="Name">Name *</label>
					<input type="text" name="name" id="name" class="validate" pattern="[a-zA-Z ]+" required></input>
				</div>
				<div class="email">
					<label for="Email">Email *</label>
					<input type="email" name="email" id="email" class="validate" required></input>
				</div>
				<div class="number">
					<label for="Number">Phone Number</label>
					<input type="text" name="number" id="number" class="validate" placeholder="xxx-xxx-xxxx" pattern="\d{3}[\-]\d{3}[\-]\d{4}"></input>
				</div>
				<div class="message">
					<label for="Message">Message</label>
					<textarea name="message" id="message" rows="4" cols="50"></textarea>
				</div>
				<div class="submitbtn">
					<input type="submit" name="action" value="Submit">
				</div>
		</fieldset>
		</form>
		<div class="contactbox">
			<h4>Dana Saunders</h4>
			<!-- <p>4883 Martona Dr., Oak Park, CA 91377</p> -->
			<div id="map-canvas"></div>
			<p>Email: <a href="mailto:dsaunn@gmail.com" target="_top">dsaunn@gmail.com</a></p>
			<p>Phone: <a class="telephone" href="tel:818-337-8192">818-337-8192</a></p>
		</div>
		<?php include 'includes/footer.html'; ?>
	<script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsodWYK5v_h5cZYxz0OlnZR0mj8zYN0qs&sensor=false">
    </script>
    <script type="text/javascript" src="js/googlemap.js"></script>
    <script type="text/javascript" src="js/contact.js"></script>
<!-- End Document
================================================== -->
</body>
</html>