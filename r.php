<h1>Register</h1>
<p>Here you can pre-register your account - be ready for our launch, you'll be seeding in no time!</p>

<?php

	include("seed.php");
	mt_srand($seed % 99999);

	if (isset($_POST["name"])) {

		$fp = fopen('count.s', 'c+');
		flock($fp, LOCK_EX);

		$count = (int)fread($fp, filesize('count.s'));
		ftruncate($fp, 0);
		fseek($fp, 0);
		fwrite($fp, $count + 1);

		flock($fp, LOCK_UN);
		fclose($fp);

		for ($i = 0; $i < $count; $i++) {
			mt_rand(0, 99999);
		}

		
		echo("Thank you for preregistering! You are lucky user <b>#". ($count+1) . "</b>");
		echo("</br>");
		echo("Write down this RANDOMLY generated passcode, you'll need it for when we launch the site!: <b>" . mt_rand(0, 99999) . "</b>");
		die();
}
?>


<form action="index.php?page=register" method="POST">
	<p><input name="name" placeholder="your email :)"></input></p>
	<p><input type="submit"></input>
</form>
