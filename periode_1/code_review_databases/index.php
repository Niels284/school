<?php
require_once('classes/message.php');

$name = 'Piet';
$email = 'piet@hotmail.com';
$message = 'Dit is ook een bericht';

$m = new Message();
$m->insert($name, $email, $message);