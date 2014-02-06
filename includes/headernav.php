<div class="container">
	<header class="container sixteen columns">
		<h1>Dana Saunders' Teaching Profile<h1>
		<h3><?php echo $headerOne; ?></h3>
		<img src="" alt="Banner image" width="" height="">
	</header>
<nav class="container five columns">
	<ul class="navlist">
		<li <?php if ($section == "home") {echo 'class="on"';} ?>><a href="index.php">Home</a><li>
		<li <?php if ($section == "resume") {echo 'class="on"';} ?>><a href="resume.php">Resume</a></li>
			<ul class="resdiv">
				<li><a href="resume.php#education">Education</a></li>
				<li><a href="resume.php#profteach">Professional Teaching Experience</a></li>
				<li><a href="resume.php#cave">Field Experience Through CAVE</a></li>
				<li><a href="resume.php#profwork">Professional Work Experience</a></li>
				<li><a href="resume.php#highschool">High School Achievements</a></li>
				<li><a href="resume.php#downloadres">Download</a></li>
			</ul>
		<li <?php if ($section == "philosophy") {echo 'class="on"';} ?>><a href="philosophy.php">My Philosophy of Education</a></li>
		<li <?php if ($section == "classmgmt") {echo 'class="on"';} ?>><a href="classroommgmt.php">Classroom Management</a></li>
		<li <?php if ($section == "rec") {echo 'class="on"';} ?>><a href="recommendations.php">Recommendations</a></li>
		<li <?php if ($section == "eval") {echo 'class="on"';} ?>><a href="evaluations.php">Evaluations</a></li>
		<li <?php if ($section == "plans") {echo 'class="on"';} ?>><a href="plans.php">Lesson and Unit Plans</a></li>
		<li <?php if ($section == "assessment") {echo 'class="on"';} ?>><a href="assessment.php">Assessment</a></li>
		<li <?php if ($section == "contact") {echo 'class="on"';} ?>><a href="contact.php">Contact Me</a></li>
		<li><a href="downloads.php">Downloads</a></li>
	</ul>
</nav>
