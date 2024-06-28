<?php
    class Student{
        var $id, $name, $email, $roll_no, $phone, $gender, $address, $status;
        function __construct($id, $name){
            $this->id = $id;
            $this->name = $name;
            echo "<br>";
        }

        function sayHello(){
            echo "hello world";
            echo "<br>";
        }
        
    }

    // $ram = new Student();
    // $ram->sayHello();
    // $ram->id = 101;
    // $ram->email = "ram@gmail.com";
    // $ram->name = "Ram";
    // $ram->phone = 98200022;
    // $ram->roll_no = 11;
    // $ram->address = "jorpati";
    // echo "<pre>";
    // print_r($ram);
    // echo "</pre";
    
    $hari = new Student(1002, "Hari Rai");
    echo "<pre>";
    print_r($hari);
    echo "</pre";
    //$hari->sayHello(); calling function 

    //passing parameter in constructor
    $ram = new Student(1001,"Ram thapa");
    echo "<pre>";
    print_r($ram);
    echo "</pre";

?>