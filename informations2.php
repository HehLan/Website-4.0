<head><meta http-equiv="Content-Type" charset="utf-8"></head>
<body><div id="accordionInfo" class="informations" >
  
  <!--************************************************
                partie présentation
  **************************************************-->
  <h3 class="bigtitle" >Présentation</h3>
  <div id="tabPresentation">
    <?php require_once("textesHTML/presentation.html"); ?>
  </div>
  <!--************************************************
                partie informations pratiques
  **************************************************-->
  <h3 class="bigtitle">Informations Pratiques</h3>
  <div id="tabInfoPratique">
    <?php require_once("textesHTML/infoPratique.html"); ?>
    <h1>Localisation :</h1>
    <br /><p>
      ADRESSE :<br />
      Avenue Victor Maistriau 8a<br />
      7000 Mons, Belgique<br />
      </p>
    <br />
    <iframe src="modules/localisation.php" style="width: 700px; height: 620px;"></iframe>
  </div>
  
  
  <!--************************************************
                partie paiement
  **************************************************-->
  <h3>Paiement</h3>
  <div id="tabPaiement">
    <?php require_once("textesHTML/paiement.html"); ?>
  </div>
  
  
  <!--************************************************
                partie règlement intérieur
  **************************************************-->
  <h3>Règlement intérieur</h3>
  <div id="tabReglement">
      <!--<div id="tabsReglement">
        <div id="charte">
          <div class="media" style="width: 650px; margin: 0 auto;">
              <iframe width="630px" height="800px" src="reglements/charte.pdf"></iframe>
          </div>
        </div>
      </div>-->
	  <div id="charte">
		<?php require_once("textesHTML/Charte.html"); ?>
		</div>
  </div>
  <!--************************************************
                partie liste des joueurs
  **************************************************-->
  <h3>Liste des joueurs</h3>
  <div id="tabListeJoueurs">
	<p>Pas encore disponible...</p>
    <?php //require_once("modules/listeInscrits.php"); ?>
    
  </div>
</div>
</body>