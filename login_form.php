<?php
session_start();
require_once "db.php";
  if(isset($_REQUEST['log_in'])){
      $username = mysqli_real_escape_string ($con ,  $_REQUEST['username']);
      $password =mysqli_real_escape_string ($con ,  $_REQUEST['password']);
      $count_password = strlen($password);
      if($count_password>=10 && $count_password<=20){
    $select = "SELECT Username , Password FROM password_hash WHERE Username='$username'"; //password hashing only need username 
    $result = mysqli_query($con  , $select);
    $row_count = mysqli_num_rows($result);
    if($row_count > 0){
        while($row = mysqli_fetch_assoc($result)){
            //password hashing code start 
        if (password_verify($password , $row['Password'])){
            header("location:welcome.php");
            $_SESSION['username'] = $username; 
        }else{
            ?>
        <script type="text/javascript">
        alert("You are username or password was mismatched");
        window.location="login_form.html";
            </script>
                <?php
        }
         //password hashing code end 
 }
    }else{
        ?>
        <script type="text/javascript">
        alert("You are username or password was mismatched");
        window.location="login_form.html";
            </script>
                <?php
    }
}else{
    ?>
    <script type="text/javascript">
    alert("Please enter your password between 10 to 20");
    window.location="login_form.html";
        </script>
            <?php 
}
  }
?>