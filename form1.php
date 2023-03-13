<?php require_once('include/connection.php') ?>


<?php

$title_error=null;
$name_error=null;
$reg_error=null;
$email_error=null;
if(isset($_POST['submit1']))
{
        $title=$_POST['title'];
        $name=$_POST['name'];
        $regNumber=$_POST['regNumber'];
        $email=$_POST['email'];
        if(empty(trim($title))){
            $title_error="Field Title No is empty.";
        }
        if(empty(trim($name))){
            $name_error="Field Name No is empty.";
        }
        if(empty(trim($regNumber))){
            $reg_error="Field Reg Number No is empty.";
        }
        if(empty(trim($email))){
            $email_error="Field Email No is empty.";
        }
    
        if(!empty(trim($title)) && !empty(trim($name)) && !empty(trim($regNumber)) && !empty(trim($email))){
        $query = "INSERT INTO table01 (title,name,regNumber,email)
        VALUES ('{$title}','{$name}','{$regNumber}','{$email}')";
        
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
    
    <br><br><br>

    <form method="POST">
            <input type="text" name="title" placeholder="Title">
            <p class="error title-error"><?php echo $title_error ?></p>
            
            <input type="text" name="name" placeholder="Your name">
            <p class="error name-error"><?php echo $name_error ?></p>
            
            <input type="text" name="regNumber" placeholder="ENXXXXX">
            <p class="error reg-error"><?php echo $reg_error ?></p>
            
            <input type="email" name="email" placeholder="E-mail">
            <p class="error email-error"><?php echo $email_error ?></p>
            <br>
            <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
            <a href="result.php" class="btn btn-primary">Result</a>
         
    </form>
</div>
   

    
</body>
</html>
<?php mysqli_close($connection); ?>