<?php

class Person
{
    private $fullName;
    private $address;
    private $phone;
    private $email;
    protected $baseSalary = 50;

    function __construct($fullName, $address, $phone, $email)
    {
        $this->fullName = $fullName;
        $this->address = $address;
        $this->phone = $phone;
        $this->email = $email;
    }

    // override trong lớp con
    function showInfo()
    {
        echo "Họ và Tên: " . $this->fullName . "<br>";
        echo "Địa chỉ: " . $this->address . "<br>";
        echo "Điện thoại: " . $this->phone . "<br>";
        echo "Email: " . $this->email . "<br>";
    }
}

class Student
{
    static $name = "Phạm Thị Đào";
    public $phone = "1029103901";

    static function xinChao($name)
    {
        echo "xin chào C12";
        echo self::getAddress($name);
    }

    static function getAddress($name)
    {
        if ($name == self::$name) {
            echo "<br /> Đào Đất";
        }
    }
}

class Employee extends Person
{
    protected $baseSalary = 50;
    private $numOfProduct = 2;

    function showInfo()
    {
        // // Dùng từ khóa Parent truy cập vào phương thức cha
        echo "showInfo của lớp cha: <br />";
        Parent::showInfo();
        echo "<br />";

        echo "Dây là thông tin thêm của lớp con: <br />";
        echo $this->getAge();

        //echo "Lương cơ bản:" . $this->baseSalary;
        //echo "<br>" . "Số lượng sản phẩm:" . $this->numOfProduct;
    }

    function getAge()
    {
        return 100;
    }
}
$employee = new Employee("Trần Văn An", "Hà Nam", "0988843243", "an@gmail.com");
$employee->showInfo();

echo "Đây là gọi hàm static của class Student: <br />";
echo Student::xinChao('Thắng Cá Chép');
echo Student::xinChao('Phạm Thị Đào');
echo Student::$name;

//ket qua
/*
Họ và Tên: Trần Văn An
Địa chỉ: Hà Nam
Điện thoại: 0988843243
Email: an@gmail.com
Lương cơ bản:50
Số lượng sản phẩm:2
*/