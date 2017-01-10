<!DOCTYPE html>
	<html>
    	<head>
  
      		<meta charset="utf-8">
  
      		<!-- css-->
      		<link rel="stylesheet" href="css/bootstrap.min.css">
      		<link rel="stylesheet" href="css/style.css">
		</head>
    
    	<body>
    		<header>
    			<nav>
    				<p class="nav">Accueil</p>
    			</nav>
    		</header>

    			<div class="container">

    				<div class="row">
    					<div class="col-md-2 col-md-offset-2 border">
    						<p>Images</p>
    					</div>
    					<div class="col-md-2 col-md-offset-4 border1">
    						<p>Musique</p>
    					</div>
    				</div>

						<div class="row">
    						<div class="col-md-2 col-md-offset-2 border2">
    							<p>Vidéo</p>
    						</div>

    						<div class="col-md-2 col-md-offset-4 border3">
    							<p>Document</p>
    						</div>
    					</div>

						<div class="row">
    						<div class="col-md-2 col-md-offset-2 border4">
    							<p>Téléchargement</p>
    						</div>

    						<div class="col-md-2 col-md-offset-4 border5">
    							<p>Corbeille</p>
    						</div>
    					</div>
    				</div>
    			</div>

    	</body>
	</html>

	<?php
        $adresse = "/home/sonyag"; //Adresse du dossier.
            if(isset($_GET['nom'])) //Si $_GET['nom'] existe.
            {
            if ($Fichier != "." && $Fichier != "..") 
            {
          $nom=''.$adresse.$_GET['nom'].'';
          unlink($nom);
          echo 'Le fichier "'.$_GET['nom'].'" a été éffacé !<p>';
                }
            } 
        $dossier = opendir($adresse); //Ouverture du dossier. 
        echo '<fieldset><legend>Liste des fichiers</legend><p>'; //Ouverture de fieldset 
        

        while ($Fichier = readdir($dossier)) //Affichage...
        {  
        if ($Fichier != "." && $Fichier != "..") 
        { 
          echo '<a href="voir_fichiers.php?nom='.$Fichier.'">Supprimer</a> => <a href='.$adresse.$Fichier.' target="_blank">'.$Fichier.'</a><p>'; 
            }
        }
        closedir($dossier); //Fermeture du dossier. 
        echo '<p></fieldset>'; //Fermeture du fieldset.
	?>