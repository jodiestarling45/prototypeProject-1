<?php

require "model/Gun.php";
require "model/Customer.php";
require "model/GunDB.php";
require "model/CustomerDB.php";
require "model/DBconnection.php";
require "controller/GunController.php";
require "controller/CustomerController.php";

use \Controller\GunController;
use \Controller\CustomerController;

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$controller = new CustomerController();
$page = isset($_REQUEST['page']) ? $_REQUEST['page'] : null;
switch ($page) {
    case 'add':
        $controller->add();
        break;
    case 'view':
        $controller->view();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'searching';
        $controller->searching();
        break;
    case 'buy';
        $controller->buyOnline();
        break;

    case 'order';
        $controller->returnOrder();
        break;
    default:
        $controller->index();
        break;
}
?>
?>
</body>
</html>
