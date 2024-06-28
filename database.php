<?php
    //mysqli is already in database class

    // pass this 4 value username, root , password and databasename
    $connection = new mysqli('localhost','root','','college_newsportal');

    // echo "<pre>";
    // print_r($connection);
    // echo "</pre";

    //$connection->query("INSERT INTO tbl_student(name,phone,dob,status) VALUES ('Shyam',98307330,'2003/03/03',1)");
    $datas = $connection->query("select * from tbl_student");
    //$result = $datas->fetch_assoc(); //fetch associative
    $alldata = [];
    while($result = $datas->fetch_assoc()){
        array_push($alldata, $result);
    }
    echo "<pre>";
    print_r($alldata);
    echo "</pre";

    //delete
   // $connection->query("delete from tbl_student where id=01")

   //update
   $connection->query("update tbl_student set name = 'Bahadur Thapa', phone = 9999, dob = '2004/04/04' and status= 1 where id=2");



?>