<?php 
/**
 * Embedded
 * 
 * @package CoffeePot Chat
 * @author Rexzooly Black <>
 * @copyright (c) 2023, rexzooly.co.uk
 * @since 1.5
 # ==========================================
 * @Original package WaterCooler Chat
 * @Original author Joao Ferreira <jflei@sapo.pt>
 * @Original copyright (c) 2018, Joao Ferreira
 * @since 1.1
 */

ob_start(); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<META HTTP-EQUIV="Content-Type" CONTENT="text/html; charset=UTF-8">
		<!-- Change paths to match your server's -->
		<LINK rel="stylesheet" href="themes/simple_coffee/style.css" type="text/css">
		<script type="text/javascript" src="script.js"></script>
		<title>Chat</title>
	</head>
	<body>
		<h1 style="text-align: center; font-weight: normal">Chat</h1>
		<?php

			include 'cpchat.class.php';    # Change this to match your server's path to "wcchat.class.php"
			$chat = new WcChat();
                  	echo $chat->printIndex('EMBED');
			/*
			include 'cpchat.class.php';    # Change this to match your server's path to "wcchat.class.php"
			$chat = new CpChat();
                  	echo $chat->printIndex('EMBED');
			*/
		?>	
	</body>
</html>
<?php ob_end_flush(); ?>
