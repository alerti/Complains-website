<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<!--meta-->
		 <meta charset="UTF-8">
    <meta name="description" content="sammple of work">
    <meta property="og:title" content="smaple" />
    <meta property="og:url" content="https://www.alerti.github.io" />
    <meta property="og:description" content="SAmple of card display">
    <meta property="og:image" content="/images/image-01.jpg">
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en_GB" />
    <meta property="og:locale:alternate" content="fr_FR" />
    <meta property="og:locale:alternate" content="es_ES" />
		<!--ewnd meta-->
		<title>Showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="icon" type="image/png" href="images/loc.png"/>
    <!-- For apple devices -->
    <link rel="apple-touch-icon" type="image/png" href="images/loc.png" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="fade-in">

				<!-- Intro -->
					<div id="intro">
						<h1>Uber Complains</h1>
					<ul class="actions">
							<li><a href="#header" class="button icon solid solo fa-arrow-down scrolly">Continue</a></li>
						</ul>
					</div>

				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo">Send a Complains</a>
					</header>

				<!-- Nav -->
				<nav id="nav">
						<ul class="links">
							<li><a href="index.php">complain</a></li>
							<li class="active"><a href="complain.php">Complains</a></li>
						</ul>
					
					</nav>


				<!-- Main -->
					<div id="main">


						<!-- Featured Post -->
							<article class="post featured">
								<header class="major">
									<a href="#" class="image main"><img src="images/image-01.jpg" alt="" /></a>
									<span class="date"><? echo date("F d, Y")?></span>
									
									<p>This is a platform which offers you opportunity to file your complains about uber!</p>
								</header>
									<span class="button large">Type it here</span>
<?php 
require_once 'dbconfig.php';

if(isset($_POST['submit'])){

$name = $_POST['name'];
$location = $_POST['location'];
$email = $_POST['email'];
$message = $_POST['message'];

//file
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(!empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
//file end

$sql = "INSERT INTO showcase(name,location,email,message,file_name,uploaded_on) VALUES ('$name', '$location', '$email', '$message','$fileName',NOW())";
if(mysqli_query($link, $sql)){
    echo "<div class='alert alert-warning alert-dismissible fade show' role='alert'>Complain filed successfully.
    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='false'>&times;</span>
  </button>
    </div>";
  //header("refresh: 5; url=sales.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
				}
			}
		}
    mysqli_close($link);
}



?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>" enctype="multipart/form-data">								
									<div class="field">
										<label for="name"  style="padding:1rem;">Name</label>
										<input type="text" name="name" id="name" />
									</div>
									<div class="field">
										<label for="location"  style="padding:1rem;">Location</label>
										<input type="text" name="location" id="location" />
									</div>
										<div class="field">
										<label for="email"  style="padding:1rem;">Email</label>
										<input type="text" name="email" id="email" />
									</div>
								<div class="field">
										<label for="image"  style="padding:1rem;">Image</label>
										<input type="file" name="file" id="image"  accept="image/*"/>
									</div>						
									<div class="field">
										<label for="message"  style="padding:1rem;">Message</label>
										<textarea name="message" id="message" rows="3"></textarea>
									</div>

								
								
								
								
								
								<input type="submit" name = "submit" value="sent message"  style="margin:1rem;">
								</form>

							</article>

</div>

					

				

				<!-- Copyright -->
					<div id="copyright">
						<ul><li>&copy; Alerti</li><li>Design: <a href="http://alartt.com/profile">Alerti</a></li></ul>
					</div>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	</body>
</html>