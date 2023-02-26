<?php require_once('include/connection.php') ?>
<?php
if(isset($_POST['submit1']))
{
    $title=$_POST['title'];
    $name=$_POST['name'];
    $regNumber=$_POST['regNumber'];
    $email=$_POST['email'];


    $query = "INSERT INTO table01 (title,name,regNumber,email)
                VALUES ('{$title}','{$name}','{$regNumber}','{$email}')";

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
    <title>Form 1</title>
</head>
<body>
   




    <button><a href="index.html">Home</a></button>
    
    <br><br><br>

    <form method="POST">
            <input type="text"  name="title" placeholder="Titile">
            <br><br>
            <input type="text" name="name" placeholder="Your name">
            <br><br>
            <input type="text" name="regNumber" placeholder="ENXXXXX">
            <br><br>
            <input type="email" name="email" placeholder="E-mail">
            <br><br>
            <button type="submit" name="submit1">Submit</button>
         
    </form>
    
</body>
</html>
<?php mysqli_close($connection); ?>