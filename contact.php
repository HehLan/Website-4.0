


<div id="contact">
    <h2>Nous contacter</h2>
    
    <div id="reponseContact" style="color: #f00; margin-left: 70px; font-size: medium;"></div> <br /><br />
    
    <form id="formContact" method="post" action="">
        
        <label for="nom">Nom : </label><input type="text" name="nom" id="nom" style="width: 300px; height: 20px;"/><br /><br />
        <label for="prenom">Prénom :</label><input type="text" name="prenom" id="prenom" style="width: 300px; height: 20px;"/><br /><br />
        <label for="pesudo" id="labelPseudo">Pseudo (facultatif) :</label><input type="text" name="pseudo" id="pseudo" style="width: 300px; height: 20px;"/><br /><br />
        <label>Email : </label><input type="text" name="email" id="email" style="width: 300px; height: 20px;"/><br /><br />
        <label>
            Votre message : <br />
            <textarea id="message" name="message" style="width: 600px; height: 200px; resize: none;"></textarea>
        </label>
        <input type="text" name="adresse" id="adresse" style="display: none;"/>
        <br /><br />
        <input type="submit" value="Envoyer" id="contactEnvoyer" style="width: 150px; height: 50px; cursor: pointer; font-weight: bold;"/>
        
    </form>
</div>