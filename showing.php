<!DOCTYPE html>
<html>



<head>
   
         <title>
		 
		     MOVIE MANIA
		 
         </title>
		 <meta charset="utf-8">
		 <link href="showing.css" rel="stylesheet" type="text/css">
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
                      <th bgcolor="" ><a href="user1.php">LOGOUT</a></th> 			  
                      
					   <th bgcolor="" ><a href="about.php">ABOUTUS</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
		<?php
    $con=mysqli_connect("localhost","root","","skt");
	
	if(!$con)
	die("cant connect to server");
	else
{
	$sql="select * from showtime";
	$rs=mysqli_query($con,$sql);
	echo "<table border=1 cellpadding=10 align=center bgcolor=white >
	<tr><th>MOVIEID</th><th>MOVIENAME</th><th>SHOW1</th><th>SHOW2</th><th>SHOW3</th><th>SHOW4</th></tr>";
 while($row=mysqli_fetch_array($rs))
 {
 echo"<tr>";
 echo"<td>$row[0]</td><td>$row[1]</td><td><a href='time.php?t=$row[2]&m=$row[1]'>$row[2]</a></td><td><a href='time.php?t=$row[3]&m=$row[1]'>$row[3]</a></td><td><a href='time.php?t=$row[4]&m=$row[1]'>$row[4]</a></td><td><a href='time.php?t=$row[5]&m=$row[1]'>$row[5]</a></td>";
 echo"</tr>";
 }
 
 echo"</table>";
 }
 session_start();
if(isset($_SESSION["user"]))
	echo"";
 else
	header("location:user.php");
 ?>
 
		</div>
		
		</div>
		
	  </body>
	  </html>