	</div><!-- page-wrap -->

	<footer class="footer">
		<div class="container_12">
			<div class="grid_12">
				<br />Mobius GUI is realized by <a href="http://www.iacopoboccalari.com" target="_blank">Iacopo Boccalari</a>.
				<br />If you love it, you may consider a paypal donation to support further development
				<br />&nbsp;
			</div>
		</div>
	</footer><!-- .footer -->

	<!-- scripts -->
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>

	<?php
		if(isset($load_scripts)) {
			foreach ($load_scripts as &$script) {
				echo '<script src="js/' . $script . "?" . time() . '"></script>' . "\n\t";
			}
		}
	?>

	</body>
</html>