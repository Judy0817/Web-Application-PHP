<?php require_once('include/connection.php') ?>



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
        <a href="viewAll.php" class="btn btn-primary">View All</a>
        <a href="addRecord.php" class="btn btn-primary">Add Record</a>
        <a href="search.php" class="btn btn-primary">Search</a><br><br>

   
    <?php

//--------------------------------Table 01 Result----------------------------------------

    $query="SELECT id,firstName,middleName,lastName,dateOfBirth,gender,salary FROM employees ";

    $get_result=mysqli_query($connection,$query);
    if($get_result){
        echo "From Table employees ".mysqli_num_rows($get_result)." Records Found! <hr>";

        while($record1=mysqli_fetch_assoc($get_result)){

            if($record1['gender']==0)
            {
                $gender1 = "male";
            }
            else{
                $gender1 = "female";
            }
           // echo "Hi ".$record1['title'].". ".$record1['name']." (".$record1['regNumber'].")".", you will be contact via ".$record1['email']."<br>";
           // echo 
            echo "First Name    : ".$record1['firstName']."<br>";
            echo "Middle Name    : ".$record1['middleName']."<br>";
            echo "Last Name    : ".$record1['lastName']."<br>";
            echo "Date Of Birth    : ".$record1['dateOfBirth']."<br>";
            echo "Gender    : ".$gender1."<br>";
            echo "Salary    : ".$record1['salary']."<br><hr>";
        }
    }
    echo "<hr><br><br>"; 

?>
    </div>
        
</body>
</html>
<?php mysqli_close($connection); ?>