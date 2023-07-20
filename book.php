<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>book form</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <link href="images/favicon.png" rel="shortcut icon">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
<style>
     select{
        width:47%;
        border:1px solid black;
        padding:10px 15px 10px 15px;
        margin-top: 35px;
        background-color: white;;
    }
    select:focus::placeholder{
 
  color:var(--light-white);
  
   
}
h4{
   font-size: 1.5rem;
   color:var(--light-black);
}
    </style>
</head>
<body>
   
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

<!-- header section ends -->

<div class="heading" style="background:url(images/header-bg-3.png) no-repeat">
   <h1>book now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" method="post" class="book-form">
      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name" required />
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email" required />
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="tel" id="phone" placeholder=" 1234567890" name="phone" pattern="[0-9]{1}[1-9]{9}" required>
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address" required />
         </div>
         <div class="inputBox">
            <span>destination:</span>
            <input type="text" placeholder="enter your destination" name="dest" required />
         </div><br><br>
         <div class="inputBox">
            <span>places:</span>
            <input type="text" placeholder="enter your places within your destination" name="places" required />
         </div><br><br>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests" required />
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals" required />
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving" required />
         </div>
<div class="inputBox">
         <h4>Tour Types:</h4>
        
        <select style="width:570px" name="types" required>
    <option value="">--select--</option>
    <option value="Adventure tourism">Adventure tourism</option>
    <option value="Beach Tourism">Beach Tourism</option>
    <option value="Cultural tourism">Cultural tourism</option>
    <option value="Eco tourism">Eco tourism</option>
    <option value="Medical tourism">Medical tourism</option>
    <option value="Wildlife tourism">Wildlife tourism</option>
   </select><br><br>
</div>
<div class="inputBox">
         <h4>Tour Seats:</h4>
        
        <select style="width:590px" name="seats" required>
    <option value="">--select--</option>
    <option value="Economy Class Seats">Economy Class Seats</option>
    <option value="Premium Economy Class Seats">Premium Economy Class Seats</option>
    <option value="Business Class Seats">Business Class Seats</option>
    <option value="First-Class Seats">First-Class Seats</option>
   </select><br><br>
</div>

   
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->
















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
         <a href="#"> <i class="fas fa-map"></i>karnataka, india -576222 </a>
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