<?php

session_start();

require('config.php');

require('classes/Messages.php');
require('classes/Bootstrap.php');
require('classes/Controller.php');
require('classes/Model.php');

require('controllers/home.php');
require('controllers/users.php');
require('controllers/flats.php');
require('controllers/admins.php');

require('models/home.php');
require('models/user.php');
require('models/flat.php');
require('models/admin.php');


$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();
if ($controller) {
    $controller->executeAction();
}

