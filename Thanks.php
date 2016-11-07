<!DOCTYPE html>
<html>
	<head>
		<title>Thank You</title>
		<link rel="stylesheet" type="text/css" href="homepagestyle.css">
</head>

<body>
  <nav>
   <ul>
   <li class="hello">
	<script>
		document.writeln("<span class=\"lol\">Welcome Aboard!</span>");
	</script>
   </li>
   <li><a href="homepage.html" target="_parent">Home</a> </li>
   <li><a href="About Us.html">About Us</a> </li>
   
  
<!-- <li> 
   <div class="dropdown">
   <a onclick="myFunction()" class="dropbtn">Genres</a>
   <div id="myDropdown" class="dropdown-content">
      <a href="#">Fiction</a>
      <a href="#">Fantasy</a>
      <a href="#">Non-Fiction</a>
   </div>
   </div>
  </li>
 -->  
  
  
  
  
 <li>
    <a href="genres.html" class="dropbtn">Genres</a>
	<ol class="dropdown1">
		<li><a href="#">Fiction</a></li>
      <li><a href="#">Fantasy</a></li>
      <li><a href="#">Non-Fiction</a></li>
	</ol>
	  </li>
    <li class="lol1"><a href="#" >Sign Up</a> </li>
   </ul>
</nav>
<table>
	<tr>
		<td class="abt1">
			
				<?php 
		 echo "Thank you for signing up!"."<br>";
	
	  //Extract data
	  extract($_POST);
	  
	  //create a connection to the DB server
	  $con=mysqli_connect('localhost','root','','web tech project');
	  $sql="Insert into account values('$first','$last','$user','$pass')";
	  
	  mysqli_query($con,$sql);
	  

	 ?>
	 <div>
		<br>
		<a href="login.php">Click Here to Log In </a>
	 </div>
		</td> 
		
		<td class="pres">

		</td>
</tr>
</table>
</body>
</html>