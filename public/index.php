<?php 

// Bootstrap File
require_once __DIR__ . '/../Bootstrap/app.php';

$container->get('emitter')->emit($response);