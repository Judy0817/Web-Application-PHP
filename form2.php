<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 2</title>
</head>
<body>
    <button><a href="index.html">Home</a></button>
    <?php


        if(isset($_POST['submit2'])){
            $regNumber2=$_POST["regNumber2"];
            $nicNo=$_POST["nicNo"];
            $telNumber=$_POST["telNumber"];
        }
    ?>




    
    <br><br><br>

    <form method="POST" action="result.php" >
            <input type="text"  name="regNumber2" placeholder="ENxxxxx">
            <br><br>
            <input type="text" name="nicNo" placeholder="ID number">
            <br><br>
            <input type="text" name="telNumber" placeholder="Tel-Number">
            <br><br>
            <input type="submit" value="submit" name="submit2">
    </form>
</body>
</html>