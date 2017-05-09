<!DOCTYPE html>
<html>



<head>
   
         <title>
		 
		     MOVIE MANIA
		 
         </title>
		 <meta charset="utf-8">
		 <link href="user.css" rel="stylesheet" type="text/css">
         <link href="images/sd.jpg" rel="icon"/>
	  </head>
	  <body>
	    <div class="main">
		<img src="images/sc.jpg"height="700px"width="1350px">
	  <div class="header">
	           
 <p class="header1"><b><u>MOVIE MANIA (BOOK YOUR MOVIE)</u></b></p>
 <p style="font-size: 20px;  color: purple; font-style: italic; text-align: center; font-weight:bolder;">
"Change Your Movie Experience Through Technology"</p> 
          
	  </div>
	  <div class="lower">
	  <table border="5"cellpadding="15px"cellspacing="0px"bgcolor=""align="center">
			      <tr bgcolor="white">
                      <th bgcolor="" ><a href="index.html">HOME</a></th>   
                      <th bgcolor="" ><a href="user.php">LOGIN</a></th> 			  
                      
					   <th bgcolor="" ><a href="about.php">ABOUTUS</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
<form method="post" action="signup.php" enctype="multipart/form-data">
<pre align="center">
<h2> <b>   USERID  </b></h2> <input type="text" name="t1" align="center" bgcolor="white" placeholder="enter user id" required/>
<h2> <b>   PASSWORD  </b></h2> <input type="text" name="t2" align="center" bgcolor="white"placeholder="enter password"required/>
<h2> <b>   EMAIL  </b></h2> <input type="text" name="t3" align="center" bgcolor="white"placeholder="enter mail id"required/>
<h2> <b>   PHONE </b></h2> <input type="text" name="t4" align="center" bgcolor="white"placeholder="enter mobile no"required/>

	   
 <input type ="submit" name="btn" value="REGISTER" align="center"/>
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
			 // $file_name=$_FILES["file"]["name"];
			//  $temp_name=$_FILES["file"]["tmp_name"];
			//   $path="C:/xampp1/htdocs/saikatphpprojects/connectivity/upload".$file_name;
			//   $db_path="upload/".$file_name;
			  // move_uploaded_file($temp_name,$path);
			//  move_uploaded_file($temp_name,"C:/xampp1/htdocs/saikatphpprojects/connectivity/upload/".$file_name);
			   $sql="insert into user values('".$pid."','".$pname."','".$pdes."','".$pcost."')";
			   $n=mysqli_query($con,$sql);
			   if($n==1)
				   echo"<b> REGISTERED SUCCESSFULLY!</b>";
			   else
				  echo "<b> REGISTER UNSUCCESSFUL</b>";
		   }
		   }		 
		  ?>
		 
		</div>
		
		</div>
		
	  </body>
	  </html>