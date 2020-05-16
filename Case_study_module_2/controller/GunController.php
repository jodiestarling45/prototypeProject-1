<?php

namespace Controller;

use model\Gun;
use model\GunDB;
use model\DBconnection;

class GunController
{
    public $gunDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=manager_guns", "admin", "123456");
        $this->gunDB = new GunDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include "view/gunView/add.php";
        } else {
            $name = $_POST['name'];
            $series = $_POST['series'];
            $brand = $_POST['brand'];
            $content = $_POST['content'];
            $origin = $_POST['origin'];
            $price = $_POST['price'];
            $status = $_POST['status'];
            $type_id = $_POST['type_id'];
            $gun = new Gun($name, $series, $brand, $content, $origin, $price, $status, $type_id);
            $this->gunDB->create($gun);
            $message = "Created a gun";
            header('location: index_3.php');
            include "view/gunView/add.php";
        }
    }

    public function index()
    {
        $guns = $this->gunDB->getAll();
        include "view/gunView/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $gun = $this->gunDB->get($id);
        include "view/gunView/view.php";
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $gun = $this->gunDB->get($id);

        } else {
            $id = $_POST['id'];
            $this->gunDB->delete($id);
            header('location: index_3.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $gun = $this->gunDB->get($id);
            include "view/gunView/edit.php";
        } else {
            $id = $_POST['id'];
            $gun = new Gun($_POST['name'], $_POST['series'], $_POST['brand'], $_POST['content'], $_POST['origin'], $_POST['price'], $_POST['status'], $_POST['type_id']);
            $this->gunDB->update($id, $gun);
            header('Location: index_3.php');
        }
    }
    public function search(){
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $key = $_POST['key'];
            $guns = $this->gunDB->search($key);
        }
        include 'view/gunView/search.php';
    }
    public function buyOnline(){

    }
}