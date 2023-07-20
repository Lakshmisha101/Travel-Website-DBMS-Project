<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "book_db");

if(isset($_POST['update_data']))
{
    $id = $_POST['id'];

    $name = $_POST['hotel'];

    $phone = $_POST['phone'];

    $days = $_POST['num_days'];

    $cost = $_POST['cost'];

    $discount = $_POST['discount'];


    $query = "UPDATE packages SET hotel='$name',contact='$phone',num_days='$days',cost='$cost',discount='$discount' WHERE id='$id' ";

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status']="Data Updated Sucessfully";
        header("location:edit3.php");

    }
    else
    {
        $_SESSION['status']="Data Not Updated";
        header("location:edit3.php");
    }

}
?>