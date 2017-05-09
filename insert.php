<!DOCTYPE html>
<html>



<head>
   
         <title>
		 
		     MOVIE MANIA
		 
         </title>
		 <meta charset="utf-8">
		 <link href="insert.css" rel="stylesheet" type="text/css">
         <link href="images/sd.jpg" rel="icon"/>
	  </head>
	  <body>
	    <div class="main">
		<img src="images/sd.jpg"height="700px"width="1350px">
	  <div class="header">
	           
 <p class="header1"><b><u>MOVIE MANIA (BOOK YOUR MOVIE)</u></b></p>
 <p style="font-size: 20px;  color: purple; font-style: italic; text-align: center; font-weight:bolder;">
"Change Your Movie Experience Through Technology"</p> 
          
	  </div>
	  <div class="lower">
	  <table border="5"cellpadding="15px"cellspacing="0px"bgcolor=""align="center">
			      <tr bgcolor="">
                         
                      <th bgcolor="" ><a href="logout.php">LOGOUT</a></th> 			  
                      <th bgcolor="" ><a href="dele.php">DELETE</a></th>
					   
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
<form method="post" action="insert.php" enctype="multipart/form-data">
<pre align="center">
<h2> <b>   MOVIE ID  </b></h2> <input type="text" name="t1" align="center" bgcolor="white"placeholder="enter movieid  required"/>
<h2> <b>   MOVIE NAME  </b></h2> <input type="text" name="t2" align="center" bgcolor="white"placeholder="enter movie name"required/>
<h2> <b>   SHOW1  </b></h2> <input type="text" name="t3" align="center" bgcolor="white"required/>
<h2> <b>   SHOW2  </b></h2> <input type="text" name="t4" align="center" bgcolor="white"/>
<h2> <b>   SHOW3  </b></h2> <input type="text" name="t5" align="center" bgcolor="white"/>
<h2> <b>   SHOW4  </b></h2> <input type="text" name="t6" align="center" bgcolor="white"/>

	   
 <input type ="submit" name="btn" value="ADDMOVIE" align="center"/>
		</pre>
		</form>
		<?php
		    $con=mysqli_connect("localhost","root","","skt");
	
	if(!$con)
	die("cant connect to server");
	else
{
		   if(isset($_POST["btn"]))
		   {
			
			 // include("includes/in1.php");
			   $pid=$_POST["t1"];
			   $pname=$_POST["t2"];
			   $pdes=$_POST["t3"];
			   $pcost=$_POST["t4"];
			   $psho=$_POST["t5"];
			   $pcho=$_POST["t6"];
			 // $file_name=$_FILES["file"]["name"];
			//  $temp_name=$_FILES["file"]["tmp_name"];
			//   $path="C:/xampp1/htdocs/saikatphpprojects/connectivity/upload".$file_name;
			//   $db_path="upload/".$file_name;
			  // move_uploaded_file($temp_name,$path);
			//  move_uploaded_file($temp_name,"C:/xampp1/htdocs/saikatphpprojects/connectivity/upload/".$file_name);
			   $sql="insert into showtime values('".$pid."','".$pname."','".$pdes."','".$pcost."','".$psho."','".$pcho."')";
			   $n=mysqli_query($con,$sql);
			   if($n==1)
				   echo"<b> MOVIE ADDED!</b>";
			   else
				   "<b> MOVIE NOT FOUND</b>";
		   }
		   }		 
		  
		 
session_start();
if(isset($_SESSION["user"]))
	echo"";
 else
	header("location:admin.php");
 ?>    
		</div>
		
		</div>
		
	  </body>
	  </html>