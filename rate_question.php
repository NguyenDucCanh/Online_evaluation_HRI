<?php
    session_start();
    //session_destroy();
   // session_start();
     $_SESSION['time_start_question'] = (double)microtime(true);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>Questions</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>			
		<h1 align = "center">Questionnaire</h1>	
		<form class="pure-form pure-form-aligned" name="subj_cmt" method="POST" action="comments.php"> 
			<table class="tbl" align = "center" width = "1200" valign = "top">
				<tr>
					<td colspan="2" align = "left">Merci de donner <B>une réponse entre 1 et 5</B> pour les questions posées :
				</tr>
				<tr>
					<td>&nbsp;&nbsp;<td align = "left">1 correspondant à l'opinion dans la première colonne jaune (en gras)</td> 
				</tr>
				<tr>
					<td>&nbsp;&nbsp;<td align = "left">5 correspondant à l'opinion détaillée dans la colonne la plus à droite</td>		 
				</tr>
				<tr>
					<td>&nbsp;&nbsp;<td align = "left">2,3,4 correspondant à des jugements intermédiaires plus ou moins tranchés ou neutres</td>		 
				</tr>
			</table>
			</br>
			<table border = "1" class="tbl" align = "center" width = "1200" >
				<tr>
<!--
					<th class = "tbl_title" rowspan = "2" width = "12%" >Thèmes</th>
-->
					<th class = "tbl_title" colspan = "2" rowspan = "2" width = "50%">Questions</th>
					<th class = "tbl_title_question" colspan="7">Réponses</th>
				</tr>
				<tr>
					<td  class = "tbl_title_question" align = "right"></td>
					<td class = "tbl_title_question"><b>1</b></td>
					<td class = "tbl_title_question"><b>2</b></td>
					<td class = "tbl_title_question"><b>3</b></td>
					<td class = "tbl_title_question"><b>4</b></td>
					<td class = "tbl_title_question"><b>5</b></td>
					<td class = "tbl_title_question"  align = "left"></td>
				</tr>
				<tr >
					<td  class = "tbl_title" rowspan = "2"   >Utilisabilité</td>
					<td class = "tbl_question"   align = "left">Le robot s'est adapté à l'interlocuteur</td>
					<td  class = "tbl_score" align = "right"><b>Non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q1_mos"  /> </center>  </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="2" name="Q1_mos" /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="3" name="Q1_mos" required /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="4" name="Q1_mos" /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="5" name="Q1_mos" /> </center> </td>
					<td  class = "tbl_score"   align = "left"><b>Oui</b></td>
				</tr>
				<tr>
					<td class = "tbl_question"   align = "left">L'interlocuteur a dû s'adapter au robot</td>
					<td  class = "tbl_score"  align = "right"><b>Non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q2_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q2_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q2_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q2_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q2_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>Oui</b></td>
				</tr>
				<tr>
					<td  class = "tbl_title" rowspan = "3"  >Sécurité</td>
					<td class = "tbl_question"   align = "left">En présence du robot, vous vous sentiez</td>
					<td  class = "tbl_score"   align = "right"><b>Anxieux</b></td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="1" name="Q3_mos"  /> </center>  </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="2" name="Q3_mos" /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="3" name="Q3_mos" required /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="4" name="Q3_mos" /> </center> </td>
					<td  class = "tbl_score"  >  <center><input type="radio" value="5" name="Q3_mos" /> </center> </td>
					<td  class = "tbl_score"   align = "left"><b>Décontracté</b></td>
				</tr>
				<tr>
					<td class = "tbl_question"   align = "left">En présence du robot, vous vous sentiez</td>
					<td  class = "tbl_score" align = "right"><b>En <br/>insécurité</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q4_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q4_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q4_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q4_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q4_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>En <br/>sécurité</b></td>
				</tr>
				<tr>
					<td class = "tbl_question"  align = "left">La vitesse du robot était adaptée et sécurisante</td>
					<td  class = "tbl_score" align = "right"><b>Non</b></td>
					<td  class = "tbl_score"  <center><input type="radio" value="1" name="Q5_mos"  /> </center>  </td>
					<td  class = "tbl_score"  <center><input type="radio" value="2" name="Q5_mos" /> </center> </td>
					<td  class = "tbl_score"  <center><input type="radio" value="3" name="Q5_mos" required /> </center> </td>
					<td  class = "tbl_score"  <center><input type="radio" value="4" name="Q5_mos" /> </center> </td>
					<td  class = "tbl_score"  <center><input type="radio" value="5" name="Q5_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>Oui</b></td>
				</tr>
				<tr>
					<td  class = "tbl_title">Impression</td>
					<td class = "tbl_question"   align = "left">L'interaction avec le robot vous a semblé</td>
					<td class = "tbl_score"  align = "right"><b>Désagréable</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q6_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q6_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q6_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q6_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q6_mos" /> </center> </td>
					<td  class = "tbl_score"   align = "left"><b>Agréable</b></td>
				</tr>
				<tr>
					<td class = "tbl_title" >Acceptabilité</td>
					<td class = "tbl_question"   align = "left">La conduite de l'interview par le robot était acceptable</td>
					<td  class = "tbl_score"  align = "right"><b>Non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q7_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q7_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q7_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q7_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q7_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>Oui</b></td>
				</tr>
                
                <tr>
					<td  class = "tbl_title" rowspan = "2"  >Attention</td>
					<td  class = "tbl_question"   align = "left">Le robot regardait son interlocuteur quand il s'adressait à lui</td>
					<td  class = "tbl_score"  align = "right"><b>Non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q8_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q8_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q8_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q8_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q8_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>Oui</b></td>
				</tr>
				<tr>
					<td  class = "tbl_question"   align = "left">Le robot regardait son interlocuteur quand ce dernier parlait</td>
					<td  class = "tbl_score"   align = "right"><b>Non</b></td>
					<td  class = "tbl_score" >  <center><input type="radio" value="1" name="Q9_mos"  /> </center>  </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="2" name="Q9_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="3" name="Q9_mos" required /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="4" name="Q9_mos" /> </center> </td>
					<td  class = "tbl_score" >  <center><input type="radio" value="5" name="Q9_mos" /> </center> </td>
					<td  class = "tbl_score"  align = "left"><b>Oui</b></td>
				</tr>
				<tr>
			</table>
		<br/>
		
		<center>		
				<div align = "center" class="pure-controls"> <button type="submit" class="btn" id="validate_ques" value="Rate_ques" name="rate_ques" >SUIVANT</button> </div>				
		</center>
		</form>
</body>
</html>
