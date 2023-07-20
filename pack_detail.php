<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>package</title>
   <link href="images/favicon.png" rel="shortcut icon">
   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
    body{
      background-color: rgba(0,0,5,0.7);
    }
    .container{
       
        box-shadow:1px 1px 2px 1px grey;
        padding:50px 30px 10px;
        width:30%;
        height:50%;
        margin-left:35%;
    }
    .txt{
        width:100%;
        height:5px;
        border:1px solid brown;
        border-radius:05px;
        padding:20px 15px 20px 15px;
        margin:10px 0px 15px 0px;
    }
    select{
        width:100%;
        border:1px solid brown;
        border-radius:05px;
        border-radius:1px 1px 2px 1px grey;
        padding:10px 15px 10px 15px;

    }
    .heading-title{
      margin-top:-250px;
    }
    .container{
      background:url(images/img-12.jpg) no-repeat;
      background-size:150% 150% ;
    }
    .h1{
      border:1px solid brown;
    }
    </style>
</head>
<body style="background:url(images/img-13.jpg) no-repeat">
   
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



<div class="heading">
 

   </div>
<section class="booking">
<form action="packconn.php" method="post" >
   <h1 class="heading-title">BOOK YOUR PACKAGE</h1>
<div class="container">
   <form method="post" class="book-form">
   <label style="font-size:18px">HOTEL:</label><br><br>
   <select name="hotel" required>
    <option value="">--select--</option>
    <option value="Taj Lake Palace">Taj Lake Palace</option>
    <option value="Emirates Palace">Emirates Palace</option>
    <option value="Ritz Paris">Ritz Paris</option>
    <option value="Hotel plaza">Hotel plaza</option>
    <option value="Atlantis Bahamas">Atlantis Bahamas</option>
    <option value="Soneva Jani">Soneva Jani</option>
    <option value="La Mamounia">La Mamounia</option>
    <option value="Soneva Kiri">Soneva Kiri</option>
    <option value="The leela">The leela</option>
    <option value="Bellagio">Bellagio</option>
    <option value="Aman Resorts">Aman Resorts</option>
    <option value="Lucky Palace">Lucky Palace</option>
   </select><br><br>

    <label  style="font-size:18px">NO OF DAYS:</label><br>
    <input type="text" class="txt" name="num_days" id="days" placeholder="Enter the No.Of Days" required /><br>

    <label class="cost" name="cost" style="font-size:18px">COST:</label><br>
    <input type="text" class="txt" name="cost" id="price" READONLY/><br>
    <script>
 
    $(document).ready(function () {
      $("#days").change(function() {
        if ($.isNumeric($(this).val())) 
        {
         $('#price').val($(this).val()*2000);
            
        }
      });
    
 
    });
</script>
<label style="font-size:18px" for="">
          Please enter your mobile number</h1>
        </label>
        <input class="txt" type="tel" name="phone" id="phone" placeholder="1234567890" pattern="[1-9]{1}[0-9]{9}"/>
        <br><br>


   <label  style="font-size:18px ">DISCOUNT:</label><br>
   <select name="discount">
    <option value="50% OFF">****50% DISCOUNT****</option>

<input type="submit" class="txt"  name="insert" value="SUBMIT"/>

   </form>
</div>

</section>












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
