<?php
	session_start();
	session_destroy();
	echo "<a href=../home-eng.php><h3>Logged out</h3></a>";
?>