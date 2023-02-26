<?php require_once('include/connection.php') ?>

<?php

if(isset($_POST['submit2'])){
    $regNumber=$_POST["regNumber"];
    $nicNo=$_POST["nicNo"];
    $telNumber=$_POST["telNumber"];

    $query = "INSERT INTO table02 (regNumber,nicNo,telNumber)
                VALUES ('{$regNumber}','{$nicNo}','{$telNumber}')";

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
    <title>Form 2</title>
</head>
<body>
    <button><a href="index.html">Home</a></button>
    <br><br><br>

    <form method="POST" >
            <input type="text"  name="regNumber" placeholder="ENxxxxx">
            <br><br>
            <input type="text" name="nicNo" placeholder="ID number">
            <br><br>
            <input type="text" name="telNumber" placeholder="Tel-Number">
            <br><br>
            <input type="submit" value="submit" name="submit2">
    </form>
</body>
</html>
<?php mysqli_close($connection); ?>