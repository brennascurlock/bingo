<!DOCTYPE html>
<?php $thisPage="Bingocard"; ?>

<html>

<head>
<meta charset="utf-8" />
<title>Page Title</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
<script src="overlay.js"></script>
<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
</head>

<body>


<?php include("navigation.php"); ?>

<section class="page">
	<h1>Your Bingo Card</h1>

		<section class="bingocard">
		<ul>
			<li>
				<ul class="abc">
					<li><a class="popup" id="A" href="./visit_form.htm" title="Enter Visit Information" >A</a></li>
					<li>B</li>
					<li>C</li>
					<li>D</li>
					<li>E</li>
					<li>F</li>
					<li>G</li>
					<li>H</li>
					<li>I</li>
				</ul>
			</li>

			<li>
				<ul class="abc">
					<li>J</li>
					<li>K</li>
					<li>L</li>
					<li>M</li>
					<li>N</li>
					<li>O</li>
					<li>P</li>
					<li>Q</li>
					<li>R</li>
				</ul>
			</li>
			
			<li>
				<ul class="abc">
					<li>S</li>
					<li>T</li>
					<li>U</li>
					<li>V</li>
					<li>W</li>
					<li>X</li>
					<li>Y</li>
					<li>Z</li>
					<li>*</li>
				</ul>
			</li>
			
		</ul>
		</section>
		<aside>	

		<ul class="profile">
			<li>
				<ul class="personal">
					<li><img class="profile" src="bunny.jpg" /></li>
					<li class="boxtitle">DaBunny</li>
					<li class="personal">Bugs Bunny</li>
					<li class="personal">joined 02/11</li>
				</ul>
			</li>
			
			<li>
				<ul class="rank">
					<li class="subheading">Challenge:</li>
					<li>36% complete</li>
					<li class="subheading">Rank:</li>
					<li>Overall: 234</li>
					<li>Italian: 22</li>
				</ul>
			</li>
		</ul>
		

   </aside>
</section>

<footer>
	<small>Copyright 2011</small>
</footer>

</body>

</html>