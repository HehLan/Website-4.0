<?php
session_start();
require_once('modules/connexion/classAuth.php');

?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" charset="utf-8">
	<title>HEHLan</title>
	<meta name="Description" content="HEH Lan Party au sein de l'ISIMS par les 1ere Master ingénieur en informatique, à Mons" lang="fr">
	<meta name="keywords" content="HEH, LAN, party, isims, lol, league of legend" lang="fr">
	<?php
		if(isset($_GET['page'])){
			if($_GET['page'] == "Profil"){
			echo'<META NAME="robots" CONTENT="none">';
			}
		}
	?>
	
	<!--<link rel="icon" type="image/gif" href="img/HEH_LOGO.GIF" >-->
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
        <div id="login">            
        </div>
 	</div>
 	<div id="content">
        <div id="navigation">
            <div id="nav-left"></div>
            <div id="nav-center">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <?php
		    if (!Auth::isLogged()){
			echo '<li><a href="index.php?page=inscription.php#bloc2">Inscription</a></li>';
		    }
		    ?>
                    <li><a href="index.php?page=informations.php#bloc2">Informations</a></li>
		    <li><a href="index.php?page=games.php#bloc2">Jeux</a></li>
		    <li><a href="index.php?page=sponsors.php#bloc2">Sponsors</a></li>
		    <li><a href="index.php?page=galerie.php#bloc2">Galerie</a></li>
		    <?php
		    if (Auth::isLogged()){
			
			if (!Auth::isAllow(3)){
			    
			    echo'<li><a href="index.php?page=contact.php#bloc2">Contact</a></li>';
			}
		    }else echo'<li><a href="index.php?page=contact.php#bloc2">Contact</a></li>';
		    ?>
		    <?php
		    if (Auth::isLogged()){
			
			if (Auth::isAllow(5)){
			    
			    echo '<li id="MenuProfil"><a href="index.php?page=Profil#bloc2">Mon profil</a></li>';
			}
			if (Auth::isAllow(3)){
			    
			    echo '<li><a href="admin.php#bloc2">Administration</a></li>';
			}
		    }
		    ?>
		    
                </ul>
            </div>
            <div id="nav-right"></div>
            <!--<div id="submenu">
                <h2>Le sous-menu</h2>
            </div>-->
        </div>
        <div id="bloc1">
            <div id="bloc1-left">
                <div id="latest-news">
                    <div id="titre-news">
                        <a href="#" title="Voir toutes les actualités">
                            <img src="img/news.png" alt="news">
                            <h2>LAST <span style="color:#1ACDFF">NEWS</span></h2>
                        </a>
                    </div>
                    <div id="news-content">
                        <?php require_once("textesHTML/news.html"); ?>

                    </div>
                </div>
            </div>
            <div id="bloc1-slider">
                <div id="bg" style="background: #000;">
                <?php
                    //inclusion du slider
                    require_once('rhinoslider/slider.php');
                ?>
                </div>
            </div>
        </div>
        <div id="bloc2">
            <div id="left-fondu"></div>
            <div id="left-panel">
                <!-- Inclusion du contenu dynamique -->
                <?php 
                    if(isset($_GET['page'])){
                        if($_GET['page'] == "informations.php")
                            require_once("informations.php");
                        else if($_GET['page'] == "galerie.php")
                            require_once("galerie.php");
			else if($_GET['page'] == "games.php")
				require_once("games.php");
                        else if($_GET['page'] == "contact.php")
                            require_once("contact.php");
			else if($_GET['page'] == "inscription.php")
                            require_once("inscription.php");
			else if($_GET['page'] == "sponsors.php")
                            require_once("sponsors.php");
			else if($_GET['page'] == "Profil"){
                            if (Auth::isLogged()){
				
				if (Auth::isAllow(5)){
				    
				    require_once("ModifProfil.php");
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
            <div id="right-panel">
                <div id="sponsors">
                    <h3>Sponsors</h3>
                    <?php require_once("rhinoslider/sponsorSlide.php"); ?>
		    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2Fhehlan&amp;width=200&amp;height=258&amp;colorscheme=dark&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false"
			    scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:258px;" allowTransparency="true"></iframe>
                </div>
                <!--<div id="partenaires">
                    <h3>partenaires</h3>
                </div>-->
            </div>
            <div id="right-fondu"></div>
            <div class="clear"></div>
        </div>
 	</div>
    <div id="footer">
        <div id="about"><p>HEHLan All Rights Reserved 'Copyright' 2014</p></div>
        <div id="nothinghere"><img src="img/logo3.png" alt="CEHECOFH"></div>
        <div id="social"><img src="img/logo4.png" alt="HeH"></div>
    </div>
</body>
</html>