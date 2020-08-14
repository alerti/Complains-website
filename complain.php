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
		<title>showcase</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
		integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
		<script src="https://kit.fontawesome.com/b9c81a0b5a.js" crossorigin="anonymous"></script>
		<link rel="icon" type="image/png" href= "images/loc.png">
    <!-- For apple devices -->
    <link rel="apple-touch-icon" type="image/png" href="images/loc.png" />
	</head>
	<body class="is-preload">
<style>
	.btn{
		margin:2px;
	}
	.col-sm-8{
		margin:auto;
	}
	#copyright{
		color:black;

	}
	
	
</style>
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
						<a href="index.php" class="logo">All Complains</a>
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
				<?php
// Include the database configuration file
include 'dbconfig.php';

// Get images from the database
$query = $link->query("SELECT * FROM showcase ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
while($row = $query->fetch_assoc()){
$imageURL = 'uploads/'.$row["file_name"];
?>		
				<div class="row">
  <div class="col-sm-8">
    <div class="card">
      <div class="card-body">
			<img class="card-img-top" src="<?php echo $imageURL; ?>" alt="Card image cap">
			<h6 style="padding-top:10px;"><i class="far fa-comment"></i>&nbsp;&nbsp;Complain</h6>
				<p class="card-text" style="border:0.5px solid gray;padding:10px;"><?php echo $row['message']; ?></p>
				<a href="#" class="btn btn-outline-secondary "><i class="fas fa-clock"></i></i>&nbsp;&nbsp;<?php echo $row['uploaded_on']; ?></a>
				<a href="#" class="btn btn-outline-secondary"><i class="fas fa-map-marker-alt"></i>&nbsp;&nbsp;<?php echo $row['location']; ?></a>
				<a href="#" class="btn btn-outline-secondary"><i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo $row['name']; ?></a>

      </div>
    </div>
	</div>

	</div>
	
  <?php }
}else{ ?>
<div style="padding:20px;color:gray;font-size:1.8rem;">No complains..</div>
<?php } ?>
</div>
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