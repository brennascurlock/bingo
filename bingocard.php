<!DOCTYPE html>
<?php $thisPage="Bingocard"; ?>

<html>

<head>
<meta charset="utf-8" />
<title>Bugs Bunny's Bingocard</title>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.7.1/jquery-ui.min.js"></script>
<script src="overlay.js"></script>
<link rel="stylesheet" type="text/css" media="screen, print" href="http://yui.yahooapis.com/3.3.0/build/cssreset/reset-min.css" />
<link rel="stylesheet" href="bingo.css" />
</head>

<body>


<?php include("navigation.php"); ?>

<section class="page">
	<h1>Bugs Bunny's Bingo Card</h1>

		<section class="bingocard">
		<ul>
			<li>
				<ul class="abc">
					<li class="droppable"><a class="popup" id="A" href="./visit_form.htm" title="Enter Visit Information" >A</a></li>
					<li><a class="popup" id="B" href="./visit_form.htm" title="Enter Visit Information" >B</a></li>
					<li><a class="popup" id="C" href="./visit_form.htm" title="Enter Visit Information" >C</a></li>
					<li><a class="popup" id="D" href="./visit_form.htm" title="Enter Visit Information" >D</a></li>
					<li><a class="popup" id="E" href="./visit_form.htm" title="Enter Visit Information" >E</a></li>
					<li><a class="popup" id="F" href="./visit_form.htm" title="Enter Visit Information" >F</a></li>
					<li><a class="popup" id="G" href="./visit_form.htm" title="Enter Visit Information" >G</a></li>
					<li><a class="popup" id="H" href="./visit_form.htm" title="Enter Visit Information" >H</a></li>
					<li><a class="popup" id="I" href="./visit_form.htm" title="Enter Visit Information" >I</a></li>
				</ul>
			</li>

			<li>
				<ul class="abc">
					<li><a class="popup" id="J" href="./visit_form.htm" title="Enter Visit Information" >J</a></li>
					<li><a class="popup" id="K" href="./visit_form.htm" title="Enter Visit Information" >K</a></li>
					<li><a class="popup" id="L" href="./visit_form.htm" title="Enter Visit Information" >L</a></li>
					<li><a class="popup" id="M" href="./visit_form.htm" title="Enter Visit Information" >M</a></li>
					<li><a class="popup" id="N" href="./visit_form.htm" title="Enter Visit Information" >N</a></li>
					<li><a class="popup" id="O" href="./visit_form.htm" title="Enter Visit Information" >O</a></li>
					<li><a class="popup" id="P" href="./visit_form.htm" title="Enter Visit Information" >P</a></li>
					<li><a class="popup" id="Q" href="./visit_form.htm" title="Enter Visit Information" >Q</a></li>
					<li><a class="popup" id="R" href="./visit_form.htm" title="Enter Visit Information" >R</a></li>
				</ul>
			</li>
			
			<li>
				<ul class="abc">
					<li><a class="popup" id="S" href="./visit_form.htm" title="Enter Visit Information" >S</a></li>
					<li><a class="popup" id="T" href="./visit_form.htm" title="Enter Visit Information" >T</a></li>
					<li><a class="popup" id="U" href="./visit_form.htm" title="Enter Visit Information" >U</a></li>
					<li><a class="popup" id="V" href="./visit_form.htm" title="Enter Visit Information" >V</a></li>
					<li><a class="popup" id="W" href="./visit_form.htm" title="Enter Visit Information" >W</a></li>
					<li><a class="popup" id="X" href="./visit_form.htm" title="Enter Visit Information" >X</a></li>
					<li><a class="popup" id="Y" href="./visit_form.htm" title="Enter Visit Information" >Y</a></li>
					<li><a class="popup" id="Z" href="./visit_form.htm" title="Enter Visit Information" >Z</a></li>
					<li id="draggable">*</li>
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
					<li>75% complete</li>
					<li class="subheading">Rank:</li>
					<li>Overall: #2</li>
					<li>Italian: #2</li>
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