<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <title>Genres</title>
  <link rel="stylesheet" type="text/css" href="homepagestyle.css">
	</script>
</head>


<body>
   <nav>
   <ul>
   <li class="hello">
	<!-- <script>
		var name=prompt("Enter your name");
		var str=name.toUpperCase();
		document.writeln("<span class=\"lol\">HELLO "+str+"</span>");
	</script> -->
	<?php
	extract($_SESSION);
	error_reporting(0);
	$name=$_SESSION['username']; 
    echo "<span style='font-size:1.25em;
	color:black;
	font-family:Impact, Charcoal;'>Welcome ".$name."</span>";
	$_SESSION['name']=$name;
	?>
   </li>
   <li><a href="home.php" >Home</a> </li>
    
	<li class="lol1">
    <a href="#" >Genres</a>
	
	  </li>
   
   
  <li><a href="About Us.php" >About Us</a> </li>
   
  
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
  
  
  
  


   
   
   
   
   <li class="logout"><a href="logout.php">Logout</a> </li>
   
   
   </ul>
  
</nav>


<table class="genre-list" >
<tr>
<td>
<ul class="genre-list-1">
  <li ><a href="fiction.php">Fiction <br> <img src="fiction.jpg" height="50%" width="50%" /> </a> <li> <br><br>
  <li><a href="#">Fantasy <br> <img src="fantasy.jpg" height="20%" width="30%" /></a> </li>
</ul>
</td>

<td>
<ul class="genre-list-2">
  <li><a href="comics.php">Comics <br> <img src="comic.jpg" height="50%" width="50%" /> </a> </li> <br> <br>
  <li><a href="#">Non-fiction <br> <img src="obama.jpg" height="50%" width="50%"/> </a></li>
</ul>
</td>
</tr>
</table>

</body>
</html>