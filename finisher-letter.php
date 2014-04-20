<?php 
$headerOne = "A Teacher in the Making – Finisher's Letter";
$section = "classmgmt";
include 'includes/meta.html'; 
include 'includes/headernav.php'; 
?>
<section class="container twelve columns">

	<object class="finishletter" data="documents/DanaSaundersFinisherLetter.pdf" type="application/pdf" width="100%" height="100%"></object>

	<div class="dlresume">
		<p>Download my finisher's letter here:</p>
		<form method="GET" action="documents/DanaSaundersFinisherLetter.pdf">
			<button type="submit">Download</button>
		</form>
	</div>
</section>
<?php include 'includes/footer.html'; ?>

</div><!-- container -->


<!-- End Document
================================================== -->
</body>
</html>