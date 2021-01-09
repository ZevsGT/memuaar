<?php
$data = file_get_contents('php://input');

if($data != null){
	$data = json_decode($data);
}

$to = "example@mail.ru";

if(isset($data->order)){
	$theme = "Заказ на: ".$data->order;
	$message = "Номер телефона заказчика: ".$data->phone;

	mail($to, $theme, $message);
	echo "Заказ принят!";
}

if(isset($data->contacts)){
	$theme = "Сообщение от: ".$data->phone;
	$message = "Номер телефона: ".$data->phone."\n Сообщение: n".$data->message;

	mail($to, $theme, $message);
	echo "Сообщение отправлено";
}