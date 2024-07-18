<?php
include_once'db.php';
if(isset($_POST['login']))
{
    $username = $_POST['username'];
   /* $password = $_POST['password'];*/
   $password = md5($_POST['password']);
    
    $query=mysqli_query($conn,"SELECT * from  user where username='$username'&& password='$password'");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
        
        $_SESSION['detsuid']=$ret['ID'];
        header('location:dash.php');

       
    }
    else
    {
        echo "<script>alert('ivalid username and password');</script>";
    }
    
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../New1/images/wallet.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="../New1/css/login.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Expense Management</title>
</head>

<body>
    <div class="container">

        <div class="mob-hidden">
            <h1>EMS</h1>
        </div>

        <div class="top-heading">
            <h1 style="color:rgba(255, 0, 0, 0.54);">DEMS</h1>
            <h1> Daily Expense Management System</h1>
        </div>
        <form action="" method="post" onsubmit = "return validate()" id="form1">

            <div class="group">


                <div class="form-controller">
                <i class="fa fa-user-plus u3" aria-hidden="true"></i>
                <input type="text" name="username" placeholder="Username" id="user1" required>
                <br>
                <small></small>
                </div>

                <div class="form-controller">
                <i class="fa fa-key u4" aria-hidden="true"></i>
                <input type="password" name="password" placeholder="Password" id="pass1" autocomplete="on" required>
                <br>
                <small></small>
                </div>

            </div>
            <button type="submit" class="sign-in" name="login">Log In</button>

            <br>
           
            
            <div class="new-account">
                <span style="color: rgba(0, 0, 0, 0.54); font-weight: bolder; font-family: 'Source Sans Pro';">Don't have an account?</span> 
                <a href="../New1/register.php" style="text-decoration: none;"><span style="color: rgba(5, 0, 255, 0.81); font-weight: bolder; font-family: 'Source Sans Pro';">Sign Up Now</span></a>
            </div>

        </form>

        <div class="img-container">
            <img src="../New1/images/login.jpg" alt="Login-screen-picture">
        </div>
    </div>

<script src="../New1/js/index.js"></script>
</body>

</html>