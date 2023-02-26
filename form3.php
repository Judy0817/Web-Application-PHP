<?php require_once('include/connection.php') ?>

<?php

        if(isset($_POST['operation'])){
            $input1=$_POST["input1"];
            $input2=$_POST["input2"];
            $operation=$_POST["operation"];
          
           if($operation=="add"){
                $answer=$input1+$input2;
           }
           else if ($operation=="sub"){
                $answer=$input1-$input2;
           }
           else if ($operation=="mul"){
            $answer=$input1*$input2;
           }
           else if ($operation=="div"){
            $answer=$input1/$input2;
           }

        }
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 3</title>
</head>
<body>
    <button><a href="index.html">Home</a></button>
    <br><br><br>

    <form method="POST" >
            <input type="number"  name="input1" placeholder="enter first number">
            <br><br>
            <input type="number" name="input2" placeholder="enter second number">
            <br><br>
            <input type="submit" value="add" name="operation">
            <input type="submit" value="sub" name="operation">
            <input type="submit" value="mul" name="operation">
            <input type="submit" value="div" name="operation">
    </form>
</body>
</html>
<?php mysqli_close($connection); ?>