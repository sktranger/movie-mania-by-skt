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
         <th bgcolor="" ><a href="user1.php">LOGOUT</a></th>
					   <th bgcolor="" ><a href="about.php">ABOUTUS</a></th>
                  </tr>
				  </table>
		</div>
	
		<div class="kol">
		<?php
		if(isset($_REQUEST["t"]))
			$t=$_REQUEST["t"];
		if(isset($_REQUEST["m"]))
			$m=$_REQUEST["m"];
		?> 
<form method="post" action="time.php" enctype="multipart/form-data">
<pre align="center">
<h2> <b>YOUR NAME</b></h2> <input type="text" name="t1" align="center" bgcolor="white"placeholder="enter your name"required/>
<h2> <b>MOVIE NAME</b></h2> <input type="text" value="<?=$m?>" name="t2" align="center" bgcolor="white"placeholder="enter movie name"required/>
<h2> <b>SHOWTIME</b></h2> <input type="text" value="<?=$t?>" name="t3" align="center" bgcolor="white"placeholder="enter showtime"required/>


<label><h2><b>SELECT SEAT</b></h2></label>
			<select name="t4" align="center"> 
			<option value="DIAMOND-200">DIAMOND-200</option>
			<option value="GOLD-150">GOLD-150</option>
			<option value="SILVER-120">SILVER-120</option>
			
			</select>

<h2> <b>RUPEES</b></h2> <input type="text" name="t5" align="center" bgcolor="white"placeholder="enter rupees"required/>
<h2> <b>NUMBER OF TICKETS</b></h2> <input type="text" name="t6" align="center" bgcolor="white"placeholder="enter no of tickts"required/>
<h2> <b>TOTAL PAYMENT</b></h2> <input type="text" name="t7" align="center" bgcolor="white"placeholder="total payment=r*not"/>

<input type ="submit" name="btn1" value="TOTAL" align="center"/>
<?php
  if(isset($_POST["btn1"]))
  {
      $a=$_POST["t5"];
      $b=$_POST["t6"];

$c=$a*$b;

echo 'TOTAL AMOUNT = '.$c;
}
?>




 <input type ="submit" name="btn" value="MAKE PAYMENT" align="center"/>
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
			   $ptik=$_POST["t5"];
		   	  $ptok=$_POST["t6"];
		      $ptjk=$_POST["t7"];

			 // $file_name=$_FILES["file"]["name"];
			//  $temp_name=$_FILES["file"]["tmp_name"];
			//   $path="C:/xampp1/htdocs/saikatphpprojects/connectivity/upload".$file_name;
			//   $db_path="upload/".$file_name;
			  // move_uploaded_file($temp_name,$path);
			//  move_uploaded_file($temp_name,"C:/xampp1/htdocs/saikatphpprojects/connectivity/upload/".$file_name);
  $sql="insert into ticket values('".$pid."','".$pname."','".$pdes."','".$pcost."','".$ptik."','".$ptok."','".$ptjk."')";
			   $n=mysqli_query($con,$sql);
			   if($n==1)
				   echo"<b> BOOKEDED SUCCESSFULLY!</b>";
			   else
				 echo  "<b> BOOKING UNSUCCESSFUL</b>";
		   }
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