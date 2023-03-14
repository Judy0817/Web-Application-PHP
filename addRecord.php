<?php require_once('include/connection.php') ?>


<?php

$firstName_error=null;
$MiddleName_error=null;
$LastName_error=null;
$Date_error=null;
$Gender_error=null;
$Salary_error=null;

if(isset($_POST['submit1']))
{
        $firstName=$_POST["firstName"];
        $MiddleName=$_POST["middleName"];
        $LastName=$_POST["lastName"];
        $Date=$_POST["dateOfBirth"];
        $Gender=$_POST["gender"];
        $Salary=$_POST["salary"];
        if(empty(trim($firstName))){
            $firstName_error="Field firstName No is empty.";
        }
        if(empty(trim($MiddleName))){
            $MiddleName_error="Field MiddleName No is empty.";
        }
        if(empty(trim($LastName))){
            $LastName_error="Field LastName No is empty.";
        }
        if(empty(trim($Date))){
            $Date_error="Field Date No is empty.";
        }
        if(empty(trim($Gender))){
            $Gender_error="Field Gender No is empty.";
        }
        if(empty(trim($Salary))){
            $Salary_error="Field Salary No is empty.";
        }
    
        if(!empty(trim($firstName)) && !empty(trim($MiddleName)) && !empty(trim($LastName)) && !empty(trim($Date)) && !empty(trim($Gender)) && !empty(trim($Salary))){

        
        if($Gender=='male')
        {
            $gender=0;
        }
        else{
            $gender=1;

        }
        $query = "INSERT INTO employees (firstName,middleName,lastName,dateOfBirth,gender,salary)
        VALUES ('{$firstName}','{$MiddleName}','{$LastName}','{$Date}','{$Gender}','{$Salary}')";
        
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
    <title>Form 1</title>
</head>
<body>
   
<div class="container">
        <a href="index.html" class="btn btn-primary">Home</a>
        <a href="viewAll.php" class="btn btn-primary">View All</a></button>
        <a href="addRecord.php" class="btn btn-primary">Add Record</a></button>
        <a href="search.php" class="btn btn-primary">Search</a><br><br>
    
    <br><br><br>

    <form method="POST">
            <input type="text" name="firstName" placeholder="firstName">
            <p class="error firstName-error"><?php echo $firstName_error ?></p>
            
            <input type="text" name="middleName" placeholder="MiddleName">
            <p class="error MiddleName-error"><?php echo $MiddleName_error ?></p>
            
            <input type="text" name="lastName" placeholder="LastName">
            <p class="error LastName-error"><?php echo $LastName_error ?></p>
            
            <label for="DOB">Date Of Birth </label><br>
            <input type="date" name="dateOfBirth" placeholder="Date Of Birth">
            <p class="error Date-error"><?php echo $Date_error ?></p>

            <label for="DOB">Gender </label><br>
            <input type="text" name="gender" placeholder="Male/Female">
          
            <p class="error Gender-error"><?php echo $Gender_error ?></p>

            <input type="number" name="salary" placeholder="Salary">
            <p class="error Salary-error"><?php echo $Salary_error ?></p>
            <br>
            <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
            <a href="viewAll.php" class="btn btn-primary">View All</a>
         
    </form>
</div>
   

    
</body>
</html>
<?php mysqli_close($connection); ?>