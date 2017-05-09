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
                         
                      <th bgcolor="" ><a href="showing.php">NOWSHOWING</a></th> 			  
                      <th bgcolor="" ><a href="user1.php">LOGOUT</a></th>
					 <th bgcolor="" ><a href="index.html">HOME</a></th>  
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
<?php
session_start();
if(isset($_SESSION["user"]))

	echo" <h1 align='center' bgcolor='yellow'>  <b>WELCOME ". $_SESSION["user"]."</b>  </h1>";
 else
	header("location:user.php");
 ?>
 	  <marquee behavior="scroll" loop="100" direction="right">
	  <ol>
             <li>
			 <img src="images/dvv.jpg"height="180px">
			<img src="images/aa.jpg"height="180px">
		    <img src="images/bb.jpg"height="180px">
			<img src="images/cc.jpg"height="180px">
			<img src="images/dd.jpg"height="180px">
			<img src="images/dv.jpg"height="180px">
			<img src="images/jl.jpg"height="180px">
			</li>

		</ol>
		</marquee>
 
		</div>

		</div>
		
	  </body>
	  </html>