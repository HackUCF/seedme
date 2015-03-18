<?php
	include("seed.php");
	mt_srand($seed % 99999);
	$admin_pw = mt_rand(0, 99999);

	$count = (int)file_get_contents("count.s");
	
	
	if (isset($_POST["code"])) {
  	if ($_POST["code"] == $admin_pw) {
   		echo("key{haha_seeds_are_cool}");
		} else {
			echo ("wrong passcode :(");
		}
	}
?>

<p>Please enter the password for user "admin":</p>

<form action="index.php?page=admin" method="POST">
	<input type="text" name="code"></input>
</form>
