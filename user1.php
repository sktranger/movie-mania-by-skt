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
		<img src="images/io.jpg"height="700px"width="1350px">
	  <div class="header">
	           
 <p class="header1"><b><u>MOVIE MANIA (BOOK YOUR MOVIE)</u></b></p>
 <p style="font-size: 20px;  color: purple; font-style: italic; text-align: center; font-weight:bolder;">
"Change Your Movie Experience Through Technology"</p> 
          
	  </div>
	  <div class="lower">
	  <table border="5"cellpadding="15px"cellspacing="0px"bgcolor=""align="center">
			      <tr bgcolor="">
                      <th bgcolor="" ><a href="">HOME</a></th>   
                      <th bgcolor="" ><a href="">LOGIN</a></th> 			  
                      <th bgcolor="" ><a href="">SIGNUP</a></th>
					   <th bgcolor="" ><a href="">ABOUTUS</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
<?php
session_start();
unset($_SESSION["user"]);
//unset($_SESSION["pass"]);
session_destroy();
 header("location:user.php");
 ?>
		</div>
		</div>
		
	  </body>
	  </html>