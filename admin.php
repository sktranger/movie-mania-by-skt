<!DOCTYPE html>
<html>



<head>
   
         <title>
		 
		     MOVIE MANIA
		 
         </title>
		 <meta charset="utf-8">
		 <link href="admin.css" rel="stylesheet" type="text/css">
         <link href="images/sd.jpg" rel="icon"/>
	  </head>
	  <body>
	    <div class="main">
		<img src="images/sd.jpg"height="700px"width="1350px">
		
	  <div class="header">
	           
 <p class="header1"><b><u>MOVIE MANIA (BOOK YOUR MOVIE)</u></b></p>
 <p style="font-size: 20px;  color: blue; font-style: italic; text-align: center; font-weight:bolder;">
"Change Your Movie Experience Through Technology"</p> 
          
	  </div>
	  <div class="lower">
	  <table border="5"cellpadding="15px"cellspacing="0px"bgcolor=""align="center">
			      <tr bgcolor="white">
                      <th bgcolor="" ><a href="index.html">HOME</a></th>   
                      <th bgcolor="" ><a href="user.php">LOGIN</a></th> 			  
                      <th bgcolor="" ><a href="signup.php">SIGNUP</a></th>
					   <th bgcolor="" ><a href="about.php">ABOUTUS</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
<form method="post" action="admin.php">
<pre align="center" bgcolor="white">
        <h2 style="color:blue;"> <b>   USER ID  </b></h2> <input type="text" name="t1" align="center" bgcolor="white"placeholder="enter user id"required/>
		  <h2 style="color:blue;"> <b>  PASSWORD   </b></h2> <input type="password" name="t2" align="center"placeholder="enter the password"required/>
		  
 <input type ="submit" name="btn" value="SUBMIT" align="center"/>
		</pre>
		</form>
		<?php
		    
		   if(isset($_POST["btn"]))
		   {
			
			 // include("includes/in1.php");
			   $user=$_POST["t1"];
			   $pass=$_POST["t2"];
			   session_start();
			  $con=mysqli_connect("localhost","root","","skt");
	
	if(!$con)
	die("cant connect to server");
	else
{ 
  $sql="select * from loginn where USERID='".$user."' and PASSWORD='".$pass."'";
   $rs=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($rs);
   if($row)
   {
	   $_SESSION["user"]=$user;//store user id in session
	 //  $_SESSION["pass"]=$pwd;
	 header("location:logout1.php");
   }
  else
	                      echo"     <h1 align='center' bgcolor='yellow'> <u> <b>INVALID USERID OR PASSWORD</b></u>  </h1>  ";
}
		   }
		   ?>
		</div>
		<div class="footer">
	                           <p style="font-size: 20px;  color: black; font-style: italic; text-align: center; font-weight:bolder;">
Online Movie Ticket Booking<br>
  
© Copyright 2017-2018 by:Skt,Syn,Shwt & Amit<br> 

Powered By COC</p>
		</div>
		</div>
		
	  </body>
	  </html>