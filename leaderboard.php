<!DOCTYPE html>
<?php $thisPage="Leaderboard"; ?>

<html>

<head>
<meta charset=utf-8 />
<title>Leaderboard</title>
<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
</head>

<body>

<header>
	<h1>Restaurant Bingo</h1>
	<h3>Fun for Foodies</h3>
</header>

<?php include("navigation.php"); ?>

<section class="page">
	
	<h1>The Rankings</h1>

	<p>How do you rank against other players? Find out here!</p>
	

	<section class="rank-all">
		
		<h1>All Players</h1>
		
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

	</section>


	<section class="rank-special">
		<ul>

			<li><section class="rank-italian">
				
				<h1>Italian</h1>
				
				<p>For those who <i>mangia bene!</i></p>
				
					<ol>
						<li>Tom Cruise</li>
						<li>Bugs Bunny</li>
						<li>Harvey Birdman</li>
						<li>Papa Smurf</li>
						<li>Abe Lincoln</li>
					</ol>
				
				<p><a href="">View All</a></p>
				
			</section></li>

			<li><section class="rank-mexican">
				
				<h1>Mexican</h1>
				
				<p>For those who like it hot.</p>
				
					<ol>
						<li>Abe Lincoln</li>
						<li>Harry Potter</li>
						<li>Mr. Suffleupagus</li>
						<li>Tom Cruise</li>
						<li>Roadrunner</li>
					</ol>
				
				<p><a href="">View All</a></p>
				
			</section></li>

			<li><section class="rank-chinese">
				
				<h1>Chinese</h1>
				
				<p>For those who like their meal with a fortune cookie.</p>
				
					<ol>
						<li>Elmer Fudd</li>
						<li>Harvey Birdman</li>
						<li>Lord Voldemort</li>
						<li>Britney Spears</li>
						<li>John Locke</li>
					</ol>
				
				<p><a href="">View All</a></p>
				
			</section></li>
		</ul>
	</section>

</section>

<footer>
	<p>Copyright 2011</p>
</footer>

</body>

</html>