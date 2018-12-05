<?php  
require 'vendor/autoload.php';  
use Ratchet\MessageComponentInterface;  
use Ratchet\ConnectionInterface;

require 'chat.php';

// Run the server application through the WebSocket protocol on port 8080
$app = new Ratchet\App('localhost', 8080);
$app->route('/states', new Chat, array('*'));

$app->run();