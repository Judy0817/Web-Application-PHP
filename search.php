<?php require_once('include/connection.php') ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Search</title>
</head>
<body>
    <div class="container">
        <a href="index.html" class="btn btn-primary">Home</a>
        <a href="viewAll.php" class="btn btn-primary">View All</a></button>
        <a href="addRecord.php" class="btn btn-primary">Add Record</a></button>
        <a href="search.php" class="btn btn-primary">Search</a><br><br>

<form method="POST" >
        <input type="text" name="search" placehoder="Search Data">
        <input type="submit" name="submit" value="submit">
</form>


<div class="container">
    <table class="table">
        <?php
if(isset($_POST["submit"])){
    $search=$_POST["search"];
    $sql = "select * from employees where firstName='$search' or middleName='$search' or lastName='$search'";
    $result = mysqli_query($connection,$sql);
    if($result){
        if(mysqli_num_rows($result)>0){
            echo '<thread>
            <tr>
            <th>First Name</th>
            <th>Middle Name</th>
            <th>Last Name</th>
            <th> DOB</th>
            <th>Gender</th>
            <th>Salary</th>
            </tr>
            </thread>
            ';
            while($row=mysqli_fetch_assoc($result))
            {
                echo '<tbody>
                <tr>
                <td>'.$row["firstName"].'</td>
                <td>'.$row["middleName"].'</td>
                <td>'.$row["lastName"].'</td>
                <td>'.$row["dateOfBirth"].'</td>
                <td>'.$row["gender"].'</td>
                <td>'.$row["salary"].'</td>
                
                </tr>
                </tbody>';
            }
        }
        

    }
    else{
        echo '<h2>Data Not Found </h2>';
    }


}

?>

</table>

        
</body>
</html>
<?php mysqli_close($connection); ?>