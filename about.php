<?php
    //session_start();
    //session_destroy();
    session_start();
	
	if(isset($_POST['username']))
	{	
	$_SESSION['username'] = '"'.$_POST['username'].'"';
	}
	
	if(isset($_POST['age']))
	{	
	$_SESSION['age'] = $_POST['age'];
	}
	
	if(isset($_POST['sex']))
	{	
	$_SESSION['sex'] = $_POST['sex'];
	}
	
	if(isset($_POST['language']))
	{	
	$_SESSION['language'] = $_POST['language'];
	}

    array_push($_SESSION['data'],array($_SESSION['username'],$_SESSION['age'],$_SESSION['sex'],$_SESSION['language']));
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" >
<head>
	<title>About</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="style_new.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
	<h1>Description de l'expérience</h1>
		<table  align = "center" valign = "top" width = "1000" height = "450" >
			<tr>
                <td style="font-size:4" align = "justify" valign = "top" >
					<BR>Bonjour,</BR>
					<BR>
					&nbsp;&nbsp;Vous allez regarder une vidéo montrant NINA, le robot humanoïde du GIPSA, conduisant l'entretien neuropsychologique d'une personne âgée.
					Cet entretien évalue la capacité de cette personne à mémoriser 16 mots piochés au hasard parmi 16 catégories sémantiques (un métier, un sport, un poisson, etc.) Les 16 mots sont&nbsp;: hareng, gilet, domino, jonquille, dentiste, groseille, cuivre, harpe, mésange, tilleul, judo, céleri, valse, rougeole, tabouret et géographie.
					</BR>

					<BR>
					&nbsp;&nbsp;Le test comprend normalement 5 phases.
					Nous allons jouer ici les trois premières&nbsp;: l'apprentissage des mots 4 par 4, leur rappel indicé immédiat (retrouver le mot à partir de sa catégorie) et les trois essais successifs de rappel libre et indicé.
					Un exercice de comptage de nombres à l'envers est inséré entre chaque phase.

					<BR>
					&nbsp;&nbsp;Cet entretien s'inspire d'une interaction réelle&nbsp;:
					NINA essaie de reproduire le comportement d'un psychologue professionnel qui a réellement conduit l'entretien dans lequel vous allez être immergé.
					Nous testons ici la capacité de NINA à reproduire ce comportement interactif sans trop en altérer la pertinence.
					</BR>

					<BR>
					&nbsp;&nbsp;NINA est filmée du point de vue de la personne testée.
					Vous allez vous mettre à la place de cette personne i.e. entendre la voix de la personne et apprécier l'adéquation du comportement multimodal (voix, regard, gestes, etc) de NINA à la conduite de cet entretien.
					<B>Pour ceci, merci d'appuyer sur la touche ENTREE/ENTER à chaque fois que vous estimez que le comportement de NINA est inadéquat.</B>
					<!-- Vous indiquez ainsi au concepteur de NINA qu'il doit modifier son comportement à cet instant précis et participez donc à l'amélioration du dispositif. -->
					Ne pressez PAS sur ENTREE/ENTER si vous ne comprenez pas exactement ce que dit Nina : c'est le comportement que vous devez juger.</BR>

					<BR>
					Nous vous demandons d'évaluer l'intégralité de l'extrait (14"38), merci.
					</BR>
					<BR/>Duc-Canh Nguyen, Frédéric Elisei & Gérard Bailly
					 <form class="formID" name="loginform" action="./test_scenario.php" method="POST" style="width: 800px ;margin-left: auto ;margin-right: auto ;">	  
						<div align = "right" >
							<input class="btn" type="submit" value="SUIVANT" />
						</div>	
					</form>
			</tr>
		</table>

</body>
</html>
