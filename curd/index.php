<?php

include ('config.php');

if(isset($_POST['submit'])){
  $fullname =  $_POST['fullname'];
  $address =  $_POST['address'];
  $email =  $_POST['email'];


 $infosql =  "INSERT INTO student(fullname,address,email) VALUES('$fullname','$address','$email')";

  $finalinfosql =   mysqli_query($conn,$infosql);

    if($finalinfosql == TRUE){
        echo "data Submit";
        header("Location: view.php");
    }else{
        echo "not submit";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input information</title>
</head>
<body>
    <form action="" method="POST" style="width: 400px; margin: auto;">
        <label for="">Name </label><br>
        <input type="text" name="fullname"><br><br>
        <label for="">Address </label><br>
        <input type="text" name="address"><br><br>
        <label for="">Email </label><br>
        <input type="text" name="email"><br><br>
        <br>
        <input type="submit" name="submit" value="submit">
    </form>  
</body>
</html>