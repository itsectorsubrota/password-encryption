
<!DOCTYPE html>
<html lang="en">
<head>
    <!--CSS Link-->
    <link rel="stylesheet" href="website.css"/>
    <!--Bootstrap Link-->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!--JQuery Link
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
     Font-awsome Link
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        -->
        
    <style>
        #bb{
            transition-duration:3 min;
        }
        #div{
            background-color: yellow;
            color: yellowgreen;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>  Welcome Page </title>
</head>
<body id="bd">
    <br><br>
<center>
     <?php
     session_start();
     if(  $_SESSION['username']){
echo "<h2 style='color:green;' class='h2'> Welcome this is  " .  $_SESSION['username']  . "</h2>";
?>
 <div align="right">
 <a href="logout.php" class="btn btn-danger">Log Out</a>
 </div>
<?php
     }else{
         header("location:login_form.html");
     }

?>
</center>
    <br><br>
<!--Navbar strat -->
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <a class="navbar-brand" href="#">Navbar</a> 
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
   <span class="navbar-toggler-icon"></span> 
   </button> <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto"> <li class="nav-item active"> 
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> 
   </li> <li class="nav-item"> <a class="nav-link" href="#">Link</a>
 </li> 
   <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a> 
   <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
       <a class="dropdown-item" href="website.html">Home</a>
    <a class="dropdown-item" href="About Me.html">About Me</a> 
    <div class="dropdown-divider"></div> 
   <a class="dropdown-item" href="contact_form.html">Contact Me</a>
 </div> 
</li> 
   <li class="nav-item"> 
   <a class="nav-link disabled" href="#">Disabled</a> 
</li>
 </ul> 
<form class="form-inline my-2 my-lg-0"> 
   <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> </form> 
   </div>
    </nav>
    
           
<!--Navbar end -->
<br><br>
<!-- Carousel start -->
<center>
<div class="div56">
            <center>
                <br>
            <div id="dv3" class="col-sm-34 col-md-23 col-lg-12">  
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
                <ol class="carousel-indicators"> <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                 <li data-target="#carouselExampleIndicators" data-slide-to="1">
                </li> <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> 
                </ol> <!--
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> 
                <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> 
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> 
                </a> -->
                <div class="carousel-inner" >
                     <div class="carousel-item active"> 
                <img id="img" class="d-block w-100 rounded-circle" src="picture/s2.jpg"  alt="subrota chandra working about this website."> 
            </div> 
                <div class="carousel-item"> 
                    <img  id="img" class="d-block w-100 rounded-circle" src="Image/photo-1457089328109-e5d9bd499191.jpeg" alt="Second slide">
                </div> <div class="carousel-item"> 
                    <img class="d-block w-100 rounded-circle" id="img"  src="picture/subrota2.PNG" alt="subrota chandra"> 
                </div> 
                <br><br>
             </center>
            </div>
                <br><br>
                </div>
            </div>
            </div>

    </center>

      
<!-- Carousel end -->


<br><br><br><br><br><br>
<!--Form start -->

<center>
<div class="col-sm-12 col-md-14  w-50" id="ctm">
<b>Contact Me</b>
    </div>
    <form action="mailto:subrota45278@gmail.com" method="POST" enctype="text/plain" class="was-validated w-50" id="form">
           <br>
    <div class="col-sm-12 col-md-14">
        <label for="name" class="form-check-label">Name:</label>
        <input type="text" name="name" id="name" placeholder="Enter your valid name." class="form-control" required/>
        <div class="invalid-feedback alert-danger">Enter your name as soon as possible.</div>
        <div class="valid-feedback alert-success">It's will be valid if you entered your valid name.</div>
    </div>
    <br><br>
    <div class="col-sm-12 col-md-14">
        <label for="name" class="form-check-label">Email:</label>
<input type="email" name="email" id="email" placeholder="something@gmail.com" class="form-control" required/>
        <div class="invalid-feedback alert-danger">Enter your email as soon as possible.</div>
        <div class="valid-feedback alert-success">It's will be valid if you entered your valid email.</div>
    </div>
    <br><br>
    <div class="col-sm-12 col-md-14">
        <label for="textFiled" class="form-check-label"> Textfiled: </label>
        <textarea name="text" id="text" rows="6" placeholder="Write your comment" class="form-control" required></textarea>
        </div>
        <br><br>
        <div class="col-sm-12 col-md-14">
            <input type="submit" value="Send" name="log" id="click" class="form-control w-50 btn-outline-info"/>
            </div>
<br><br>
<div class="col-sm-12 col-md-14">
    <input type="reset" value="Delete" class="form-control w-50 btn-outline-danger"/>
    </div>
    <br>
    <center>
        &nbsp;       &nbsp;       &nbsp; <input type="checkbox" id="check" class="form-check-input" required>
        &nbsp;       &nbsp;       &nbsp; <label for="check" class="form-check-label">Agree to terms and conditions.</label>
    </center>
    <br>
    </form>
</center>


<!--form end -->
<br>
<div class="div">
      <h4 style="color: rgb(58, 233, 15);">My skill about coding and programming</h4>
    <ul>
        <li class="html"> html </li>
        <li class="css">  css </li>
        <li class="javascript">javascript</li>
        <li class="jquery"> jquery</li>
        <li class="bootstrap">bootstrap</li>
        <li class="php">php</li>
        <li class="cplus">c++</li>
    </ul>
  </div>
<br><br>
<!--Navbar start -->
<center>
    <div id="nav">
        <div class="navbar navbar-success">
            <ul type="disk">
                <li> <a target="blank" href="contact_form.html">Contact Me </a></li>
                <li>
                   <a target="blank" href="About Me.html">About Me</a>
                </li>
                <li><a target="blank" href="website.html">Home</a></li>
            </ul>
        </div>
           </div>
</center>

<!--navbar end -->
<br><br>
       <!--Font awosome start -->
       <center>
        <p class="fab fa-facebook fa-2x" style="color: blue;">
            Font awosome icon..........
             </p>
             <br><br>
         
             <p class="fab fa-fackebook fa-2x" style="color: blue;"></p>
             <p class="fas fa-youtube fa-2x" style="color: blue;"></p>
         
             <p class="fab fa-whatsapp fa-2x" style="color: blue;"></p>
             <p class="fas fa-skype fa-2x" style="color: blue;"></p>
         
         </p>
         <br>
         <div class="list">
        <ul>
            <li> html </li>
            <li>css</li>
            <li>jquery</li>
            <li>javascript</li>
            <li>c++</li>
            <li>php</li>
            <li>bootstrap</li>
            <li>java</li>
            <li>python</li>
            <li>mysql</li>
            <li> canvas 2d </li>
        </ul>
    </div>
    <br>
<h2 id="cap"> &copy;  This website presented by subrota chandra sharker   </h2>

    <br>

       </center>
       <!--Font awosome end-->
    <br><br>
    <!-- scripting Link-->
<script src="website.js"></script>
</body>
</html>