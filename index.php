<?php
/**
 * CoffeePot Chat
 *
 * @author Rexzooly Black <copyright (c) 2023, rexzooly.co.uk> 1.5
 * @Orginial author João Ferreira <copyright (c) 2018, João Ferreira> 1.4
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
