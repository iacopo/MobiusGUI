<?php
	$drop_area_text = '
		<span>
			Drop your SYSCFG.TXT file here
			<br />or simply load it from a folder
			<br />
			<input type="file" id="files" name="files[]" class="loadFile"/>
		</span>
	';
	$load_scripts = array("mobiusOrdinale.js", "FileSaver.js", "estetica.js");
?>
<?php include('includes/header.php'); ?>
<?php include('includes/news.php'); ?>

		<div class="topBarContainer" data-minFw=59>
			<div class="container_12">
				<div class="topBar grid_12">
					<div class="button">Generate SYSCFG.TXT</div>
				</div>
			</div>
		</div><!-- .topBarContainer -->

		<div class="button">crea ordinale</div>

		
<?php include('includes/footer.php'); ?>