<?php
header('Content-disposition: attachment; filename=SYSCFG.TXT');
header('Content-type: text/plain');

echo ($_POST["text"]);
?>