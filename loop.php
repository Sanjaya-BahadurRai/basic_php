<h1>Loops in Php</h1>
<ul>
    <li>for loop</li>
    <li>while</li>
    <li>foreach</li>
</ul>

<h3>While loop</h3>
<?php
    $i = 1;
    while($i<=10){
        echo "\t".$i;
        $i++;
    }
    echo "<br>";
    $i = 10;
    while($i>0){
        echo "\t".$i;
        $i--;
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
//Find the prime number : homework
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
