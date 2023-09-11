<?php

/**
 * Index
 * 
 * @package CoffeePot Chat
 * @author Rexzooly Black <>
 * @copyright (c) 2023, rexzooly.co.uk
 * @since 1.5
 * ============================================= 
 * @Orginial author João Ferreira <jflei@sapo.pt>
 * @Orginial copyright (c) 2018, João Ferreira
 * @since 1.1
 */

	include 'cpchat.class.php';    # Change this to match your server's path to "chat.class.php" file
	$chat = new WcChat();
	echo $chat->printIndex();
	/* Future
	include 'cpchat.class.php';    # Change this to match your server's path to "chat.class.php" file
	$chat = new CpChat();
	echo $chat->printIndex(); 	
   	*/
?>	
