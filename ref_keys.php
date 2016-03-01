<?php 
	$requester_id = 'NSDLPAN';
	$date = date_create();
	$timstamp = date_timestamp_get($date);
	$secret_key = "1FOjljKtOIiMjaVlO7tH";
	$hash_key = hash('sha256', $requester_id.$secret_key.$timstamp);	
?>
