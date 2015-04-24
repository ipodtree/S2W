<nav>	
	        <ul>
				<li> <a class ="nav active" href="index.php">Home</a> </li> 
				<li> <a class ="nav" href="biaodan.php">Match Data</a> </li>
				<li> <a class ="nav" href="biaodan2.php">Team Data</a> </li> 
				<li> <a class ="nav" href="#">Player Data</a> </li> 
				<li> <a class ="nav" href="#">Future Games</a> </li> 
				<li> <a class ="nav" href="#">Personalized data</a> </li>
				
				<li> <a class ="nav" href="betbiaodan.php">Bet Advices</a> </li> 
				<?php
					if ( isset( $_SESSION['user'] ) )
					{
				?>
				<li> <a class ="nav-right" href="login.php"> <img src="Img/account.png" alt="">My Account</a> </li> 
				<?php
					}
					else
					{
				?>
				<li> <a class ="nav-right" href="login.php"> <img src="Img/account.png" alt="">Se connecter</a> </li> 
				<?php
					}
				?>
			</ul>	
</nav>


		
		
		
