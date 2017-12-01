<?php
    session_start();		
	array_push($_SESSION['data_question'],$_POST['Q1_mos'],$_POST['Q2_mos'],$_POST['Q3_mos'],$_POST['Q4_mos'],$_POST['Q5_mos'],$_POST['Q6_mos'],$_POST['Q7_mos'],$_POST['Q8_mos'],$_POST['Q9_mos']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
    <head>
        <title>Des Remarques?</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="style_new.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
	<h1>Validation éxperience</h1>
	<div class="wrapper">
		<div class="header_bg">
			<!--<div align="center" class="header_font1">
				<p class="header_font3">Evaluation perceptive de synthèses incrémentales</p>
				<p class="header_font3">Test perceptif </p>
				<p class="header_font2">Mael Pouget, GIPSA-lab </p>
			</div>-->
		</div>
		<div style="margin-left:15px;margin-right:25px">
			<form action="end.php" method="POST">
			<table border = "1" class="tbl" align = "center" width = "800" >
				<tr>
					<td  class = "tbl_question"   align = "left">Avez-vous participé à la première campagne d'évaluation:</td>
					<td  class = "tbl_score"   align = "right"><b>oui</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q10_mos" required /> </center>  </td>
					<td  class = "tbl_score"  align = "left"><b>non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q10_mos" /> </center> </td>				
				</tr>
			
			</table>
			<table>
				<tr>
					<p>Un avis sur cette expérience?</p>
					<textarea name="comment" style="font-family:Verdana, sans-serif;" rows="8" cols="45" placeholder="Merci de noter ici tous les commentaires qui vous viendraient à l'esprit, que ce soit à propos des sons, de la façon dont s'est déroulée l'expérience..."></textarea><br />
				</tr>
				<tr>
					<input class="btn" name = "submit" type="submit" value="Valider" />
				<tr>
			</table>
			</form>
		</div>	
    </body>
</html>
