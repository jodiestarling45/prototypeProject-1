<?php
require 'model/GunDB.php';
require 'model/Gun.php';
require 'model/DBconnection.php';
include 'controller/GunController.php';

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

$controller = new \Controller\GunController();
$page = isset($_REQUEST['page'])?$_REQUEST['page'] : null;
switch ($page) {
    case 'add':
        $controller->add();
        break;
    case 'delete':
        $controller->delete();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'search':
        $controller->search();
        break;
    case 'view':
        $controller->view();
        break;
    default:
        $controller->index();
        break;
}
?>
</body>
</html>
