<?php
	$host='localhost';
	$username='root';
	$password='';
	$dbname = "book_db";
	$conn=mysqli_connect($host,$username,$password,"$dbname");
	if(!$conn)
        {
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>