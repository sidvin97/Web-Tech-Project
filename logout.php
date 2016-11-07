<?php
   session_start();
   unset($_SESSION['username']);
   session_destroy();
?>

<!DOCTYPE html>
  <head>
  <title>Logout</title>
  <link rel="stylesheet" type="text/css" href="homepagestyle.css">
	</script>
</head>
  <body style="cursor: url(bookworm.cur),auto;">
  <nav style="position:static">
   <ul>
   <li class="hello">
	<!-- <script>
		var name=prompt("Enter your name");
		var str=name.toUpperCase();
		document.writeln("<span class=\"lol\">HELLO "+str+"</span>");
	</script> -->
	<?php

	session_start();
	extract($_SESSION);
	error_reporting(0);
	$name=$_SESSION['username'];
    echo "<span style='font-size:1.25em;
	color:black;
	font-family:Impact, Charcoal;'>Welcome ".$name."</span>";
	$_SESSION['name']=$name;
	?>
   </li>
   <li><a href="#" >Home</a> </li>
    
	<li>
    <a href="#" class="dropbtn">Genres</a>
	<ol class="dropdown1">
		<li><a href="#" target="_blank">Fiction</a></li>
      <li><a href="#" target="_blank">Fantasy</a></li>
      <li><a href="#" target="_blank">Non-Fiction</a></li>
	</ol>
	  </li>
   
   
  <li><a href="#" >About Us</a> </li>
   
  
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
  
  
  
  


   
   
   
   
   <li ><a href="index.php">Sign Up</a> </li>
   
   
   </ul>
 
</nav>
   <h1 style="padding-left:3em;padding-top:1em;">Thank you for using our site. Please do visit us again!</h1> 
  <h3 style="padding-left:5em;"> Click <a href="login.php">here</a> to log in </h3>
  </body>
</html>