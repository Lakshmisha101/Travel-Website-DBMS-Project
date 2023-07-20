<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <title>updated details</title>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Edit Option</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-betal/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
   <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link href="images/favicon.png" rel="shortcut icon">
</head>
<style>
   /* Style inputs, select elements and textareas */
input[type=text]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}
input[type=tel]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;

}
input[type=date]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-left:10px;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  margin-top:130px;
  margin-bottom: 70px;
  margin-left: 600px;
  margin-right:600px ;
}

/* Floating column for labels: 25% width */
.form-group mb-3{
  float: left;
  width: 25%;
  margin-top: 6px;
}
.btn.btn-primary{
  margin-top:20px;
}
body {
  background:url('images/img-28.jpg') no-repeat;
  background-size: 200% 200%;

}
/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .form-group mb-3, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
} 
.btn1{
            margin-top:-20px;
            text-align: center;
            display:center;
            height:50px;
            width:100px;
            margin-left:600px;
            font-size: 150%;
         
           }
           .btn1:hover{
            color:white;
            background-color:purple;
           }
            
  </style>
<body>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">

    <?php
    if(isset($_SESSION['status']))
    {
      echo "<h4>" . $_SESSION['status'] . "</h4>";
      unset($_SESSION['status']);
    }
    ?>
      <div class="card mt-5">
        <div class="card-header">
          <h4>  UPDATE DATA INTO DATABASE  </h4>
</div>
<div class="card-body">

<form action="update3.php" method="POST">

<div class="form-group mb-3">
  <label for="">ID</label>
  <input type="text" name="id" class="form-control"  placeholder="enter your ID"  required>
</div>

   <div class="form-group mb-3">
   <label for="">HOTEL:</label><br><br>
   <select  class="form-control"  name="hotel" required>
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
   </div>

   <div class="form-group mb-3">
    <label  for="">NO OF DAYS:</label><br>
    <input type="text"  class="form-control"   name="num_days" id="days" placeholder="Enter the No.Of Days" required /><br>
    </div>

    <div class="form-group mb-3">
    <label class="cost" name="cost" for="">COST:</label><br>
    <input type="text"  class="form-control"   name="cost" id="price" READONLY/><br>
    </div>
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
<div class="form-group mb-3">
<label for="">
        <h3>  Please enter your mobile number</h3>
        </label>
        <input class="form-control"   type="tel" name="phone" id="phone" placeholder="1234567890" pattern="[1-9]{1}[0-9]{9}"/>
        <br><br>
        </div>

        <div class="form-group mb-3">
   <label  for="">DISCOUNT:</label><br>
   <select  class="form-control"   name="discount">
    <option value="50% OFF">****50% DISCOUNT****</option>
    </div>


    
  <input type="submit" name="update_data" class="btn btn-primary"/>



</form>
</div>
</div>
</div>
</div>
<div>

<a href="pack.php"><button type="submit" class="btn1">Back</button></a>
</body>
</html>