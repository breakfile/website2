<style>
body {
	margin: 0;
	padding: 0;
	font-family: Arial, Helvetica, sans-serif;
}
main {
	padding: 32px;
}
nav {
	color: white;
	padding: 8px;
	background-color: blue;
	top: 0;
	position: sticky;
	z-index: 999;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.5);
}
.navsplit {
	display: flex;
	flex-direction: row;
	align-items: center;
	justify-content: right;
	column-gap: 8px;
}
.navsplit h2 {
	font-weight: normal;
	margin: 0; padding: 0;
	margin-right: auto;
}
nav a {
	color: white;
}
</style>
<nav>
<div class="navsplit">
<h2>travelling<b>entertainers</b>.com</h2>
<a href="index.php">Home</a>
</div>
</nav>
<?php
require_once __DIR__ . "/flash.php";

display_flash();
?>
<main>
