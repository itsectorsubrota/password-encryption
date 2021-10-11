<?php
  session_start();
require_once "db.php";
//call the form and make the secure info to connect with database start 
if(isset($_POST['sign_up'])){
    $first_name = mysqli_real_escape_string ($con , $_POST['f_name']);
    $last_name = mysqli_real_escape_string ($con ,$_POST['l_name']);
    $username = mysqli_real_escape_string ($con ,$_POST['username']);
    $email  = mysqli_real_escape_string ($con ,$_POST['email']);
    $password =mysqli_real_escape_string ($con , $_POST['password']);
    $password_hash = password_hash($password , PASSWORD_BCRYPT);
    //
    date_default_timezone_set("asia/dhaka");
    $date = date("d ,M , Y");
    //
    //call the form and make the secure info to connect with database end 

//select the table query start 
$count_password = strlen($password);
if($count_password>=10 && $count_password<=20){
$select = "SELECT Email FROM password_hash WHERE Email='$email'";
$query = mysqli_query($con  ,$select);
$row_count = mysqli_num_rows($query);
if($row_count > 0){
    ?>
<script type="text/javascript">
alert("This email already used tray another email");
window.location="signup.html";
    </script>
        <?php
}else{
//select the table query start 

    //data transfer in data table start  
    $count_pass = strlen(  $password);
   if($count_pass >=10 && $count_pass<=20){
    $insert = "INSERT INTO password_hash (First_Name ,Last_Name , Username ,Email ,Password , Date )
    VALUES ('$first_name' , '$last_name' , '$username' , '$email' , '$password_hash' ,    '$date')";
    $result = mysqli_query($con , $insert);  //or die("Query failed")
  //data transfer in data table end 

   //check the connection and redirect the user start 
    if($result==true){
        $_SESSION['username'] = $username; 
        header("location:welcome.php");
    }else{
        ?>
<script type="text/javascript">
alert("You have some issue to connect with database");
window.location="signup.html";
    </script>
        <?php
    }
}else{
    ?>
    <script type="text/javascript">
    alert("Please enter your password betwenn 10 to 20");
    window.location="signup.html";
        </script>
            <?php
   // echo "Please enter your password betwenn 10 to 20";
}
      }
    }else{
        ?>
        <script type="text/javascript">
        alert("Please enter your password between 10 to 20");
        window.location="signup.html";
            </script>
                <?php  
    }
    //check the connection and redirect the user end 
      mysqli_close($con);
    }
?>