<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>destination details</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link href="images/favicon.png" rel="shortcut icon">
<style type="text/css">
.bs-example{
margin: 20px;
}
body{
    background:url(images/img-38.jpg) no-repeat;
    background-size:100% 200% ;
}
.edit_btn {
    text-decoration: none;
    padding: 2px 5px;
    background: #2E8B57;
    color: white;
    border-radius: 3px;
}
.del_btn {
    text-decoration: none;
    padding: 2px 5px;
    color: white;
    border-radius: 3px;
    background: #800000;
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
<script type="text/javascript">
$(document).ready(function(){
$('[data-toggle="tooltip"]').tooltip();   
});
</script>
</head>
<body>
<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h2 class="pull-left">Users List</h2>
</div>
<?php
include_once 'database.php';
$result = mysqli_query($conn,"SELECT * FROM destination");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table class='table table-bordered table-striped'>
<tr>
<td style="font-size:20px">ID</td>
<td style="font-size:20px">DESTINATION NAME</td>
<td style="font-size:20px">Edit</td>
<td style="font-size:20px">Delete</td>
</tr>
<?php
$i=0;
while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
    <td style="font-size:20px"><?php echo $row["id"]; ?></td>
    <td style="font-size:20px"><?php echo $row["dest"]; ?></td>
    <td style="font-size:20px"><a href="edit1.php?id=<?php echo $row["id"]; ?>" class="edit_btn" >Edit</a>
    <td style="font-size:20px"><a href="delete3.php?dest=<?php echo $row["dest"]; ?>" class="del_btn">Delete</a></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>
    </div>
    </div>        
    </div>
    </div>
    <a href="admin.php"><button type="submit" class="btn1">Back</button></a>
    </body>
    </html>