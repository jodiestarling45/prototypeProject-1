<?php


namespace Model;


class CustomerDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function create($customer)
    {
        $sql = "INSERT INTO customer (name, birthday, address, email, phone, gender) VALUES (?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->birthday);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $customer->email);
        $statement->bindParam(5, $customer->phone);
        $statement->bindParam(6, $customer->gender);
        $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM customer";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $customers = [];
        foreach ($result as $row) {
            $customer = new Customer($row['name'], $row['birthday'], $row['address'], $row['email'], $row['phone'],
                $row['gender']);
            $customer->id = $row['id'];
            $customers[] = $customer;
        }
        return $customers;
    }

    public function get($id)
    {
        $sql = "SELECT * FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $customer = new Customer($row['name'], $row['birthday'], $row['address'], $row['email'], $row['phone'],
            $row['gender']);
        $customer->id = $row['id'];
        return $customer;
    }
    public function getInfoByName($name){
        $sql="SELECT * FROM `customer` WHERE name='$name'";
        $stmt = $this->connection->query($sql);
        return $stmt->fetch();
    }
    public function pullInfo($result){
        $name = $result['name'];
        return $name;
    }
    public function getIdCustomer($result){
        return $result['id'];
    }
    public function delete($id)
    {
        $sql = "DELETE FROM customer WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $customer)
    {
        $sql = "UPDATE customer SET name = ?, birthday = ?, address = ?, email = ?, phone = ?, gender = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $customer->name);
        $statement->bindParam(2, $customer->birthday);
        $statement->bindParam(3, $customer->address);
        $statement->bindParam(4, $customer->email);
        $statement->bindParam(5, $customer->phone);
        $statement->bindParam(6, $customer->gender);
        $statement->bindParam(7, $id);
        return $statement->execute();
    }

    public function searching($key)
    {
        $sql = "SELECT * FROM `customer` WHERE name LIKE '%$key%'";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }
    public function buy($name_gun,$nameCustomer){

        $sql="INSERT INTO `order-gun`(`gun`, `customer`) VALUES ('$name_gundddddddddddddddd','$nameCustomer')";
        $this->connection->exec($sql);
    }
    public function getOrder(){
        $sql = "SELECT * FROM `order-gun` ";
        $stmt = $this->connection->query($sql);
        return $stmt->fetchAll();
    }
    public function addBuy($name){
        $sql = "INSERT INTO `buy`(`customer_id`) VALUES ('$name')";
        $this->connection->exec($sql);
    }
    public function returnFormCustomerId($customerId){
        $sql = "SELECT * FROM `buy` WHERE `customer_id` = $customerId";
        $stmt = $this->connection->query($sql);
        return $stmt->fetch();
    }
    public function getIdCus($result){
        return $result['id'];
    }
}