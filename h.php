<?php
highlight_string('<?php
	include("seed.php");
	mt_srand($seed % 99999);
	$admin_pw = mt_rand(0, 99999);
?>');
?>
