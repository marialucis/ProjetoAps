<?php
	session_start();

	if($_SESSION['logou'] == 1) {
		include "menu.php";
	}
	else {
		header('Location: index.php');
	}

?>

