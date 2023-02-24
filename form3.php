<?php require_once('include/connection.php') ?>

<?php

        if(isset($_POST['submit'])){
            $input1=$_POST["input1"];
            $input2=$_POST["input2"];
            $operation=$_POST["submit"];
          
           if($operation=="+"){
                $answer=$input1+$input1;
           }
           else if ($operation=="-"){
                $answer=$input1-$input1;
           }
           else if ($operation=="x"){
            $answer=$input1*$input1;
           }
           else if ($operation=="/"){
            $answer=$input1/$input1;
           }

           $query = "INSERT INTO table03 (firstName,lastName,email,password)
                VALUES ('{$firstName}','{$lastName}','{$email}','{$hashed_password}')";

    $result=mysqli_query($connection,$query);
    if($result){
        echo "1 record added.";
    }else{
        echo "Database Query failed!";
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
            <input type="submit" value="+" name="submit">
            <input type="submit" value="-" name="submit">
            <input type="submit" value="x" name="submit">
            <input type="submit" value="/" name="submit">
    </form>
</body>
</html>
<?php mysqli_close($connection); ?>