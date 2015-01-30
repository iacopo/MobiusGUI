<?php
	$drop_area_text = '
		<span>
			Drop your SYSCFG.TXT file here
			<br />or simply load it from a folder
			<br />
			<br />
			<input type="file" id="files" name="files[]" class="loadFile"/>
		</span>
	';
	$load_scripts = array("versionCheck.js");
?>
<?php include('includes/header.php'); ?>
<?php include('includes/news.php'); ?>

		<div class="wrapper">
			<div class="container_12 getting_started">
				<div class="grid_12">
					<?php if (isset($title)) {echo "<h1 class='primo'>" . $title . '</h1>'; } ?>
				</div>
				<div class="clear"></div>
				<div class="grid_12">
					<?php if (isset($message)) {echo $message;} ?>
				</div>

				<div class="grid_12">
					<h1 class="primo">Getting started</h1>
				</div>
				<div class="grid_12 colonne">
					<p>Generate a SYSCFG.TXT file from your Mobius camera by following the instructions on <a href="http://www.mytempfiles.info/mobius/" target="_blank">the user manual</a>.</p>
					<p>Once you have the file, you may drag it over the area above, once you'll drop it there, you will be able to configure every parameter and save a new SYSCFG.TXT file to your computer or directly onto the camera MicroSD card.</p>
					<p>The last step will be uploading this file to the camera MicroSD card and loading it following once again the instructions you find on the user manual</p>
					<p>&nbsp;</p>
					<p>&nbsp;</p>
				</div>
				<div class="clear"></div>
			</div><!-- container_12 getting_started -->
			
		</div><!-- .wrapper -->
		<div id="hidden_form"></div>
<?php include('includes/footer.php'); ?>