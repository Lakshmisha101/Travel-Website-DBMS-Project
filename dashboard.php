<!DOCTYPE html>
<html>
    <title>dashboard</title>
    <link href="images/favicon.png" rel="shortcut icon">
	<head>
		
		<!-- CSS property to place div
			side by side -->
		<style>
			#leftbox {
				float:left;
				background:Red;
				width:18%;
				height:120px;
                margin-left:20px;
             
			}
			#middlebox{
				float:left;
				background:Green;
				width:18%;
				height:120px;
                margin-left:10px;
			}
			#rightbox{
				float:left;
				background:blue;
				width:18%;
				height:120px;
                margin-left:10px;
			}
            #rightbox1{
				float:left;
				background:orangered;
				width:18%;
				height:120px;
                margin-left:10px;
			}
            #rightbox2{
				float:left;
				background:purple;
				width:18%;
				height:120px;
                margin-left:10px;
			}
            h2{
                margin-left: 15px;
            }
			h1{
				color:green;
				text-align:center;
			}
            h3{
                font-size:30px;
                margin-left: 2px;
               
            }
            .nb-0{
                text-align:center;
               
            }
           .btn{
            margin-top:170px;
            text-align: center;
            display:center;
            height:50px;
            width:100px;
            margin-left:600px;
            font-size: 150%;
         
           }
           .btn:hover{
            color:white;
            background-color:purple;
           }
            
		</style>
	</head>
	
	<body style="background:url(images/img-16.jpg) no-repeat">
       
		<div id = "boxes">
			<h1>DASHBOARD</h1>
            
			<div id = "leftbox">
				<h2>CUSTOMER:</h2>
                
				<?php 
                 $host = "localhost";  
                 $user = "root";  
                 $password = '';  
                 $db_name = "book_db";  
                   
                 $con = mysqli_connect($host, $user, $password, $db_name); 
                $dash="SELECT * FROM book_form";
                $dash_run=mysqli_query($con,$dash);
                if($total=mysqli_num_rows($dash_run))
                {
                    echo '<h3 class="nb-0">'.$total.' </h4>';
            

                }
                else
                {
                    echo '<h4 class="nb-0"> No Data </h4>';
                }
                ?>
               
			</div>
			
			<div id = "middlebox">
				<h2>DESTINATION:</h2>
		

                <?php 
                 $host = "localhost";  
                 $user = "root";  
                 $password = '';  
                 $db_name = "book_db";  
                   
                 $con = mysqli_connect($host, $user, $password, $db_name); 
                $dash="SELECT * FROM destination";
                $dash_run=mysqli_query($con,$dash);
                if($total=mysqli_num_rows($dash_run))
                {
                    echo '<h3 class="nb-0">'.$total.' </h4>';

                }
                else
                {
                    echo '<h4 class="nb-0"> No Data </h4>';
                }
                ?>


			</div>
			
			<div id = "rightbox">
				<h2>PLACES:</h2>
                
                <?php 
                 $host = "localhost";  
                 $user = "root";  
                 $password = '';  
                 $db_name = "book_db";  
                   
                 $con = mysqli_connect($host, $user, $password, $db_name); 
                $dash="SELECT * FROM packages";
                $dash_run=mysqli_query($con,$dash);
                if($total=mysqli_num_rows($dash_run))
                {
                    echo '<h3 class="nb-0">'.$total.' </h4>';

                }
                else
                {
                    echo '<h4 class="nb-0"> No Data </h4>';
                }
                ?>
                

			</div>
            <div id = "rightbox1">
				<h2>PACKAGES:</h2>
		
                
                <?php 
                 $host = "localhost";  
                 $user = "root";  
                 $password = '';  
                 $db_name = "book_db";  
                   
                 $con = mysqli_connect($host, $user, $password, $db_name); 
                $dash="SELECT * FROM places";
                $dash_run=mysqli_query($con,$dash);
                if($total=mysqli_num_rows($dash_run))
                {
                    echo '<h3 class="nb-0">'.$total.' </h4>';

                }
                else
                {
                    echo '<h4 class="nb-0"> No Data </h4>';
                }
                ?>


			</div>
            <div id = "rightbox2">
				<h2>TOURS:</h2>
			
                <?php 
                 $host = "localhost";  
                 $user = "root";  
                 $password = '';  
                 $db_name = "book_db";  
                   
                 $con = mysqli_connect($host, $user, $password, $db_name); 
                $dash="SELECT * FROM tour";
                $dash_run=mysqli_query($con,$dash);
                if($total=mysqli_num_rows($dash_run))
                {
                    echo '<h3 class="nb-0">'.$total.' </h4>';

                }
                else
                {
                    echo '<h4 class="nb-0"> No Data </h4>';
                }
                ?>

			</div>
		</div>
            </div>
            <a href="home.php"><button type="submit" class="btn">Back</button></a>
	</body>
</html>				
