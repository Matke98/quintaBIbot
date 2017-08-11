<?php
	$token = "417976290:AAFymhc3z62JyTrRJCYc2Jz9XpsKxqF30ok";
	$website = "https://api.telegram.org/bot" . $token;
	$send = file_get_contents($website . "/sendMessage?chat_id=417976290&text=ciao");
	
	

?>