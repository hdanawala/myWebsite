<!DOCTYPE html>
	<head>
		<title>Home</title>
		<link rel="stylesheet" href="./css_bs/bootstrap.min.css">
		<link rel="stylesheet" href="https://getbootstrap.com/docs/3.3/examples/sticky-footer-navbar/sticky-footer-navbar.css">
		<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> -->
		<link rel="stylesheet" href="./css_bs/global_bs.css">
		<link href="https://fonts.googleapis.com/css?family=Karla" rel="stylesheet">
		<!-- css for social media icons -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	</head>
	
	<body id="bootstrap-overrides">
	
		<div class="container-fluid" id="top">
			
			<header>
				<h1>Haseeb Danawala</h1>
			</header>
			
			<!-- <nav>
				<ul class="nav nav-pills nav-fill navbar-toggler">
					<li class="nav-item"><a href="./index_bs.php" class="nav-link active">Home</a></li>
					<li class="nav-item"><a href="./cars_bs.html" class="nav-link">Cars</a></li>
					<li class="nav-item"><a href="./movies_bs.html" class="nav-link">Movies</a></li>
					<li class="nav-item"><a href="./tvshows_bs.html" class="nav-link">TV Shows</a></li>
					<li class="nav-item"><a href="./workout_bs.html" class="nav-link">Workout</a></li>
					<li class="nav-item"><a href="./contact_bs.html" class="nav-link">Contact Me</a></li>
				</ul>
			</nav> -->
			
			<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
				<!-- <a class="navbar-brand" href="#">Haseeb Danawala</a> -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav">
					<ul class="navbar-nav">
						<li class="nav-item active">
							<a class="nav-link" href="./index_bs.php">Home<span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./cars_bs.html">Cars</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./movies_bs.html">Movies</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./tvshows_bs.html">TV Shows</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./workout_bs.html">Workout</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./contact_bs.html">Contact Me</a>
						</li>
					</ul>
				</div>
			</nav>
			
			<div class="content"> <!-- I had used article tag previously; section tag is similar and new, but not supported in IE8 or older so did not use -->
				<h2>Introduction</h2>
				<div class="main-pic">
					<img src="./img_bs/home_bs/hd.jpg" alt="HD" style="width:750px" class="img-fluid float-left"/>
				</div>
				<!-- <hr> getting rid of hr because aligning pic and intro next to each other -->
				<div class="right-div">
					<div class="p-content">
						<p>Hi there! My name is Haseeb Danawala and I am an IT Business Analyst. 
						   I am passionate about bringing value to the customer, helping the IT Project Manager in any way I can, and document issues and requirements. 
						   I am also considered a lead tester and I conduct SIT, help the business setup UAT, and perform post-MTP validations prior to business validations.
						   Besides work, I really enjoy working out at the gym, going to car shows, watching TV shows, and watching movies. 
						   Working out is probably my #1 priority outside of work, and this is because of the following reasons:
						</p>
							<ol>
								<li>Helps me to stay healthy and fit</li>
								<li>Reduces stress</li>
								<li>Keeps me a bit more confident even when I am not in the gym</li>
								<li>Helps me look and feel stronger</li>
								<li>Working out motivates me to watch what I eat as well</li>
							</ol>
						<p>I have been to various car shows and out of all the car types and genres, my favorite would have to be American muscle cars. 
						   I think it has to do with them being more powerful, heavier, and have a “classic” look to them.
						   I like all kinds of movies and TV shows, including: Comedy, Action, Adventure, Mystery, Sci-Fi, and so on. 
						   I will be sharing with you my top five movies as well as TV shows on my website.
						</p>
					</div>
				</div>
				<!-- <p><a href="#top">Back to top</a><p> removing this because intro is aligned at the same level as intro pic (page is short in height). -->
			</div>
			<div style="clear:both"></div>
			<div class="container-fluid fixed-bottom" id="footer-items">
				<div class="row">
					<!-- <div id="sitemap"> -->
					<div class="col-4">
						<div class="embedded">
							<strong><a href="./index.php">about me</a></strong><br>
							<strong><a href="./cars.html">my favorite cars</a></strong><br>
							<strong><a href="./movies.html">my favorite movies</a></strong><br>
							<strong><a href="./tvshows.html">my favorite tv shows</a></strong><br>
							<strong><a href="./workout.html">my favorite exercises</a></strong><br>
						</div>
					</div>
					<!-- <div id="updates-sign-up"> -->
					<div class="col-4">
						<div class="embedded2">
							<ul id="footer_email_input">
								<li><strong>sign up for updates</strong></li><br>
								<li><input type="email" title="Email address" placeholder="Email address"></li><br>
								<li><form action="mailto:hdanawala@gmail.com?subject=Subscription"><input type="submit" class="button"></form></li>
							</ul>
						</div>
					</div>
					<!-- <div id="misc"> -->
					<div class="col-4">
						<div class="embedded3">
							<strong><a href="mailto:hdanawala@gmail.com?Subject=Broken%20Link(s)">report broken links</a></strong><br>
							<strong><a href="mailto:hdanawala@gmail.com?Subject=Advertisement%20Request">advertise with me</a></strong><br>
							<strong><a href="mailto:hdanawala@gmail.com?Subject=Website%20Suggestion(s)">website suggestions</a></strong><br>
							<strong>follow me </strong><a href="https://twitter.com/danawala_h" class="fa fa-twitter"></a>
						</div>
					</div>
					<div id="copyright">&copy; Copyright 2017 Haseeb Danawala</div>
				</div>
			</div>
			<!-- <footer>&copy; Copyright 2017 Haseeb Danawala</footer> -->
		</div>
		
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	
	</body>

</html>
