<?php
    session_start();
    //session_destroy();
   // session_start();
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>familiarisation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>			
			<h1>Familiarisation</h1>
			<div id="centered_content" style="width: 1000px;margin-left: auto ;margin-right: auto ; " >
			<table align = "center" width = "1000" height = "450">
				<tr>					
					<td colspan = "3" style="font-size:4" align = "left">
						&nbsp;&nbsp;Cet extrait va vous permettre de vous familiariser avec le robot NINA et l’interface d’évaluation. Le son a été enregistré dans les conditions réelles et reflète le bruit ambiant produit par les moteurs et ventilateurs du robot.
						<br><br/>&nbsp;&nbsp;A chaque fois que vous pressez la touche <b>ENTREE/ENTER</b> pour signaler un comportement inadéquat, la barre sous la vidéo passe en jaune et le nombre de signalisations est incrémenté de 1.					
					</td>
				</tr>
				<tr>
					<td width="30%">
					</td>
					<td width="40%" align = "center">
						<video id = "myVideo" type="video" width="254" height="288" controls > 
						<source src="video/video_short_20s.mp4" type="video/mp4">			  
			
						Your browser does not support the video tag.
						</video>
						<br/>
						<table border="1" width="400" height ="30" >
							<tr>
								<td>
									<div id ="rate_count" align = "center" >
										ENTER
									</div>
								</td>
							</tr>
						</table>
					</td>
					<td width="30%" align="left" valign="center">
						<div id = "notice">							
						</div>
					</td>
				</tr>
				<tr>
					<td colspan = "3">
						<table>
							<tr>
								<td colspan = "2">
									<div id = "notice_1">
										
									</div>

								</td>
								<td>
									<form class="pure-form pure-form-aligned" name="rat_ques" method="POST" action="rate_click.php"> 
									<div align = "right" class="pure-controls"> <button id = "suivant" type="submit" class="btn" id="validate_bt" value="Save" name="save" >SUIVANT</button> </div>
									</form>
								</td>
							</tr>
						</table>
					</td>
				</tr>

			</table>
		</div>
				<script>
					var number_click_rate = 0;
					document.getElementById("rate_count").innerHTML = '<font size="5"> ENTER = '+ number_click_rate +'</font>';	
					document.getElementById('notice').innerHTML='<font size="4" color="red"><BR>Vous pouvez rejouer la vidéo autant de fois que nécessaire.</BR><BR>Merci d\'ajuster le niveau sonore pour un bon confort d´écoute.</BR></font>';
										
				</script>
				</center>
				<center>

				<script>
					var str_notice = '<font size="4" color="red">VOUS ÊTES PRÊT ? Merci de cliquer sur le bouton SUIVANT pour évaluer <br> la vidéo complète. ====></font>';
					var mark_play = 0;
					var mark_enter = 0;
					var mark_do_one = 0;
					var vid = document.getElementById("myVideo");
					vid.onplaying = function() {
						mark_play = 1;
					     if (mark_enter == 1)
					     {
							document.getElementById('suivant').style.visibility = 'visible'; 
							document.getElementById('notice').innerHTML='<font size="4" color="red"><BR>Merci d\'ajuster le niveau sonore pour un bon confort d\´écoute. <BR/><BR>Quand vous êtes prêt, lancez le vrai test en cliquant SUIVANT<BR/></font>';
							document.getElementById('notice_1').innerHTML=str_notice;
   				         }
						else
						{
							document.getElementById('notice').innerHTML='<font size="4" color="red"><BR>Merci d\'ajuster le niveau sonore pour un bon confort d\´écoute.<BR/><BR>Merci de tester la touche ENTREE/ENTER pour tester l\'évaluation.<BR/></font>';
						}
					};
					document.onkeydown=function(evt){
					var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
					if(keyCode == 13)
					{
						 //var myVideo = document.getElementById("myVideo");
					     //myVideo.play();

						 number_click_rate = number_click_rate + 1;
						 var change = document.getElementById("rate_count");
						 document.getElementById("suivant").disabled = false;
						 change.innerHTML = '<font size="5"> ENTER = '+ number_click_rate +'</font>';
						 change.style.backgroundColor = "yellow";  
						if (mark_do_one == 0)
						{
						 mark_enter = 1;
						 if (mark_play == 1)
					     {
						    document.getElementById('suivant').style.visibility = 'visible';
   				        	document.getElementById('notice').innerHTML='<font size="4" color="red"><BR>Avec la touche entrée, la barre de comptage est passée en JAUNE.<BR/><BR>Vous pouvez lancer le vrai test en cliquant SUIVANT<BR/></font>';
							document.getElementById('notice_1').innerHTML=str_notice;	
					     }
						 else
						 {
							document.getElementById('notice').innerHTML='<font size="4" color="red"><BR>Avec la touche entrée, la barre de comptage est passée en JAUNE.<BR/><BR>Merci de lancer la vidéo et d\'ajuster le niveau sonore pour un bon confort d\'écoute.<BR/></font>';
						 }
							mark_do_one =1;
						}

					}
					}

				</script>
				<br/>

				<br/>
			
		<script>
			//document.getElementById("suivant").disabled = true;
			document.getElementById('suivant').style.visibility = 'hidden';
		</script>	
	
</body>
</html>

