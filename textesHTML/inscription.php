
<div id="formInscription">
	<h1>Inscription HeHLan</h1>
<form id="formID" class="formular" method="post" action="validformulaire.php">
	<fieldset>
		<legend>Profil</legend>
		<label for="pseudo">Pseudo :</label>
		<input type="text" name="pseudo" id="pseudo" ><br />
		<div id="pseudobox"></div>

		<label for="firstname">Nom :</label>
		<input type="text" name="firstname" id="firstname"><br />
	
		<label for="firstname">Prénom :</label>
		<input type="text" name="lastname" id="lastname"><br />

		<label for="datepicker">Date de naissance :</label>
		<input type="text" name="date" id="datepicker"><br />
	
		<label for="telephone">Téléphone :</label>
		<input type="text" name="telephone" id="telephone"><br />
		<label for="password">Mot de passe :</label>
		<input type="password" name="password" id="password"><br />
		<label for="password2">Confirmer mot de passe :</label>
		<input type="password" name="password2" id="password2"><br />
		<label for="email">Email :</label>
		<input type="text" name="email" id="email"><br />
		<label for="email2">Confirmer Email :</label>
		<input type="text" name="email2" id="email2" ><br />

		<label>Sexe :</label>
		<label for="radio_homme">Homme</label><input type="radio" id="radio_homme" name="sexe" class="sexe" value="h" checked/>
		<label for="radio_femme">Femme</label><input type="radio" id="radio_femme" name="sexe" class="sexe" value="f"/><br />
		<!--<div id="div_celibataire" style="display:none;">
			<label for="celibataire">Célibataire ?</label><input type="checkbox"  id="celibataire" name="celibataire" value="ohh yeah"><br />	
		</div>-->
	</fieldset>
	<fieldset>
		<legend>Jeux</legend>
		<input type="checkbox" name="tournois[]" id="LOL" value="1">League Of Legends<br />
		<div id="pseudoLOL" style="display:none;">
			<label for="pseudoLOL" style="padding-left: 40px; ">Votre pseudo à LOL :</label>
			<input type="text" name="pseudoLOL" id="VerifPseudoLOL" style="margin-left: -40px; ">
			<div id="pseudoboxLOL" style="padding-left: 250px; "></div>
		</div>
		<input type="checkbox" name="tournois[]" id="COD4" value="2">Call Of Duty 4<br />
		<input type="checkbox" name="tournois[]" id="TM" value="3">TrackMania<br />
		<input type="checkbox" name="tournois[]" id="HS" value="4">HearthStone
		<br />
	</fieldset>
	<fieldset id="equipe">
		<legend>Equipe</legend>
		
		<label for="wait">Rejoindre une team plus tard :</label><input type="radio" name="Equipe" value="wait" id="wait" checked /><br/>
		<label for="creer">Créer une Team :</label><input type="radio" name="Equipe" value="creer" id="creer" onClick="afficher();"><br/>		
		<label for="rejoindre">Rejoindre une Team :</label><input type="radio" name="Equipe" value="rejoindre" id="rejoindre" onClick="afficher_rejoindre();" /><br/>
		
		<div id="creerTeam" style="display:none;">
			<label for="Team">Nom de la team :</label>
			<input type="text" name="Team" id="Team"><br />
			
			<div id="pseudoboxTeam" style="border: none; margin: 0px; padding: 0px"></div>
			
			<label for="TagTeam">Tag de la team :</label>
			<input type="text" name="TagTeam" id="TagTeam"><br />
			<div id="pseudoboxTagTeam" style="border: none; margin: 0px; padding: 0px"></div>
				
			<label for="new_psw_equipe">Mot de passe : </label>
			<input type="password" name="new_psw_equipe" id="new_psw_equipe" /><br/>
			<label for="new_psw_equipe2">Confirmer mot de passe : </label>
			<input type="password" name="new_psw_equipe2" id="new_psw_equipe2" />
			
		</div>
		<div id="rejoindreTeam" style="display:none;">
			<label for="rejoindre_Team">Le nom de la team :</label>
			<select id="rejoindre_Team" name="nomequipe" style="min-width: 140px;">
			<?php			
			require_once("modules/connect.php");
			$query="SELECT id_equipes, nom FROM equipes ORDER BY nom";
			$requete_preparee=$connexion->prepare($query);
			$requete_preparee->execute();
			while($equipes=$requete_preparee->fetch(PDO::FETCH_ASSOC)) 
			{
				echo '<option value="'.$equipes["id_equipes"].'" style="color:#000"/>'.$equipes["nom"];
				echo "</option>";
			}
			?>
			
			</select><br />
			<label for="psw_equipe">Mot de passe :</label>
			<input type="password" name="psw_equipe" id="psw_equipe" ><br />
		</div>
	</fieldset>
	<fieldset>
	<legend>Conditions</legend>
	<div class="infos">En cochant la case ci-dessous, vous acceptez <a id="agreeReglement">les règlements de la HeHLan </a></div>
	<div id="tabReglement">
		<br />
		  <div id="tabsReglement" style="display:none; width: 700px; margin-left: -90px">
		    <ul>
		      <li><a href="#chartre"><span>Chartre de la HeHLan 2014</span></a></li>
		      <li><a href="#lol"><span>League Of Legends</span></a></li>
		      <li><a href="#cod"><span>Call Of Duty 4</span></a></li>
		      <li><a href="#hs"><span>HearthStone</span></a></li>
		      <li><a href="#tmn"><span>Trackmania</span></a></li>
		    </ul>
		    <div id="chartre">
		      <div class="media" style="width: 670px; margin: 0 auto;">
			  <iframe width="650px" height="800px" src="reglements/chartre.pdf"></iframe>
		      </div>
		    </div>
		    <div id="lol">
		      <div class="media" style="width: 670px; margin: 0 auto;">
			  <iframe width="650px" height="800px" src="reglements/ReglesLOL.pdf"></iframe>
		      </div>
		    </div>
		    <div id="cod">
		      <div class="media" style="width: 670px; margin: 0 auto;">
			  <iframe width="650px" height="800px" src="reglements/ReglesCOD.pdf"></iframe>
		      </div>
		    </div>
		    <div id="ut3">
		      <div class="media" style="width: 670px; margin: 0 auto;">
			  <iframe width="650px" height="800px" src="reglements/ReglesUT.pdf"></iframe>
		      </div>
		    </div>
		    <div id="tmn">
		      <div class="media" style="width: 670px; margin: 0 auto;">
			  <iframe width="650px" height="800px" src="reglements/ReglesTMN.pdf"></iframe>
		      </div>
		    </div>
		  </div>
	    
		
	      </div>
	<br>
		<span >J'accepte les conditions : </span>
		<input type="checkbox"  id="agree"  name="agree" value="agree"/>
		<div id='divCaptcha' style="margin-top: 20px;">
			<script type="text/javascript">
				var RecaptchaOptions = {
				   lang : 'fr',
				   theme : 'blackglass'
				};
			</script>
			<?php require_once('modules/recaptchalib.php');
			echo recaptcha_get_html("6Lch0ukSAAAAAGXw7YmpEF_VuRVpWBVioL1uhUgK"); ?>
			
		</div>
	</fieldset>
	<div id='erreurInsciption'></div>
	<br>
	<input id="submitInscription" type="submit" value="Valider l'inscription" />
</form>
</div>