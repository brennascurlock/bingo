<header>
	
	<img id="logo" src="bingo_logo_small.png" />
	
	<h1>Restaurant Bingo</h1>
	<h2>Fun for Foodies</h2>

<nav>
	<ul>
		<li<?php if ($thisPage=="Home") 
                echo " id=\"currentpage\""; ?>><a href="index.php">Home</a></li>
		<li<?php if ($thisPage=="Leaderboard") 
                echo " id=\"currentpage\""; ?>><a href="leaderboard.php">Leaderboard</a></li>
		<li<?php if ($thisPage=="Restaurants") 
                echo " id=\"currentpage\""; ?>><a href="restaurants.php">Restaurants</a></li>
	</ul>
</nav>

</header>