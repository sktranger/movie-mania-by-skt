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
	  <table border="5"cellpadding="25px"cellspacing="0px"bgcolor="white"align="center">
			      <tr bgcolor="">
                      <th bgcolor="" ><a href="signup.php">SIGN UP</a></th>   
 			  
                      <th bgcolor="" ><a href="about.php">ABOUT</a></th>
					  <th bgcolor="" ><a href="index.html">HOME</a></th>
					   <th bgcolor="" ><a href="admin.php">ADMIN</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
		<form method="post" action="user.php">
<pre align="center" bgcolor="white">
        <h2> <b>   USER ID  </b></h2> <input type="text" name="t1" align="center"placeholder="enter user id" bgcolor="white" font-color="white"required/>
		  <h2> <b>  PASSWORD   </b></h2> <input type="password" name="t2" align="center"placeholder="enter password"required/>
		  
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
  $sql="select * from user where USERID='".$user."' and PASSWORD='".$pass."'";
   $rs=mysqli_query($con,$sql);
   $row=mysqli_fetch_array($rs);
   if($row)
   {
	   $_SESSION["user"]=$user;//store user id in session
	 //  $_SESSION["pass"]=$pwd;
	 header("location:userlogout.php");
   }
  else
	                      echo"     <h1 align='center' bgcolor='yellow'> <u> <b>INVALID USERID OR PASSWORD</b></u>  </h1>  ";
}
		   }
		   ?>
		   				  <marquee behavior="scroll" loop="100" direction="left">
	  <ol>
             <li>
			 <img src="images/pk.jpg"height="180px">
			<img src="images/pa.jpg"height="180px">
		    <img src="images/ds.jpg"height="180px">
			<img src="images/dm.jpg"height="180px">
			<img src="images/io.jpg"height="180px">
			<img src="images/sb.jpg"height="180px">
			<img src="images/ik.jpg"height="180px">
			</li>

		</ol>
		</marquee>		
		</div>

		<div class="footer">
	                           <p style="font-size: 20px;  color: black; font-style: italic; text-align: center; font-weight:bolder;">
Online Movie Ticket Bookin<br>
  
© Copyright 2017-2018 by:Skt,Syn,Shwt & Amit<br> 

Powered By COC</p>
		</div>
		</div>
		
	  </body>
	  </html>