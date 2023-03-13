<?php require_once('include/connection.php') ?>

<?php

$reg_error=null;
$nic_error=null;
$tel_error=null;


if(isset($_POST['submit2'])){
    $regNumber=$_POST["regNumber"];
    $nicNo=$_POST["nicNo"];
    $telNumber=$_POST["telNumber"];

    if(empty(trim($regNumber))){
        $reg_error="Field Registration No is empty.";
    }
    if(empty(trim($nicNo))){
        $nic_error="Field Nic No is empty.";
    }
    if(empty(trim($telNumber))){
        $tel_error="Field Telephone No is empty.";
    }
    if(!empty(trim($regNumber)) && !empty(trim($nicNo)) && !empty(trim($telNumber))){
        $query = "INSERT INTO table02 (regNumber,nicNo,telNumber)
        VALUES ('{$regNumber}','{$nicNo}','{$telNumber}')";

        $result=mysqli_query($connection,$query);
         if($result){
            echo "1 record added successfully.";
        }else{
            echo "Database Query failed!";
        }
    }  
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Form 2</title>
</head>
<body>
    <div class="container">
    <a href="index.html" class="btn btn-primary">Home</a>
    <br><br><br>

    <form method="POST" >
            <input type="text"  name="regNumber" placeholder="ENxxxxx">
            <p class="error reg-error"><?php echo $reg_error ?></p>
            <br><br>
            <input type="text" name="nicNo" placeholder="ID number">
            <p class="error nic-error"><?php echo $nic_error ?></p>
            <br><br>
            <input type="text" name="telNumber" placeholder="Tel-Number">
            <p class="error tel-error"><?php echo $tel_error ?></p>
            <br><br>
            <input type="submit" value="submit" name="submit2" class="btn btn-primary">
            
            <a href="result.php" class="btn btn-primary">Result</a>
    </form>
    </div>


</body>
</html>
<?php mysqli_close($connection); ?>