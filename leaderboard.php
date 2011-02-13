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
		
		<li><h1>Rank</h1>
		
			<ol>
						<li>1</li>
						<li>2</li>
						<li>3</li>
						<li>4</li>
						<li>5</li>
						<li>6</li>
						<li>7</li>
						<li>8</li>
						<li>9</li>
						<li>10</li>
						<li><a href="">View All</a></li>
			</ol>	
			
		</li>
		
		<li><h1>Player Name</h1>
		
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
			
		</li>
		
		<li><h1>Percent Complete</h1>
		
			<ol>
						<li>80% (20 out of 26)</li>
						<li>75% (19 out of 26)</li>
						<li>75% (19 out of 26)</li>
						<li>60% (15 out of 26)</li>
						<li>55% (14 out of 26)</li>
						<li>45% (12 out of 26)</li>
						<li>40% (10 out of 26)</li>
						<li>35% (9 out of 26)</li>
						<li>35% (9 out of 26)</li>
						<li>30% (8 out of 26)</li>
			</ol>
		
		</li>
		
		</ul>

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