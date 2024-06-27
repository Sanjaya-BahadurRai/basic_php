<h1>Function</h1>
<p>Function is a reusable block of code which perform specific task.</p>
<ol type ="1" start="10">
    <li>Name function</li>
    <li>Anonymous function</li>
    <ol type ="1" start="10">
        <li>Eg</li>
        <li>Eg</li>
    </ol>
</ol>

<?php
    function sayHello(){
        echo "Hello Ram!";
        echo "<br>";
    }
    sayHello();
// Function with Argument
    function sayHelloWithName($name, $place){
        echo "hello $name Welcome to $place";
        echo "<br>";
    }
    sayHelloWithName("Ram","College");
    sayHelloWithName("Shyam","Our Home");

//Written type function
    function sum_of_two_number($num1,$num2){
        // $sum = $num1 + $num1;
        // return $sum;
        return $num1 + $num2;
    }
    // $result = sum_of_two_number(5,8);
    // echo $result;
    echo sum_of_two_number(5,8);

?>
<br>
<br>
<br>
<h3>Anonymous Function</h3>
<p>()() : IIFE = immediately Invoke functional expression</p>
<?php
    (function (){
        echo "I am anonymous function";
    })();
    
    echo "<br>";
    (function ($email){
        echo "I am anonymous function $email";
    })('ram@gmail.com');

    echo "<br>";

    function greeting ($address){
        echo $address;
        //closer function of greeting
        function welcome($name){
            echo "hello $name welcome to $address ";
        }

    }

    greeting("arunima college");
    welcome("ram");
?>