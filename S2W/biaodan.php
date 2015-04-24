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
			    <table width="404" height="24" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF">
					<tr align="center" bgcolor="#66CCFF">
						<td height="25" colspan="3">
						The score of different teams in a specific journey
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Year:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year">
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
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Journey:</td>
						<td height="25" colspan="2" align="center">
						<select name="journey">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							</select></td>
					</tr>
					
					<tr align="center" bgcolor="#FFFFFF">
						<td height="25" colspan="3" bgcolor="#66CCFF">
						<input type="submit" name="submit1" value="Submit">
						<input type="reset" name="submit2" value="Reset">
						<input type="button" onclick="window.location.href='module.php'" value="Show"></td>
					</tr>
					
				</table>
				
		  </form>
		  <div class="submit1">
		      <?php
						
						if($_POST["submit1"]=="Submit"){
						echo '<br />';
						echo "Your request for Year:&nbsp;".$_POST["year"]."&nbsp;/&nbsp;Journey:&nbsp;".$_POST["journey"]."&nbsp;&nbsp;is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["year"]=$_POST["year"];
						$_SESSION["journey"]=$_POST["journey"];						
						}
			?>
			</div> <!-- submit1 -->
		  </div> <!-- div block1 -->
		  
		  <div class="block2">
	      <form action="" method="post" name="form2" enctype="multipart/form-data">
			    <table width="400" height="24" cellpadding="1" cellspacing="1">
					<tr align="center" bgcolor="##66CCFF">
						<td height="25" colspan="8">
						The score rate comparison of three different periods
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Year 1:</td>
						<td height="25" colspan="2" align="center">
						    <select name="year2_1">
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
							
							<td height="25" align="center">Year 2:</td>
						    <td height="25" colspan="2" align="center">
						    <select name="year2_2">
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
							
							<td height="25" align="center">Year 3:</td>
							<td height="25" colspan="2" align="center">
						    <select name="year2_3">
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
					
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Journey:</td>
						<td height="25" colspan="2" align="center">
						<select name="journey2_1">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							</select></td>
							
						<td height="25" align="center">Journey:</td>
						<td height="25" colspan="2" align="center">
						<select name="journey2_2">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							</select></td>
							
						<td height="25" align="center">Journey:</td>
						<td height="25" colspan="2" align="center">
						<select name="journey2_3">
							<option value="1" selected>1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4" >4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
							<option value="11">11</option>
							<option value="12">12</option>
							<option value="13">13</option>
							<option value="14">14</option>
							<option value="15">15</option>
							<option value="16">16</option>
							<option value="17">17</option>
							<option value="18">18</option>
							<option value="19">19</option>
							<option value="20">20</option>
							<option value="21">21</option>
							<option value="22">22</option>
							<option value="23">23</option>
							<option value="24">24</option>
							<option value="25">25</option>
							<option value="26">26</option>
							<option value="27">27</option>
							<option value="28">28</option>
							<option value="29">29</option>
							<option value="30">30</option>
							<option value="31">31</option>
							<option value="32">32</option>
							<option value="33">33</option>
							<option value="34">34</option>
							<option value="35">35</option>
							<option value="36">36</option>
							<option value="37">37</option>
							<option value="38">38</option>
							</select></td>
					</tr>
					
					
					<tr align="center" bgcolor="#FFFFFF"> 
						<td height="25" colspan="8" bgcolor="#66CCFF">
						<input type="submit" name="submit3" value="Submit">
						<input type="reset" name="submit4" value="Reset">
						<input type="button" onclick="window.location.href='module2.php'" value="Show">
						</td>
					</tr>
					
					
				</table>
		  </form>
		  <div class="submit1">
		  <?php
						
						if($_POST["submit3"]=="Submit"){
						echo '<br />';
						echo "Your request for";
						echo '<br />';
						echo " Year [1]:&nbsp;".$_POST["year2_1"]."&nbsp;/&nbsp;Journey [1]:&nbsp;".$_POST["journey2_1"];
						echo '<br />';
						echo " Year [2]:&nbsp;".$_POST["year2_2"]."&nbsp;/&nbsp;Journey [2]:&nbsp;".$_POST["journey2_2"];
						echo '<br />';
						echo " Year [3]:&nbsp;".$_POST["year2_3"]."&nbsp;/&nbsp;Journey [3]:&nbsp;".$_POST["journey2_3"];
						echo '<br />';
						echo "is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["year2_1"]=$_POST["year2_1"];
						$_SESSION["year2_2"]=$_POST["year2_2"];
						$_SESSION["year2_3"]=$_POST["year2_3"];
						$_SESSION["journey2_1"]=$_POST["journey2_1"];
						$_SESSION["journey2_2"]=$_POST["journey2_2"];
						$_SESSION["journey2_3"]=$_POST["journey2_3"];						
						}
			?>
			</div>
		  </div> <!-- block2 -->
		
			<div class="block3">
				<form action="" method="post" name="form3" enctype="multipart/form-data">
			    <table width="404" height="24" cellpadding="1" cellspacing="1" bordercolor="#FFFFFF">
					<tr align="center" bgcolor="#66CCFF">
						<td height="25" colspan="3">
						The history combat of these two teams
						</td>
					</tr>
					<tr bgcolor="#FFFFFF">
						<td height="25" align="center">Team1:</td>
						<td height="25" colspan="2" align="center">
						   <select name="team4_1">
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
						<td height="25" align="center">Team2:</td>
						<td height="25" colspan="2" align="center">
						 <select name="team4_2">
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
					
					<tr align="center" bgcolor="#FFFFFF">
						<td height="25" colspan="3" bgcolor="#66CCFF">
						<input type="submit" name="submit5" value="Submit">
						<input type="reset" name="submit6" value="Reset">
						<input type="button" onclick="window.location.href='module6.php'" value="Show"></td>
					</tr>
					
				</table>
				
		  </form>
		  <div class="submit1">
		      <?php
			  
						
						if($_POST["submit5"]=="Submit"){
						echo '<br />';
						echo "Your request for Team1:&nbsp;".$_POST["team4_1"]."&nbsp;/&nbsp;Team2:&nbsp;".$_POST["team4_2"]."&nbsp;&nbsp;is submitted !";
						echo '<br />';
						echo "Please click the 'Show' button.";
						$_SESSION["team4_1"]=$_POST["team4_1"];
						$_SESSION["team4_2"]=$_POST["team4_2"];						
						}
			?>
			</div> <!-- submit -->
			</div> <!-- block3  -->
			
	    </div> <!-- div wrapper -->
		
		<?php include("footer.php"); ?>
		 
	
</body>

</html>
