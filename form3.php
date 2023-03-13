<?php require_once('include/connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Form 3</title>
</head>
<body>

    <div class="container">
    <a href="index.html" class="btn btn-primary">Home</a>
    <br><br><br>

    <form method="POST" >
            <input type="number"  name="input1" placeholder="enter first number">
            <br><br>
            <input type="number" name="input2" placeholder="enter second number">
            <br><br>
            <input type="submit" value="add" name="operation" class="btn btn-primary">
            <input type="submit" value="sub" name="operation" class="btn btn-primary">
            <input type="submit" value="mul" name="operation" class="btn btn-primary">
            <input type="submit" value="div" name="operation" class="btn btn-primary"><br><br>
            <a href="result.php" class="btn btn-primary">Result</a>
    </form>
    </div>

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
</body>
</html>
<?php mysqli_close($connection); ?>