<?php
    session_start();
    //session_destroy();
   // session_start();
?>	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>Evaluation</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>			
			<h1 align = "center">Evaluation (avec la touche ENTER/ENTRÉE)</h1>
			<div id="centered_content" style="width: 1000px;margin-left: auto ;margin-right: auto ; " >
			<table align = "center" width = "1000" height = "450">
				<tr>
					<td align = "center" style="font-size:4">						
						<video id = "myVideo" type="video" width="260" height="295" autoplay> <!-- autoplay-->

							<source src="video/expe_Validation_Nina_RLRI_sujet4_resized_40Mo.mp4" type="video/mp4">	 
<!--
							<source src="video/video_short_20s.mp4" type="video/mp4">		  				
-->

							Your browser does not support the video tag.
						</video>
						<br/>
						<table border = "1" width="400" height ="30"  >
							<tr>
								<td>
									<div id ="rate_count" align = "center">
										ENTER
									</div>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td>
						<table border = "0" align = "center" style="font-size:4" >
							<tr>
								<td colspan = "2" align = "center">
									<br/>
									Merci d’évaluer toute la vidéo (<span id="duration">15</span> minutes restantes).
									<br/>
									
								</td>
							</tr>
							<tr> 
								<td align = "left">
									<div id = "notice">
									</div>
							<!--VOUS AVEZ FINI ? Merci de cliquer sur le bouton <b>Terminé</b> pour remplir un court questionnaire. -->
								</td>
								<td align = "right">
									<form class="pure-form pure-form-aligned" name="rat_ques" method="POST" action="rate_question.php"> 
									<div align = "right" class="pure-controls"> <button type="submit" class="btn" id="suivant" value="Save" name="save" >Terminé</button> </div>
									</form>
								</td>
							</tr>					
						</table>
					</td>
				</tr>
			</table>
		</div>

			<script>
				document.getElementById('notice').innerHTML='<font size="4">A la fin de la vidéo, vous pourrez cliquer sur le bouton <b>Terminé</b> pour remplir un court questionnaire.</font>';
				document.getElementById("notice").style.opacity = "0.5";
				var mark_play = 0;			  
				var vid = document.getElementById("myVideo");
				
					window.setInterval(function(){ 
					document.getElementById('duration').innerHTML=Math.floor((vid.duration-vid.currentTime)/60+0.5);
					
					},1000)
				vid.onplaying = function() {
					mark_play = 1;
					$.ajax({
					url:"start_video.php", //the page containing php script
					type: "POST", //request type
					success:function(result){				
					}
				});
				};
				
				vid.onended = function() {
					$.ajax({
					url:"done_video.php", //the page containing php script
					type: "POST", //request type
					success:function(result){				
					}
					});
					document.getElementById("suivant").disabled = false;		
					document.getElementById("suivant").style.opacity = "1.0";
					document.getElementById("notice").style.opacity = "1.0";
				}
			</script>
			

			<script>
				var number_click_rate = 0;
				document.getElementById("rate_count").innerHTML = '<font size="5"> ENTER = '+ number_click_rate +'</font>';	
				
			</script>

				</div>


				<script>
					document.onkeydown=function(evt){
					var keyCode = evt ? (evt.which ? evt.which : evt.keyCode) : event.keyCode;
					if(keyCode == 13) // bar space = 32; enter = 13
					{
						 number_click_rate = number_click_rate + 1;
						 var change = document.getElementById("rate_count");
						 change.innerHTML = '<font size="5"> ENTER = '+ number_click_rate +'</font>';	
						 change.style.backgroundColor = "yellow";  
						  $.ajax({
						    url:"click.php", //the page containing php script
						    type: "POST", //request type
						    success:function(result){
						   // alert(number_click_rate);
						    }
						  });
					}
					}

				</script>	
							
			<script>	
				document.getElementById("suivant").disabled = true;		
				document.getElementById("suivant").style.opacity = "0.5";
			</script>
</body>
</html>
