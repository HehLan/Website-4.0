<style type="text/css">
	#slider {
		width:670px;
		height:300px;
		
		/*IE bugfix*/
		padding:0;
		margin:0;
	}
	
	#slider li { list-style:none; }
	
	#pageSlider {
		width:670px;
		margin:0;
		height: 300px;
	}
</style>

<div id="pageSlider">
	<ul id="slider">
		
	<?php
		//attention à mettre le bon chemin
		$dos ="rhinoslider/img/slider/";
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