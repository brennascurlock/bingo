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
