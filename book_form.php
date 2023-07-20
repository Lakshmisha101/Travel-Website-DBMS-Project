<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];
      $dest = $_POST['dest'];
      $places = $_POST['places'];
      $types = $_POST['types'];
      $seats = $_POST['seats'];



      $request = " insert into book_form(name, email, phone, address, guests, arrivals, leaving) values('$name','$email','$phone','$address','$guests','$arrivals','$leaving') ";
   $query = mysqli_query($connection, $request) or die(mysqli_error($connection));

      header('location:book.php'); 
if($query==1)
{
   $ins="insert into destination(dest) values('$dest')";
      $query = mysqli_query($connection, $ins) or die(mysqli_error($connection));
      $inss="insert into places(places) values('$places')";
      $query = mysqli_query($connection, $inss) or die(mysqli_error($connection));
      $insss="insert into tour(types,seats) values('$types','$seats')";
      $query = mysqli_query($connection, $insss) or die(mysqli_error($connection));
}
   }

?>