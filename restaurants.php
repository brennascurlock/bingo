<!DOCTYPE html>
<?php $thisPage="Restaurants"; ?>

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

<script>
$(document).ready(function() {
    $('#accordion li').css('list-style-type','circle');
});
</script>

</head>

<body>

<?php include("navigation.php"); ?>

<section class="page">
	
	<h1>Restaurants</h1>

	<p>Find out what restaurants have been added by users.</p>

	
        
        <div id="accordion">
		
		<h1><a href="#">A</a></h1>
				
			<div>

				<ol>
					<li>Alliance Bakery</li>
					<li>Atwood Cafe</li>
				</ol>
			
			</div>
    
		
		<h1><a href="#">B</a></h1>
				
			<div>

				<ol>
					<li>Bite</li>
					<li>The Boardwalk</li>
                                        
				</ol>
			
			</div>
		
		<h1><a href="#">C</a></h1>			
			
			<div>

				<ol>
					<li>Cafe Burlesque</li>
					<li>Cinnastick</li>
					<li>Curly Friez</li>

				</ol>
			
			</div>
		
                <h1><a href="#">D</a></h1>			
			
			<div>

				<ol>
					<li>Darkwood Lounge</li>
					<li>Donny's Pizza</li>
					<li>Duchamp</li>

				</ol>
			
                        </div>
    
		<h1><a href="#">E</a></h1>
				
			<div>

				<ol>
					<li>Elephant and Castle</li>
					<li>Earwax Cafe</li>
				</ol>
			
			</div>
    
		
		<h1><a href="#">F</a></h1>
				
			<div>

				<ol>
					<li>Fun Kitchen</li>
					<li>Funk House</li>
                                        
				</ol>
			
			</div>
		
		<h1><a href="#">G</a></h1>			
			
			<div>

				<ol>
					<li>Goober's</li>
					<li>Garden Fiesta</li>
					<li>GaGa Lounge</li>

				</ol>
			
			</div>
		
                <h1><a href="#">H</a></h1>			
			
			<div>

				<ol>
					<li>House of Hotcakes</li>
					<li>Harp's</li>

				</ol>
			
			</div>
        
        </div>      

</section>

<footer>
	<p>Copyright 2011</p>
</footer>

</body>

</html>
