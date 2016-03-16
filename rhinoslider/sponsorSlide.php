<style type="text/css">
	
	#sponsorSlide {
		width:200px;
		height:650px;
		
		/*IE bugfix*/
		padding:0;
		margin:0;
	}
	
	#sponsorSlide li { list-style:none; }
	
	#pageSponsor {
		width:200px;
		margin:20px auto;
	}
</style>

<div id="pageSponsor">
	<ul id="sponsorSlide">
		
	<?php
		//attention à mettre le bon chemin
		$dos ="rhinoslider/img/sponsorSlider/";
		//ouvre le dossier
		$dir = opendir($dos);
		while($file = readdir($dir)){
			$allow_ext = array("jpg","png","gif");
			$ext = strtolower(substr($file,-3));
			if(in_array($ext,$allow_ext)){
				?>
					<li><img src="<?php echo $dos; ?>/<?php echo $file; ?>"  /></li>
				<?php
			}
		}
	    ?>
	</ul>
</div>
	