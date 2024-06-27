<h1>Loops in Php</h1>
<ul>
    <li>for loop</li>
    <li>while</li>
    <li>foreach</li>
</ul>

<h3>While loop</h3>
<?php
    $num = 1;
    while($num<=10){
        echo "\t".$num;
        $num++;
    }
    echo "<br>";
    $num = 10;
    while($num>0){
        echo "\t".$num;
        $num--;
    }
?>
<h3>For loop</h3>
<?php
    for($j=1;$j<=50;$j++)
    echo "\t" .$j;

echo "<br>";

    for($j=1;$j<=50;$j++)
        if($j%2==0)
            echo "\t" .$j;

    for($j=1;$j<=50;$j++)
        if($j%2==0)
            echo "\t" .$j;


?>
<h3>foreach loop</h3>
<?php
$fruits = ['mango','apple','banana'];

foreach($fruits as $value){
    echo $value;
    echo "<br>";
}

echo "==========================<br>";

$single_student = [
    "id" => "A01",
    "name" => "ram",
    "email" => "ram@gmail.com"
];

foreach($single_student as $key =>$value){
    echo $key . ':' .$value;
    echo "<br>";

}
// Display associative array using foreach loop in table
echo "==============Multidimenensional arrray============<br>";
$group_of_students = [
    [
        "id" => "A01",
        "name" => "ram",
        "email" => "ram@gmail.com"
    ],
    [
        "id" => "A02",
        "name" => "shyam",
        "email" => "ram@gmail.com"
    ],
    [
        "id" => "A03",
        "name" => "hari",
        "email" => "ram@gmail.com"
    ]
];
// foreach($group_of_students as $std){
//     echo "<br>";
//     foreach($std as $key => $value)
//         echo $key. ':' . $value;
//         echo "<br>";
// }
foreach($group_of_students as $std){
    echo "id ". ':' .$std['id'];
    echo "id ". ':' .$std['name'];
    echo "id ". ':' .$std['email'];
    echo "===============";
    echo "<br>";
}
?>


<h3>Homework 1: Display the prime number between two given number.</h3>
<?php
    $a= 5;
    $b=30;
    $n;
    for($num=$a;$num<=$b;$num++){
        $isprime = 1;

        //checks if num is a prime
        if($num<=1){
            $isprime = 0;
        }
        else{
            for($i=2;$i*$i<=$num;$i++){
                if($num%$i==0){
                    $isprime = 0;
                    break;
                }
            }
        }
        if($isprime){
            echo "<br> . $num";
        }
    }
?>

<h3>Homework 1: check if the given number is prime number or not.</h3>
<?php
    $num = 53;
    $isprime = 1;
        //checks if num is a prime
        if($num == 0 && $num == 1){
            $isprime = 0;
        }
        
        for($i=2;$i*$i<=$num;$i++){
            if($num%$i==0){
                $isprime = 0;
                break;  
            }
            
        }
        if($isprime){
            echo "The given number is a prime number";
        }
        else{
            echo "The given number is not a prime number";
        }
        
?>


<h3>Display associative array using foreach loop in table</h3>
<?php
$group_of_students = [
    [
        "id" => "A01",
        "name" => "ram",
        "email" => "ram@gmail.com"
    ],
    [
        "id" => "A02",
        "name" => "shyam",
        "email" => "ram@gmail.com"
    ],
    [
        "id" => "A03",
        "name" => "hari",
        "email" => "ram@gmail.com"
    ]
];
?>

<table border = "1">
    <thead>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
    </thead>
        <?php foreach($group_of_students as $std){ ?>
        <tr>
            <td><?php echo $std ['id'];?> </td>
            <td><?php echo $std ['name'];?> </td>
            <td><?php echo $std ['email'];?> </td>
        </tr>
        <?php } ?>
    <tbody>
    </tbody>
</table>


