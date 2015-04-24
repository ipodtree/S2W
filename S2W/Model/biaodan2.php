<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="CSS\dataPages.css" />
</head>

<body style="font-family: 'Open Sans', sans-serif;">
  
  
        <?php include("menu.php");
			session_start();		
			?>
		
		
		<div class="wrapper">
		<div class="block1">
	      <form action="" method="post" name="form1" enctype="multipart/form-data">
			    <table width="404" height="24" cellpadding="1" cellspacing="1">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="3">
						The score trend of a specific team in a specific year
						</td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team:</td>
						<td height="25" colspan="2" align="center">
						<select name="team">
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
						<td height="25" align="center">Year:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year3">
							<option value="1993" selected>1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							</select></td>
					</tr>
					
					
					
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="3">
						<input type="submit" name="submit1" value="Submit">
						<input type="reset" name="submit2" value="Reset">
						<input type="button" onclick="window.location.href='module3.php'" value="Show"></td>
					</tr>
					
				</table>
				
		  </form>
		  <div class="submit1">
		  <?php
						
						if($_POST["submit1"]=="Submit"){
						echo '<br />';
						echo "Your request for Team:&nbsp;".$_POST["team"]."&nbsp;/&nbsp;Year:&nbsp;".$_POST["year3"]."&nbsp;&nbsp;is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["year3"]=$_POST["year3"];
						$_SESSION["team"]=$_POST["team"];						
						}
			?>
			</div> <!-- submit -->
		  </div> <!-- block1 -->
		
		 <div class="block5">
	      <form action="" method="post" name="form2" enctype="multipart/form-data">
			    <table width="100" height="24" cellpadding="1" cellspacing="1">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="8">
						The performance comparison of three teams in a specific year
						</td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team:</td>
						<td height="25" colspan="2" align="center">
						<select name="team2_1">
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
							
							<td height="25" align="center">Team:</td>
							<td height="25" colspan="2" align="center">
							<select name="team2_2">
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
							
							<td height="25" align="center">Team:</td>
							<td height="25" colspan="2" align="center">
							<select name="team2_3">
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
						<td height="25" align="center">Year:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year4_1">
							<option value="1993" selected>1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							</select></td>
				
						<td height="25" align="center">Year:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year4_2">
							<option value="1993" selected>1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							</select></td>
				
						<td height="25" align="center">Year:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year4_3">
							<option value="1993" selected>1993</option>
							<option value="1994">1994</option>
							<option value="1995">1995</option>
							<option value="1996">1996</option>
							<option value="1997">1997</option>
							<option value="1998">1998</option>
							<option value="1999">1999</option>
							<option value="2000">2000</option>
							<option value="2001">2001</option>
							<option value="2002">2002</option>
							<option value="2003">2003</option>
							<option value="2004">2004</option>
							<option value="2005">2005</option>
							<option value="2006">2006</option>
							<option value="2007">2007</option>
							<option value="2008">2008</option>
							<option value="2009">2009</option>
							<option value="2010">2010</option>
							<option value="2011">2011</option>
							<option value="2012">2012</option>
							<option value="2013">2013</option>
							<option value="2014">2014</option>
							</select></td>
					</tr>
					
					
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="8">
						<input type="submit" name="submit3" value="Submit">
						<input type="reset" name="submit4" value="Reset">
						<input type="button" onclick="window.location.href='module4.php'" value="Show"></td>
					</tr>
					
				</table>
				
		  </form>
		  
			<div class="submit2">
		      <?php
						
						if($_POST["submit3"]=="Submit"){
						echo '<br />';
						echo "Your request for";
						echo '<br />';
						echo "Team [1]:&nbsp;".$_POST["team2_1"]."&nbsp;/&nbsp;Year [1]:&nbsp;".$_POST["year4_1"];
						echo '<br />';
						echo "Team [2]:&nbsp;".$_POST["team2_2"]."&nbsp;/&nbsp;Year [2]:&nbsp;".$_POST["year4_2"];
						echo '<br />';
						echo "Team [3]:&nbsp;".$_POST["team2_3"]."&nbsp;/&nbsp;Year [3]:&nbsp;".$_POST["year4_3"];
						echo '<br />';
						echo "is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["year4_1"]=$_POST["year4_1"];
						$_SESSION["year4_2"]=$_POST["year4_2"];
						$_SESSION["year4_3"]=$_POST["year4_3"];
						
						$_SESSION["team2_1"]=$_POST["team2_1"];	
						$_SESSION["team2_2"]=$_POST["team2_2"];	
						$_SESSION["team2_3"]=$_POST["team2_3"];						
						}
			?>
			</div>
		  </div> <!-- block2 -->
			
		  <div class="block3">
	      <form action="" method="post" name="form3" enctype="multipart/form-data">
			    <table width="404" height="24" cellpadding="1" cellspacing="1">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="3">
						The performance trend of a specific team over the past years
						</td>
					</tr>
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team:</td>
						<td height="25" colspan="2" align="center">
						<select name="team3">
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
						<input type="submit" name="submit5" value="Submit">
						<input type="reset" name="submit6" value="Reset">
						<input type="button" onclick="window.location.href='module5.php'" value="Show"></td>
					</tr>
					
				</table>
				
		  </form>
		  <div class="submit1">
		  <?php
						
						if($_POST["submit5"]=="Submit"){
						echo '<br />';
						echo "Your request for Team:&nbsp;".$_POST["team3"]."&nbsp;&nbsp;is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["team3"]=$_POST["team3"];						
						}
			?>
			</div>
		  </div> <!-- block3 -->
		  
	    </div> <!-- wrapper -->
		
		<?php include("footer.php"); ?>
		 
	
</body>

</html>
