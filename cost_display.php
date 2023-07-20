<?php
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection, 'book_db');


if(isset($_POST['insert']))
{
    $hotel = $_POST['hotel'];
    $num_days = $_POST['num_days'];
    if($num_days>=30)
    {
        
    }



    $query = "INSERT INTO packages(hotel,num_days,cost,contact,discount) VALUES ('$hotel','$num_days','$cost1','$contact','$discount')";
    $query_run = mysqli_query($connection,$query);

    header('location:book.php'); 
     

}else{
   echo 'something went wrong please try again!';
}


?>