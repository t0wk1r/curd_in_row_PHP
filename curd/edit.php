<?php
include ('config.php');


if(isset($_REQUEST['edit_id'])){
    $edtdata = $_REQUEST['edit_id'];

 $edtdatasql =   "SELECT * FROM student WHERE ID = $edtdata  ";

$finaleditdatasql = mysqli_query($conn, $edtdatasql);

if($finaleditdatasql){
   $data =  mysqli_fetch_assoc($finaleditdatasql);{
            // $id = $data['ID'];
            $fullname = $data['fullname'];
            $address = $data['address'];
            $email = $data['email'];
    }
}

}


if(isset($_REQUEST['submit'])){
    $edtdata = $_REQUEST['edit_id'];
    $fullname = $_REQUEST['fullname'];
    $address = $_REQUEST['address'];
    $email = $_REQUEST['email'];

    $upsql = "UPDATE student SET fullname='$fullname', address='$address', email= '$email' WHERE ID = $edtdata  ";

   $final =  mysqli_query($conn,$upsql);

   if($final == true){
       echo "done";
       header('Location: view.php');
   }else{
       echo "none";
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
        <input type="text" name="fullname" value="<?php if(isset($fullname)){ echo $fullname;}?>"><br><br>
        <label for="">Address </label><br>
        <input type="text" name="address" value="<?php if(isset($address)){ echo $address;}?>"><br><br>
        <label for="">Email </label><br>
        <input type="text" name="email" value="<?php if(isset($email)){ echo $email;}?>"> <br><br>
        <br>
        <input type="submit" name="submit" value="UPDATE">

    </form>
    
</body>
</html>