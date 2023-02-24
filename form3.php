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
    <?php


        if(isset($_POST['submit3'])){
            $input1=$_POST["input1"];
            $input2=$_POST["input2"];
            $operation=$_POST["submit3"];
          
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
        }
    ?>




    
    <br><br><br>

    <form method="POST" action="result.php" >
            <input type="number"  name="input1" placeholder="enter first number">
            <br><br>
            <input type="number" name="input2" placeholder="enter second number">
            <br><br>
            <input type="submit" value="+" name="submit3">
            <input type="submit" value="-" name="submit3">
            <input type="submit" value="x" name="submit3">
            <input type="submit" value="/" name="submit3">
    </form>
</body>
</html>