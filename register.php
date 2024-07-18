<?php 
// User login check
if (isset($_SESSION['UserId'])) {
    header('');
  }
  $servername="localhost";
  $username="root";
  $password="";
  $dbname="dems";
  //create connection
  $conn=mysqli_connect($servername,$username,$password,$dbname);
  //check connection
  if(!$conn){
      die("connection failed : " .mysqli_connect_error());
  }
  if(isset($_POST['register']))
      {
          // Storing image path in database
          if(empty($_FILES['inpFile']['name']))
          {
              $target = '../static/images/userlogo.png';
          }
          else
          {
              // Unique profile image name for each user
              $profileImageName = time() .'_'. $_FILES['inpFile']['name'];
              $target = '../static/profileImages/' . $profileImageName;
          }
          
  
          $fullname = $_POST['full_name'];
          $email = $_POST['email'];
          $username = $_POST['username'];
          $password = md5($_POST['password']);
          $signupError = "";
          $Photo=$_FILES['inpFile']['name'];
         
          $RegDate="";{
          $ret=mysqli_query($conn,"select email from user where email='$email'");
        $result=mysqli_fetch_array($ret);
        if($result>0){
            echo "<script>alert('email alredy exits use another email');</script>";
        }
        else
          {
            $sql=mysqli_query($conn, "insert into user(full_name,email,username,password,photo) values('$fullname', '$email', '$username', '$password','$Photo')");                                                                                                  
        /*  $sql="INSERT INTO user VALUES('$fullname','$email','$username','$UserId','$password', '$Photo', '$RegDate')";
  if(mysqli_query($conn, $sql)){*/
    if($sql){
    echo "<script>alert('new record created successfully');</script>";
    header('location:pro1.php');
  }else{
  echo "Error: " .$sql. "<br>" .mysqli_error($conn);
  }
  }
  mysqli_close($conn);
      }}
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../New1/images/wallet.png" sizes="16x16" type="image/png">
    <link rel="stylesheet" href="../New1/css/2-sign-up.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <title>Expense Tracker</title>    
</head>
<body>

    <div class="container">
        
        <div class="mob-hidden">
            <h1>Create Your Account!</h1>
        </div>

        <div class="img-container">
            <h1>Create Your Account!</h1>
            <img src="../New1/images/registration.jpg" alt="">    
        </div>

        <form action="" method="post" id="form" onsubmit = "return validate()" enctype="multipart/form-data">
            
            <!-- Image Upload -->
            <div class="image-preview" id="imagePreview">
                <img src="" alt="Image Preview" class="image-preview__image" id="profileDisplay">
                <span class="image-preview__default-text"><img src="../New1/images/userlogo.png" alt=""></span>
            </div>
            <label for="imageUpload" class="user-pic-btn" style="cursor: pointer;">Add Photo</label>
            <input type="file" name="inpFile" id="imageUpload" accept="image/*" style="display: none">
            
            <!-- User details -->
            <div class="group">
                <div class="form-control">
                    <i class="fa fa-user u1" aria-hidden="true"></i>
                    <input class="fname" onkeypress="return (event.charCode > 64 && 
                        event.charCode < 91) || (event.charCode > 96 && event.charCode < 123) || (event.charCode==32)" type="text" name="full_name" id="fullname" minlength="2" maxlength="30" placeholder="Full Name" required>
                    <br>
                    <small></small>
                </div>

                <div class="form-control">
                    <i class="fa fa-envelope u2" aria-hidden="true"></i>
                    <input type="email" name="email" id="email" placeholder="Email" required>
                    <br>
                    <small></small>
                </div>
                

                <div class="form-control">
                    <i class="fa fa-user-plus u3" aria-hidden="true"></i>
                    <input type="text" name="username" id="username" placeholder="Username" minlength="3" maxlength="30" required>
                    <br>
                    <small></small>
                    <span id="uname_response" style="font-family: 'Source Sans Pro'; font-size:0.8em ; color:red; font-weight:bold"></span>
                </div>
                
                <div class="form-control">
                    <i class="fa fa-key u4" aria-hidden="true"></i>
                    <input type="password" name="password" id="password" placeholder="Password" minlength="6" maxlength="30" autocomplete="on" required>
                    <br>
                    <small></small>
                </div>

                <div class="form-control">   
                    <i class="fa fa-key u4" aria-hidden="true"></i>
                    <input type="password" name="password_confirm" id="confirmpassword" minlength="6" maxlength="30" placeholder="Confirm Password" autocomplete="on" required>
                    <br>
                    <small></small>
                </div>
                
            </div>
            <button type="submit" value="Submit" name="register" >Complete</button>
            <br>
           
        </form>

    </div>

    <script src="../New1/js/2-sign-up.js"></script>

</body>
</html>