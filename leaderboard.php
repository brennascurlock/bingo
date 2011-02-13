<!DOCTYPE html>
<?php $thisPage="Leaderboard"; ?>

<html>

<head>

<meta charset=utf-8 />
<title>Leaderboard</title>

<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Cabin">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
<script src="overlay.js"></script>

</head>

<body>

<?php include("navigation.php"); ?>

<section class="page">
	
	<h1>The Rankings</h1>

	<p>How do you rank against other players? Find out here!</p>
	

	<section class="rank-all">
		
		<ul>
		
		<li><h1>Top Players</h1>
		
			<ol>
						<li>Tom Cruise</li>
						<li>Bugs Bunny</li>
						<li>Harvey Birdman</li>
						<li>Papa Smurf</li>
						<li>Lord Voldemort</li>
						<li>Abe Lincoln</li>
						<li>Harry Potter</li>
						<li>Mr. Suffleupagus</li>
						<li>Rip Torn</li>
						<li>Roadrunner</li>
			</ol>
			
			<p><a href="">View All</a></p>
			
		</li>
		
		<li><h1>Percent Complete</h1>
		
			<ol>
						<li>80%</li>
						<li>75%</li>
						<li>75%</li>
						<li>60%</li>
						<li>55%</li>
						<li>45%</li>
						<li>40%</li>
						<li>35%</li>
						<li>35%</li>
						<li>30%</li>
			</ol>
		
		
		</li>
		

	</section>


	<section class="rankspecial">
		
		<h1>Categories</h1>
	
	<div id="accordion">
		
		<h1><a href="#">Italian</a></h1>
				
			<div>

				<ol>
					<li>Tom Cruise</li>
					<li>Bugs Bunny</li>
					<li>Harvey Birdman</li>
					<li>Papa Smurf</li>
					<li>Abe Lincoln</li>
				</ol>
			
				<p><a href="">View All</a></p>
			
			</div>
    
		
		<h1><a href="#">Mexican</a></h1>
				
			<div>

				<ol>
					<li>Abe Lincoln</li>
					<li>Harry Potter</li>
					<li>Mr. Suffleupagus</li>
					<li>Tom Cruise</li>
					<li>Roadrunner</li>
				</ol>
			
				<p><a href="">View All</a></p>
			
			</div>
		
		<h1><a href="#">Chinese</a></h1>			
			
			<div>

				<ol>
					<li>Elmer Fudd</li>
					<li>Harvey Birdman</li>
					<li>Lord Voldemort</li>
					<li>Britney Spears</li>
					<li>John Locke</li>
				</ol>
			
				<p><a href="">View All</a></p>
			
			</div>
		

	</div>

	</section>

</section>

<footer>
	<p>Copyright 2011</p>
</footer>

</body>

</html>