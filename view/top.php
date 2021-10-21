<?php
require_once('lib/print.php');
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>
			<?php
			print_title();
			?>
		</title>
		<link rel="stylesheet" href="style.css">
	</head>
	
	<body>
		<h1>
			<a href="index.php">메모</a>
		</h1>
		<ul>
			<?php
			print_list(); 
			?>
		</ul>