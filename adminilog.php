<?php
$con=mysqli_connect("localhost","root","","book_db");


if(isset($_REQUEST["submit"]))
{
$user=$_REQUEST["user1"];
$pass=$_REQUEST["pass1"];
$query=mysqli_query($con,"select * from admin where aname='$user' && pass1='$pass'");
$rowcount=mysqli_num_rows($query);
if($rowcount==true)
{
     session_start();


    if(!isset($_SESSION['loggedin']))
    {
     header('location:admin.php');
    }

}
else
{
      echo "<script type='text/javascript'>alert('Invalid username or password!!')</script>";    
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin login</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link href="images/favicon.png" rel="shortcut icon">

<link rel="stylesheet" type="text/css" href="style.css">

<style>
      body{
            background:  url('../images/img-2.jpg');  
      }
      h1{
        margin-top:0px;
      }
      center{
       
      }
      .Login{
        height: 300px;
        margin-top:20px;
       
color: #fff;
border-style:inset;
padding:20px;
padding-left: 30px;
   
padding-right: 30px;

width:240px;

margin:auto;
margin-top:50px;

height:500px;

      }
      .Login {
  margin-bottom: 20px;
  background:url(images/img-21.png) no-repeat;
  background-size:100% 100% ;
}
input {
  height: 30px;
}
</style>
</head>
<body style="background:url(images/img-17.jpg) no-repeat" >
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>


<center>



<h1>TOURISM MANAGEMENT SYSTEM</h1>


<div style="height:400px" class="Login">

<form>

<h2 style="color:black">Admin Login</h2>

<br>

<input style="width:150px"  type="text" name="user1" placeholder="Username">

<br>

<br>

<input style="width:150px" type="password" name="pass1" placeholder="Password">

<br>

<br>

<br>

<input style="width:50px" type="submit" name="submit" value="Login">

<br>

<br>

<br>

</form>
<a href="home.php"><button type="submit" class="btn">Back</button></a>
</div>

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +123-456-7890 </a>
         <a href="#"> <i class="fas fa-phone"></i> +111-222-3333 </a>
         <a href="#"> <i class="fas fa-envelope"></i> lakshmisha967@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> karnataka, india -576222 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Kishor And Lakshmisha</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

</html>



