<?php require_once('include/connection.php') ?>
<?php

//--------------------------------Table 01 Result----------------------------------------

    $query="SELECT title,name,regNumber,email FROM table01";

    $get_result=mysqli_query($connection,$query);
    if($get_result){
        echo "From First Form ".mysqli_num_rows($get_result)." Records Found! <hr>";

        while($record1=mysqli_fetch_assoc($get_result)){

            echo "Hi ".$record1['title'].". ".$record1['name']." (".$record1['regNumber'].")".", you will be contact via ".$record1['email']."<br>";
        }
    }
    echo "<hr><br><br>";


    //--------------------------------Table 02 Result----------------------------------------

    $query="SELECT regNumber,nicNo,telNumber FROM table02";

    $get_result=mysqli_query($connection,$query);
    if($get_result){
        echo "From First Form".mysqli_num_rows($get_result)." Records Found! <hr>";

        while($record2=mysqli_fetch_assoc($get_result)){

            echo "Following details are saved to the database.<br>";
            echo "Reg No \t : \t".$record2['regNumber']."<br>";
            echo "NIC \t : \t".$record2['nicNo']."<br>";
            echo "Tel No \t : \t".$record2['telNumber']."<br><br>";
        }
    }


     //--------------------------------Table 03 Result----------------------------------------
    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Result</title>
</head>
<body>
    <div class="container">
    <a href="index.html" class="btn btn-primary">Home</a>

    <h1>Form 3 result</h1>

    <p>
   <?php echo $_POST['input1'];?><?php echo $_POST['operation'];?><?php echo $_POST['input2'];?> =<?php echo "$answer" ?>
       

    </p>
    </div>
        
</body>
</html>
<?php mysqli_close($connection); ?>