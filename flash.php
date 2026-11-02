<?php

if (session_status() === PHP_SESSION_NONE) {
	session_start();
}

function flash(string $message) {
	$_SESSION["flash"] = $message;
}

function display_flash() {
	if (isset($_SESSION["flash"])) {
		$x = $_SESSION["flash"];
		echo "<ul><li>$x</li></ul>";
		$_SESSION["flash"] = null;
	}
}

?>
