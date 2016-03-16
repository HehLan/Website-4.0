
    <style type="text/css">
	div.miniature
	{
	    width:700px;
	    margin: 0 auto;
	    padding: 0;
	    padding-top: 10px;
	}
	.miniature a 
	{ 
	    text-decoration:none;	    
	}
	.miniature img 
	{ 
	    margin: 4px;
	    margin-top: 2px;
	    border-radius:12px;
	    box-shadow:0 0 8px 1px;
	} 
    </style>
    
<title>Galeries</title>
    
<div class="miniature" >    
    <?php
        $dos ="photos-fancybox/galerie/thumb";
        //ouvre le dossier
        $dir = opendir($dos);
        while($file = readdir($dir)){
            $allow_ext = array("jpg","png","gif");
            $ext = strtolower(substr($file,-3));
            if(in_array($ext,$allow_ext)){
                ?>                
                <a href="photos-fancybox/galerie/<?php echo $file; ?>" class="fancybox" rel="group" title="HeHLan" >
                    <img src="photos-fancybox/galerie/thumb/<?php echo $file; ?>" alt="photo HeHLan 2013-2014" /> 
                </a>                
                <?php
            }
        }
    ?>
</div>


