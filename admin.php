<?php
session_start();
require_once('modules/connexion/classAuth.php');

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>HEHLan</title>
	<META NAME="robots" CONTENT="none">
	
	<link rel="icon" href="img/logoheh.ico" >
    <link rel="stylesheet" href="css/main.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
    <link rel="stylesheet" href="photos-fancybox/fancybox/source/jquery.fancybox.css?v=2.1.5" type="text/css" media="screen" >
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <link rel="stylesheet" href="photos-fancybox/fancybox/source/helpers/jquery.fancybox-buttons.css" type="text/css" media="screen" >
    <link rel="stylesheet" href="photos-fancybox/fancybox/source/helpers/jquery.fancybox-thumbs.css" type="text/css" media="screen" >
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery-ui.js" type="text/javascript"></script>
    <script src="js/jquery.media.js" type="text/javascript"></script>
    <script src="js/main.js" type="text/javascript"></script>
    <script src="js/menu.js" type="text/javascript"></script>
    <script type="text/javascript" src="photos-fancybox/fancybox/source/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="photos-fancybox/fancybox/source/helpers/jquery.fancybox-buttons.js"></script>
    <script type="text/javascript" src="photos-fancybox/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script type="text/javascript" src="photos-fancybox/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
    <script type="text/javascript" src="photos-fancybox/fancybox/lib/jquery.mousewheel-3.0.6.pack.js"></script>
    <?php require_once('rhinoslider/requiredSlide.html'); ?>
</head>

<body style="background-color: #000;">

	<div id="top">
		<div id="top-content">
            <div id="top-left">
                <p><!--Bienvenue sur HEHLan--></p>
            </div>
            <div id="top-right"><p><?php require_once("modules/connexion/zoneConnexion.php"); ?></p></div>
        </div>
	</div>
 	<div id="header">
		<div id="banner">
		    <a href="index.php">
		    <img src="img/logoheh.png" alt="HEHLan" width="500px">
		    </a>
		</div>
        
 	</div>
 	<div id="content">
        <div id="navigation">
            <div id="nav-left"></div>
            <div id="nav-center">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    
		    <?php
		    if (Auth::isLogged()){
			if (Auth::isAllow(3)){
			    
			    echo '<li><a href="admin.php?page=equipes#bloc2">Equipes</a></li>';
			}
			if (Auth::isAllow(3)){
			    
			    echo '<li><a href="admin.php?page=Joueurs#bloc2">Joueurs</a></li>';
			}
			if (Auth::isAllow(3)){
			    
			    echo '<li><a href="admin.php?page=InscripTournois#bloc2">Inscripion tournois</a></li>';
			}
			if (Auth::isAllow(3)){
			    
			    echo '<li><a href="admin.php?page=Payements#bloc2">Payements</a></li>';
			}
			
			if (Auth::isAllow(5)){
			    
			    echo '<li id="MenuProfil"><a href="admin.php?page=Profil#bloc2">Mon profil</a></li>';
			}
			
		    }
		    ?>
                </ul>
            </div>
            
        </div>
        
        <div id="bloc2" style="background: url('img/bgAdmin.jpg');">
            
            <div id="left-panel" style="width: 95%; background: none;">
                <!-- Inclusion du contenu dynamique -->
                <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "Profil"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(5)){
				    
				    require_once("ModifProfil.php");
				}
				else echo"Vous n'êtes pas autorisé à accéder à cette page";
			    }
			    else echo"Vous n'êtes pas connecté pour accéder à cette page";
			}
			else if($_GET['page'] == "InscripTournois"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(3)){
				    
				    require_once("admin/JoueursEquipesTournois.php");
				}
				else echo"Vous n'êtes pas autorisé à accéder à cette page";
			    }
			    else echo"Vous n'êtes pas connecté pour accéder à cette page";
			}
			else if($_GET['page'] == "Joueurs"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(3)){
				    
				    require_once("admin/joueurAdmin.php");
				}
				else echo"Vous n'êtes pas autorisé à accéder à cette page";
			    }
			    else echo"Vous n'êtes pas connecté pour accéder à cette page";
			}
			else if($_GET['page'] == "Payements"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(3)){
				    
				    require_once("admin/joueursPayes.php");
				}
				else echo"Vous n'êtes pas autorisé à accéder à cette page";
			    }
			    else echo"Vous n'êtes pas connecté pour accéder à cette page";
			}
			else if($_GET['page'] == "equipes"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(3)){
				    
				    require_once("admin/equipes.php");
				}
				else echo"Vous n'êtes pas autorisé à accéder à cette page";
			    }
			    else echo"Vous n'êtes pas connecté pour accéder à cette page";
			}
                        else 
                            require_once("textesHTML/accueil.html");

                    }else{
                        require_once("textesHTML/accueil.html");
                    }
                ?>
            </div>
            
        </div>
 	
    <div id="footer">
        <div id="about"><p>HEHLan All Rights Reserved 'Copyright' 2014</p></div>
        <div id="nothinghere"><img src="img/logo3.png" alt="CEHECOFH"></div>
        <div id="social"><img src="img/logo4.png" alt="HeH"></div>
    </div>
</body>
</html>