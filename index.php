<!DOCTYPE html>
<?php $thisPage="Home"; ?>

<html>

<head>
<meta charset="utf-8" />
<title>Home</title>
<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
<script src="overlay.js"></script>

<script>
	
</script>


</head>

<body>

<?php include("navigation.php"); ?>

<section class="page">
	
	<h1>Are you game?</h1>

	<p>Welcome to Restaurant Bingo, the game where you eat your way to success!</p>
	
	<section class="rules">
	
	<h2>How to play:</h2>
	
		<ol>
			<li>Players must eat at 24 unique restaurants in Chicago, each starting with one different letter of the alphabet.</li>
			<li>Players should keep track of their progress on the interactive bingo card.</li>
			<li>To prove their visit to each restaurant, players must either take a photo of themselves with the menu or "check in" (if feature is available).</li>
			<li>Players will have 12 months to complete their bingo card.</li>
			<li>Players each get one "wild card" which they can substitute for any letter.</li>
		</ol>	
			
	<h2>Some guidelines:</h2>		
			
		<ol>	
			<li>To count as a restaurant (as opposed to a bar), the establishment must have a distinguished food menu (as opposed to, say, a popcorn machine).</li>
			<li>Chain restaurants NOT allowed; anything with more than 2 locations is a chain.</li>
			<li>Articles don't count in the name of the restaurant. For example, The Gage would count as "G", not "T".</li>
	
		</ol>
	
	</section>
	
   <aside>	
	
	<form class="login">
		<ul>
			<li class="boxtitle">Login</li>
			<li>Email: <input type="email" name="email" /></li>
			<li>Password: <input type="password" name="password" /></li>
			<li><input type="submit" value="Submit" /></li>
			<li>Don't have an account?</li>
			<li><a href='./loginform.htm' title="Enter your information." class="popup">Sign up!</a></li>
		</ul>	
	</form>

   </aside>

</section>

<footer>
	<small>Copyright 2011</small>
</footer>

</body>

</html>