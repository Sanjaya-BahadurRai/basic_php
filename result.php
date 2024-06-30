
<?php
//database connection
$connection = new mysqli('localhost','root','','college_newsportal');

//fetch
$datas = $connection->query("Select * from tbl_result");
$result =[];
while($row = $datas->fetch_array()){
    array_push($result, $row);
}

    if(isset($_POST['btnsubmit'])){
        if(isset($_POST['name']) && !empty($_POST['name'])){
            $name = $_POST['name'];
        }
        else{
            $error_name = "Name Field is required";
        }
        if(isset($_POST['english']) && !empty($_POST['english'])){
            if(is_numeric($_POST['english'])){
                if($_POST['english']<=100){
                    $english = $_POST['english'];
                }
                else{
                    $error_english = "Please enter number less than 100";
                }
               
            }
            else{
                $error_english = "Please enter number";
            }
        }
        else{
            $error_english = "English Field is required";
        }


        if(isset($_POST['nepali']) && !empty($_POST['nepali'])){
            if(is_numeric($_POST['nepali'])){
                if($_POST['nepali']<=100){
                    $nepali = $_POST['nepali'];
                }
                else{
                    $error_nepali = "Please enter number less than 100";
                }
               
            }
            else{
                $error_nepali = "Please enter number";
            }
        }
        else{
            $error_nepali = "Nepali Field is required";
        }


        if(isset($_POST['science']) && !empty($_POST['science'])){
            if(is_numeric($_POST['science'])){
                if ($_POST['science']<=100){
                    $science = $_POST['science'];
                }
                else{
                    $error_science = "Please enter the number less than 100";
                }
            }
            else{
                $error_science="Please enter number";
            }
        }
        else{
            $error_science = "Science Field is required";
        }


        if(isset($_POST['math']) && !empty($_POST['math'])){
            if(is_numeric($_POST['math'])){
                if($_POST['math']<=100){
                    $math = $_POST['math'];
                }
                else{
                    $error_math = "Please enter the number less than 100";
                }
            }
            else{
                $error_math = "Please enter number";
            }
        }
        else{
            $error_math = "Math Field is required";
        }
    
    if(
        isset($name) &&
        isset($english) &&
        isset($nepali) &&
        isset($science) &&
        isset($math)
    ){
        $total = $english + $nepali + $science + $math;
        $percentage = ($total/400)*100;

        //pass or fail
        if($english>=40 && $nepali>=40 && $science>=40 && $math>=40){
            $remark = "pass";
            //grade
            if($percentage>=80){
                $grade ="Distinction";
            }
            elseif($percentage>=70){
                $grade ="First";
            }
            elseif($percentage>=60){
                $grade ="Second";
            }
            elseif($percentage>=50){
                $grade ="Thid";
            }
            else{
                $grade ="Pass Only";
            }

        }
        else{
            $remark = "fail";
            $grade = "No Grade";
        }

        
        if(isset($name) && ($english) && ($math) && ($math) && ($nepali) && ($total) && ($percentage) && ($grade) && ($remark)){
            $sql = "INSERT INTO tbl_result
            (name,english,nepali,math,science,total,percentage,grade,remark)
            values ('$name',$english,$nepali,$math,$science,$total,$percentage,'$grade','$remark')";
            $connection->query($sql);
        }
    }
    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>result calculation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <h1>Result Calculation</h1>
    <form action="" method ="Post">
        <label for="">Student Name</label>
        <input class="form-control" type="text" name="name" >
        <?php
        if(isset($error_name)){
            echo $error_name;
        }
        ?>
        <br>
        <label for="">English</label>
        <input class="form-control" type="number" name="english" maxlength="3" minlength="1">
        <?php
        if(isset($error_english)){
            echo $error_english;
        }
        ?>
        <br>
        <label for="">Nepali</label>
        <input type="number" name="nepali"maxlength="3" minlength="1"class="form-control">
        <?php
        if(isset($error_nepali)){
            echo $error_nepali;
        }
        ?>
        <br>
        <label for="">Math</label>
        <input type="number" name="math"maxlength="3" minlength="1"class="form-control">
        <?php
        if(isset($error_math)){
            echo $error_math;
        }
        ?>
        <br>
        <label for="">Science</label>
        <input type="number" name="science"maxlength="3" minlength="1"class="form-control">
        <?php
        if(isset($error_science)){
            echo $error_science;
        }
        ?>
        <br>
        <button type="submit" name="btnsubmit" class="btn btn-success">Calculate</button>
    </form>


    <hr>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>English</td>
                <td>Nepali</td>
                <td>Math</td>
                <td>Science</td>
                <td>Total</td>
                <td>Percentage</td>
                <td>Grade</td>
                <td>Remark</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($result as $student){?>
                    <tr>
                        <td><?php echo $student['id'];?></td>
                        <td><?php echo $student['name'];?></td>
                        <td><?php echo $student['english'];?></td>
                        <td><?php echo $student['nepali'];?></td>
                        <td><?php echo $student['math'];?></td>
                        <td><?php echo $student['science'];?></td>
                        <td><?php echo $student['total'];?></td>
                        <td><?php echo $student['percentage'];?></td>
                        <td><?php echo $student['grade'];?></td>
                        <td><?php echo $student['remark'];?></td>
                    </tr>
               <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>