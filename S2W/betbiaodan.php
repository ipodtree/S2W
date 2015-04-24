<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="CSS\dataPages.css" />
  
  <style>
  
  .footer{
	  margin-top: 680px;
	}
  
  </style>
  
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  
  
        <?php include("menu.php");
			session_start();		
			?>
		
		
		<div class="wrapper">
		
			<div class="block4">
				<form action="" method="post" name="form1" enctype="multipart/form-data">
			    <table width="405" height="24" cellpadding="1" cellspacing="1">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="3">
						Choose two teams that you want to predict
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team 1:</td>
						<td height="25" colspan="2" align="center">
						   <select name="team5_1">
							<option value="METZ">Metz</option>
							<option value="BASTIA">Bastia</option>
							<option value="RENNES">Rennes</option>
							<option value="AUXERRE">Auxerre</option>
							<option value="LE HAVRE">Le Havre</option>
							<option value="MONTPELLIER">Montpellier</option>
							<option value="MARSEILLE">Marseille</option>
							<option value="BORDEAUX">Bordeaux</option>
							<option value="TOULOUSE">Toulouse</option>
							<option value="PARIS-SG" selected>Paris-SG</option>
							<option value="SOCHAOX">Sochaox</option>
							<option value="LENS">Lens</option>
							<option value="MONACO">Monaco</option>
							<option value="NANTES">Nantes</option>
							<option value="LYON">Lyon</option>
							<option value="NANCY">Nancy</option>
							<option value="LORIENT">Lorient</option>
							<option value="LILLE">Lille</option>
							<option value="REIMS">Reims</option>
							<option value="CROIX-SAVOIE">Croix-Savoie</option>
							<option value="AC-AJACCIO">AC-Ajaccio</option>
							<option value="VALENCIENNES">Valenciennes</option>
							<option value="GUINGAMP">Guingamp</option>
							<option value="ST-ETIENNE">ST-Etienne</option>
							</select></td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team 2:</td>
						<td height="25" colspan="2" align="center">
						 <select name="team5_2">
							<option value="METZ">Metz</option>
							<option value="BASTIA">Bastia</option>
							<option value="RENNES">Rennes</option>
							<option value="AUXERRE">Auxerre</option>
							<option value="LE HAVRE">Le Havre</option>
							<option value="MONTPELLIER">Montpellier</option>
							<option value="MARSEILLE">Marseille</option>
							<option value="BORDEAUX">Bordeaux</option>
							<option value="TOULOUSE">Toulouse</option>
							<option value="PARIS-SG" selected>Paris-SG</option>
							<option value="SOCHAOX">Sochaox</option>
							<option value="LENS">Lens</option>
							<option value="MONACO">Monaco</option>
							<option value="NANTES">Nantes</option>
							<option value="LYON">Lyon</option>
							<option value="NANCY">Nancy</option>
							<option value="LORIENT">Lorient</option>
							<option value="LILLE">Lille</option>
							<option value="REIMS">Reims</option>
							<option value="CROIX-SAVOIE">Croix-Savoie</option>
							<option value="AC-AJACCIO">AC-Ajaccio</option>
							<option value="VALENCIENNES">Valenciennes</option>
							<option value="GUINGAMP">Guingamp</option>
							<option value="ST-ETIENNE">ST-Etienne</option>
							</select></td>
					</tr>
					
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="3">
						<input type="submit" name="submit1" value="Submit">
						<input type="reset" name="submit2" value="Reset">
						
						<?php
							if ( isset( $_SESSION['user'] ) )
							{
						?>
						<input type="button" onclick="window.location.href='betmodule2.php'" value="Show">
						<?php
							}
							else
							{
						?>
						<input type="button" onclick="window.location.href='betmodule.php'" value="Show">
						<?php
							}
						?>
						
						</td>
					</tr>
					
				</table>
				
		<div class="submit1">
		  </form>
		      <?php
						
						if($_POST["submit1"]=="Submit"){
						echo '<br />';
						echo "Your request for Team1:&nbsp;".$_POST["team5_1"]."&nbsp;/&nbsp;Team2:&nbsp;".$_POST["team5_2"]."&nbsp;&nbsp;is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["team5_1"]=$_POST["team5_1"];
						$_SESSION["team5_2"]=$_POST["team5_2"];						
						}
			?>
			</div>
		  </div> <!-- block4 -->

	    </div> <!-- wrapper -->

		<?php include("footer.php"); ?>
	
</body>

</html>
