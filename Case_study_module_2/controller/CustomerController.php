<?php

namespace Controller;

use function Couchbase\defaultDecoder;
use model\Customer;
use model\CustomerDB;
use model\DBconnection;

class CustomerController
{
    public $customerDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost; dbname=manager_guns", "root", "");
        $this->customerDB = new CustomerDB($connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/viewCustormer/add.php';
        } else {
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $customer = new Customer($name, $birthday, $address, $email, $phone, $gender);
            $this->customerDB->create($customer);
            $message = "Created a customer";
            header('location: index2.php');
            include 'view/viewCustormer/add.php';
        }
    }

    public function index()
    {
        $customers = $this->customerDB->getAll();
        include "view/viewCustormer/list.php";
    }

    public function view()
    {
        $id = $_GET['id'];
        $customer = $this->customerDB->get($id);
        include 'view/viewCustormer/view.php';
    }

    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer =$this->customerDB->delete($id);

        } else {
            $id = $_POST['id'];
            $this->customerDB->delete($id);
            header('Location: index2.php');
        }
        include 'view/viewCustormer/delete.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $customer = $this->customerDB->get($id);
            include 'view/viewCustormer/edit.php';
        } else {
            $id = $_POST['id'];
            $customer = new Customer($_POST['name'], $_POST['birthday'], $_POST['address'], $_POST['email'],
                $_POST['phone'], $_POST['gender']);
            $this->customerDB->update($id, $customer);
            header('Location: index2.php?page=');
        }
    }
    public function searching(){
        if ($_SERVER['REQUEST_METHOD']=="POST"){
            $key = $_POST['key'];
            $customer = $this->customerDB->searching($key);
        }
        include 'view/viewCustormer/searching.php';
    }
    public function buyOnline(){
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/viewCustormer/add.php';
        } else {
            $id = $_REQUEST['id'];
            $name = $_POST['name'];
            $birthday = $_POST['birthday'];
            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $customer = new Customer($name, $birthday, $address, $email, $phone, $gender);
            $this->customerDB->create($customer);
            $customers = $this->customerDB->getInfoByName($name);
            $customer_name = $this->customerDB->pullInfo($customers);
            $customer_id = $this->customerDB->getIdCustomer($customers);
            $this->customerDB->addBuy($customer_id);
            $id_customer = $this->customerDB->returnFormCustomerId($customer_id);
            $id_customer_toPull=$this->customerDB->getIdCustomer($id_customer);
            $this->customerDB->buy($id,$customer_name);
            $message = "thank for buying ";
            header('Location: index2.php?page=');
            include 'view/gunView/buyOnline.php';
        }
    }
    public function returnOrder(){
        $customers = $this->customerDB->getOrder();
        include "view/viewCustormer/order.php";
    }
}