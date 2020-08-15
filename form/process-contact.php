<?php

	$to = "contato@feelingformaturas.com.br";  // Your email here
	$from = $_REQUEST['email'];
	$name = $_REQUEST['name'];
	$phone = $_REQUEST['assunto'];
	$message = $_REQUEST['message'];
	$headers = "From: $from";
	$subject = "Contato vindo via site";

	$fields = array();
	$fields{"name"} = "Nome completo*";
	$fields{"email"} = "Seu Email*";
	$fields{"phone"} = "Fone";
	$fields{"message"} = "Mensagem*";

	$body = "Here is what was sent:\n\n";
	foreach($fields as $a => $b){
		$body .= sprintf("%20s:%s\r\n",$b,$_REQUEST[$a]);
	}
	$send = mail($to, $subject, $body, $headers);

?>
