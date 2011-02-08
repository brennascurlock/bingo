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

<script>

	$(document).ready(function() {
	var $dialog = $('<div></div>')
		.load('loginform.htm')
		.dialog({
			autoOpen: false,
			title: 'Create your account'
		});



	$('form.login a').click(function() {
		$dialog.dialog('open');
		// prevent the default action, e.g., following a link
		return false;
		});
	});
	
</script>


</head>

<body>

<header>
	<h1>Restaurant Bingo</h1>
	<h2>Fun for Foodies</h3>
</header>

<?php include("navigation.php"); ?>

<section class="page">
	
	<h1>Are you game?</h1>

	<p>Welcome to Restaurant Bingo, the game where you eat your way to success!</p>
	
	<p>Vivamus pharetra egestas mauris nec gravida. Nunc fringilla lorem a tellus congue vitae iaculis mi tristique. Nullam suscipit eros sed quam dignissim venenatis. Suspendisse potenti. Ut eleifend semper odio, et sollicitudin neque placerat eget. Sed urna lectus, ullamcorper ac bibendum et, ullamcorper nec magna. Cras eget viverra est. Etiam nec est eu est faucibus ultrices. Donec in nisl id velit posuere congue. Curabitur venenatis tincidunt felis elementum feugiat. In vel felis risus.</p>

	<p>Nulla ultrices laoreet eros eget mattis. Aliquam ut rhoncus libero. Vestibulum ac augue felis. Phasellus rhoncus gravida erat. Pellentesque ante mi, egestas quis iaculis vitae, lobortis id lectus. Pellentesque volutpat arcu eget augue tincidunt cursus. Maecenas luctus porta consectetur. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Aliquam in orci sed neque porta adipiscing vitae sed dolor. Integer mollis fermentum velit, vitae luctus ipsum imperdiet sit amet. Aliquam quis tempus nisl. Cras vel est tortor.</p> 

	<form class="login">
		<ul>
			<li>Login</li>
			<li>Email: <input type="email" name="email" /></li>
			<li>Password: <input type="password" name="password" /></li>
			<li><input type="submit" value="Submit" /></li>
			<li>Don't have an account? <a href='loginform.htm'>Sign up!</a></li>
		</ul>	
	</form>


</section>

<footer>
	<small>Copyright 2011</small>
</footer>

</body>

</html>