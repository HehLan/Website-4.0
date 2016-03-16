<?php
require_once("connect.php");
class Auth {
    /***************************************************************************
     *      vérifie si l'utilisateur est connecté
     ***************************************************************************/
    static function isLogged() {
        if(isset($_SESSION['Auth'])&& isset($_SESSION['Auth']['pseudo'])&& isset($_SESSION['Auth']['password'])){
            global $connexion;
            $sql="SELECT pseudo, password FROM joueurs WHERE pseudo = :pseudo AND password = :mdp";
            
            $req = $connexion->prepare($sql);
            $req->execute(array(
                ':pseudo'=> $_SESSION['Auth']['pseudo'],
                ':mdp' => $_SESSION['Auth']['password']
            ));
            $joueur = $req->fetch();
            if(!empty($joueur)){
                // l'utilisateur a été trouvé dans la base de données
                return true;
            }
            else {
                //l'utilisateur a usurpé une session ses identifiants ne sont pas dans la BD
                return false;
            }
        }   
        else {
            //pas de données de session
            return false;
        }
    }
    
    
    
    /***************************************************************************
     *      vérifie si l'utilisateur est autorisé à accéder à la page
     *      si l'utilisateur a level :
     *          1 = super-admin
     *          2 = admin
     *          5 = membre
     ***************************************************************************/
    static function isAllow($levelPage){
        if(isset($_SESSION['Auth'])&& isset($_SESSION['Auth']['pseudo'])&& isset($_SESSION['Auth']['password'])){
            global $connexion;
            $sql="SELECT pseudo, password, level FROM joueurs WHERE pseudo = :pseudo AND password = :mdp";
            
            $req = $connexion->prepare($sql);
            $req->execute(array(
                ':pseudo'=> $_SESSION['Auth']['pseudo'],
                ':mdp' => $_SESSION['Auth']['password']
            ));
            $joueur = $req->fetch();
            if(!empty($joueur)){
                // l'utilisateur a été trouvé dans la base de données
                //$_SESSION['Auth']['level']=$joueur['level'];
                if ($joueur['level']<= $levelPage){
                    //l'utilisateur a le niveau requis pour accéder à la page
                    return true;
                }
                else {
                    //l'utilisateur n'est pas autorisé à accéder à la page (il n'a pas le niveau requis)
                    return false;
                }
            }
            else {
                //l'utilisateur a usurpé une session ses identifiants ne sont pas dans la BD
                return false;
            }
        }   
        else {
            //pas de données de session
            return false;
        }
    }
}

?>