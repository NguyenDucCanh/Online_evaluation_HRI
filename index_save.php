<?php
    //session_start();
    //session_destroy();
    session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>Test perceptif</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<?php

	$_SESSION['time_start'] = (double)microtime(true);
	$_SESSION['n_click'] = 0;
	unset($_SESSION['data']);
	$_SESSION['data'] = array();
	
	unset($_SESSION['data_click']);
	$_SESSION['data_click'] = array();
	
	unset($_SESSION['data_question']);
	$_SESSION['data_question'] = array();

?>
	<h1>Evaluation du comportement multimodal du robot NINA</h1>
	<h2>Duc-Canh Nguyen, Frédéric Elisei & Gérard Bailly</h2>
	<p>{full-name}@gipsa-lab.grenoble-inp.fr</p>
	<div class="wrapper">

		<form class="formID" name="loginform" action="./about.php?" method="POST" style="width: 800px ;margin-left: auto ;margin-right: auto ;">
		<br/>  
		
		<p>Pour commencer, merci de remplir les informations suivantes, que nous garderons évidemment confidentielles. </p><br/>

			<div class="divdemog">
				<p class="pdemog">Nom : </p>
				<input type="text" name="username" value="" size="24" required />
			</div>


			<div class="divdemog">
				<p class="pdemog">Age : </p>
				<!--<input type="number" name="age" value="" size="2" required />-->
				<select name="age" required>
				  <option value="1">18-20</option>
				  <option value="2">21-30</option>
				  <option value="3">31-40</option>
				  <option value="4">41-50</option>
				  <option value="5">51-60</option>
				  <option value="6">60+</option>
				</select>
			</div>


			<div class="divdemog">
			<p class="pdemog">Sexe : </p>
				<select name="sex" required>
				  <option value="1">Homme</option>
				  <option value="2">Femme</option>
				</select>
			</div>
			
			<div class="divdemog">
			<p class="pdemog">Langue maternelle : </p>
				<select name="language" required>
				  <option value="1">Français</option>
				  <option value="2">Autre</option>
				</select>
			</div>

			<br/><br/>
			<div>
				<input class="btn" type="submit" value="Valider" />
			</div>	
	
	</form>
	</div>
	
	
</body>
</html>
