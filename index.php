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

	       <?php

            $base_url = "/home/sonyag/";

                if (isset($_GET['dossier'])) {
                    $base_url = $base_url.$_GET['dossier'];
             }

            $dirs = scandir($base_url);

                foreach($dirs as $dir):?>

                <?php if (is_dir($base_url.$dir)){?>
                <?php if ($dir == "..") {?>

                    <div class="col-md-4 col-md-offset-1 border">
                        <a href="index.php"><?=$dir?></a><br>
                    </div>

                <?php } else {?>


                            <?php if (isset($_GET['dossier'])) {?>

                                <div class="col-md-4 col-md-offset-1 border2">
                                    <a href="index.php?dossier=<?=$_GET['dossier']?><?=$dir?>/"><?=$dir?></a><br>
                                </div>

                            <?php } else {?>
                                <div class="col-md-4 col-md-offset-1 border2">
                                     <a href="index.php?dossier=<?=$dir?>/"><?=$dir?></a><br>
                                </div>
                            <?php }?>

                <?php }?>
                <?php } else {?>

                    <div class="col-md-4 col-md-offset-1 border3">
                        <p><?=$dir;?></p>
                    </div>

                <?php }?>
                <?php endforeach;?>
        </div>

        </body>
    </html>