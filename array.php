<h1>Array</h1>
<h2>Types of Array</h2>
<ul>
    <li>Numeric array(Index array)</li>
    <li>Associative Array</li>
    <li>Multidimensional Array</li>

</ul>
<h3>Numeric Array</h3>
<?php
    $fruits =['Mango','Appli','lichi'];
    $vegetables = array('Patoto','Tomato','couliflower');

    echo "<h1>".$fruits[1]."</h1>";
    echo "<br>";
    echo$vegetables[1];

?>

<h3>Associative Arrya</h3>
<?php
    $student =[
        "id" => "10A",
        "name" => "Rajesh",
        "address" => "jorpati",
        "email" => "rajesh@gmail.com",
        "phone" => 9810000000,
        "gender" => "Male",
        "roll no" => 19
    ];
    echo "This is my email: " .$student['email'];
?>

<h3>Miltidimentional Array</h3>
<p>Multidimensional numberic array</p>
<?php
    $meals =[
        ['mango', 'apple','banana','lichi'],
        ['potato','carrot','cabbage','tomato'],
        ['fish','mutton','pork','chiken'],
    ];

    echo $meals[1][0];
    echo "<br>";
    echo $meals[0][3];
?>
<p>Multidimensional associative array</p>
<?php
    $students = [
        [
            "id" => "A01",
            "name" => "Ram KC",
            "email" => "ram@gmail.com",
            "phone" => 9810000000
        ],
        [
            "id" => "A02",
            "name" => "Shyam",
            "email" => "shyam@gmail.com",
            "phone" => 9810000000
        ],
        [
            "id" => "A03",
            "name" => "hari",
            "email" => "hari@gmail.com",
            "phone" => 9810000000
        ],
    ];

    echo $students[1]['email'];
?>