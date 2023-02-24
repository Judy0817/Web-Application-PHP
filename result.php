<?php require_once('include/connection.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>
    <button><a href="index.html">Home</a></button>

        <!---------------Form 1 result------------------------------>
        <h1>Form 1 result</h1>
        <p>
            <!-- Hi <?php echo $_POST['title'];?>. <?php echo $_POST['name'];?> ( <?php echo $_POST['regNumber'];?>
             ), you will be contact via <?php echo $_POST['email'];?>. -->
        </p>


        <!---------------Form 2 result------------------------------>
        <h1>Form 2 result</h1>
        <p>
            <!-- Following detais are saved to the database.<br><br>
            Reg No.     :  <?php echo $_POST['regNumber2'];?><br>
            NIC         :  <?php echo $_POST['nicNo'];?><br>
            Tel. No.    :  <?php echo $_POST['telNumber'];?><br> -->

        </p>

        <!---------------Form 3 result------------------------------>
        <h1>Form 3 result</h1>

        <p>
        <!-- <?php echo $_POST['input1'];?><?php echo $_POST['submit3'];?><?php echo $_POST['input2'];?> =<?php echo "$answer" ?>
           -->

        </p>
</body>
</html>
<?php mysqli_close($connection); ?>