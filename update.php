<?php
session_start();
$con = mysqli_connect("localhost", "root", "", "book_db");

if(isset($_POST['update_data']))
{
    $id = $_POST['id'];

    $name = $_POST['name'];

    $email = $_POST['email'];

    $phone = $_POST['phone'];

    $address = $_POST['address'];

    $guests = $_POST['guests'];

    $arrivals = $_POST['arrivals'];

    $leaving = $_POST['leaving'];

    $query = "UPDATE book_form SET name='$name',email='$email',phone='$phone',address='$address',guests='$guests',arrivals='$arrivals',leaving='$leaving' WHERE id='$id' ";

    $query_run = mysqli_query($con, $query);
    
    if($query_run)
    {
        $_SESSION['status']="Data Updated Sucessfully";
        header("location:edit.php");

    }
    else
    {
        $_SESSION['status']="Data Not Updated";
        header("location:edit.php");
    }

}
?>