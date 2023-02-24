<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form 1</title>
</head>
<body>
    <?php
        if(isset($_POST['submit1'])){
            $name=$_POST["name"];
            $title=$_POST["title"];
            $regNumber=$_POST["regNumber"];
            $email=$_POST["email"];
        }
    ?>




    <button><a href="index.html">Home</a></button>
    
    <br><br><br>

    <form method="POST" action="result.php" >
            <input type="text"  name="title" placeholder="Titile">
            <br><br>
            <input type="text" name="name" placeholder="Your name">
            <br><br>
            <input type="text" name="regNumber" placeholder="ENXXXXX">
            <br><br>
            <input type="email" name="email" placeholder="E-mail">
            <br><br>
            <input type="submit" value="submit" name="submit1">
    </form>
    
</body>
</html>