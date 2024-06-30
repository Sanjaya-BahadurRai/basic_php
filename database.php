<?php
    //mysqli is already in database class

    // pass this 4 value username, root , password and databasename
    $connection = new mysqli('localhost','root','','college_newsportal');

    // echo "<pre>";
    // print_r($connection);
    // echo "</pre";


    //inset data
    $connection->query("INSERT INTO tbl_student(name,phone,dob,status) VALUES ('hari',98307322,'2003/03/11',1)");
    // $connection->query("INSERT INTO tbl_student(name,phone,dob,status) VALUES (
    //     ('Ram',98307310,'2003/03/10',1),
    //     ('hari',98307311,'2003/03/11',1),
    //     ('gita',98307312,'2003/03/12',1),
    //     ('sita',98307313,'2003/03/13',1),
    //     ('bobeta',98307314,'2003/03/14',1)
    //     )");
    
    // if($mysqli->query($sql)==true){
    //     echo "new record created successfully";
    // } else {
    //     echo "Error:" .$sql . "<br>" .mysqli->error;
    // }


    // view data
    $datas = $connection->query("select * from tbl_student");
    //$result = $datas->fetch_assoc(); //fetch associative
    $alldata = [];
    while($result = $datas->fetch_assoc()){
        array_push($alldata, $result);
    }
    echo "<pre>";
    print_r($alldata);
    echo "</pre";

    //delete data
   // $connection->query("delete from tbl_student where id=01")

   //update data
   //$connection->query("update tbl_student set name = 'Bahadur Thapa', phone = 9999, dob = '2004/04/04' and status= 1 where id=2");



?>