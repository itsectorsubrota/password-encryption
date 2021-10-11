<?php
      $host = "localhost";
       $user = "root";
        $pass = "";
        $data = "night";
        $atmp =0;
//
   $con = mysqli_connect("$host" , "$user" , "$pass" , "$data");
//
   if(isset($_REQUEST['log_in'])){
         $username = $_REQUEST['username'];
              $password = $_REQUEST['password'];
              $atmp = $_REQUEST['hidden'];
              //
              if($atmp<4){
            $query = mysqli_query($con , "select * from night_info where Username='$username' && Password ='$password'");
                  $row = mysqli_num_rows($query);
                    if($row==true){      
                        while(mysqli_fetch_array($query, MYSQLI_BOTH)){
                        header("location:welcome.php");
                          }
                    }    else{
                        //
                        $atmp++;
                               echo '
                               <script>
                               alert("You are attempt number is :" "'.$atmp.'");
                                   </script>
                               ';
                    }
                    //
                    if($atmp==4){
                        echo "
                        <script>
                        alert('You are log in access is denied');
                            </script>
                        ";
                    }
        }
        
   }

?>

<!DOCTYPE html>
<html lang="en">
    <style>
        #form{
            background-color: darkblue;
            padding: 38px;
            font-size: x-large;
            font-family: cursive;
            color: lime;
        }
        .body{
            background-image: url("picture/u4.jpg");
            background-size: cover;
            background-attachment: fixed;
            padding: 12px;
        }
    </style>
<head>
    <!--Bootstrap Link-->
   <link rel="stylesheet" href="css/bootstrap.min.css"/>
   <!--CSS Link-->
   <link rel="stylesheet" href="login.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in form by limit.</title>
</head>
<body class="body">
    <br><br>
    <center>
        <form action="login.php" method="POST" enctype="application/x-www-form-urlencoded" class="was-validated w-50" id="form">
           <?php 
              echo "<input type='hidden' name='hidden' value='".$atmp."'>";
            
           ?>
            <div class="col-sm-34 col-md-12">
                <label for="username">Username:</label>
<input type="text" name="username" id="username" placeholder="Enter your username." class="form-control" maxlength="50" minlength="8" <?php if($atmp==4){?> disabled <?php } ?>  required/> 
            <div class="invalid-feedback alert-danger">As soon as possiable enter your username.</div>
        <div class="valid-feedback alert-success">Your username will be right if you entered correctly.</div>  
        </div>
        
        <br>
        <div class="col-sm-34 col-md-12">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="Enter your valid password." class="form-control" maxlength="50" minlength="8" <?php if($atmp==4) { ?> disabled <?php }?> required/>
            <div class="invalid-feedback alert-danger">As soon as possiable enter your password.</div>
        <div class="valid-feedback alert-success">Your password will be right if you entered correctly.</div>  
        </div>
        <br>
        <div class="col-sm-34 col-md-12">
            <input type="submit" name="log_in" id="click" class="form-control w-50 btn-outline-info" required/>
            </div>
            <br>
            <div class="col-sm-34 col-md-12">
                <input type="reset" class="form-control w-50 btn-outline-danger"/>
                </div>
                <br>
                <div class="col-sm-34 col-md-12">
                    <input type="checkbox" id="click4"  required/>
                    <label for="click4" > Agree to terms and conditions. </label>
                    </div>
                    <br>
                   <strong> Reset your accout </strong> <a href="enjoy/Reset password.html">Forgot Password</a>
        <br><br>
                </form>
    </center>
</body>
</html>