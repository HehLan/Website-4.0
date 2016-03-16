
<?php
    require_once("modules/connect.php");
    $sql="SELECT logo, siteWeb, description FROM sponsors";
    
       
?>
<h1 style="
        border-bottom: 4px solid #fff;
		font-size: xx-large;
		letter-spacing: 10pt;
		text-align: center;
		padding-bottom: 15px;
		padding-top: 15px;
		font-family: Cambria ;
                font-weight: bold;
                text-transform: uppercase;
                margin-bottom: 50px;
		text-shadow: 1px 1px 10px #57BADA; ">
        
        Sponsors de la HeHLan
    </h1>

<!--<div id="tableSponsors">
    <TABLE style="width: 700px; margin: auto;"> 
// <?php
    // try {
        // $req = $connexion->query($sql);
        // while($sponsor = $req->fetch()){
            
            // if (empty($sponsor["siteWeb"])){
                // echo'
                // <TR>
                    // <TD style="vertical-align: middle; width: 50%; text-align: center; padding-top: 20px; padding-bottom: 20px;">
                            // <img src="img/sponsors/'.$sponsor["logo"].'" style="margin: auto; max-width: 300px;"/>
                    // </TD> 
                    // <TD style="vertical-align: middle; width: 50%; padding: 10px; text-align: justify;  ">
                        
                        // '.$sponsor["description"].'
                        
                    // </TD>
                    
                    
                // </TR>';
            // }
            // else{
                // echo'
                // <TR>
                    // <TD style="vertical-align: middle; width: 50%; text-align: center; padding-top: 20px; padding-bottom: 20px;">
                    
                        // <a href="'.$sponsor["siteWeb"].'" target="_blank">
                            // <img src="img/sponsors/'.$sponsor["logo"].'" style="margin: auto; max-width: 300px;"/>
                        // </a>
                    
                    // </TD> 
                    // <TD style="vertical-align: middle; width: 50%; padding: 10px; text-align: justify; padding-top: 20px; padding-bottom: 20px;">
                        
                        // '.$sponsor["description"].'
                        
                    // </TD>
                    
                    
                // </TR>';
            // }
            
            
            // }
    // }
    
    // catch(PDOException $e) {
        // echo 'Base de données est indisponible pour le moment!';
    // }
// ?>      
    </TABLE>
</div>
