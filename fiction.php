<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Fiction</title>
<link rel="stylesheet" type="text/css" href="homepagestyle.css" >
<link rel="stylesheet" type="text/css" href="fictionstyle.css" >
</head>
<body>
   <nav style="position:static">
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
    
	<li>
    <a href="genres.php" class="dropbtn">Genres</a>
	<!--<ol class="dropdown1">
		<li><a href="#" target="_blank">Fiction</a></li>
      <li><a href="#" target="_blank">Fantasy</a></li>
      <li><a href="#" target="_blank">Non-Fiction</a></li>
	</ol> -->
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
<center><img src="fiction.gif" alt="Fiction" style="padding-top:5%"></center>
<p class="p1">Fiction is the classification for any story created by 
the imagination and, therefore, not based strictly on history 
or fact. Fiction can be expressed in a variety of formats, including writings, live performances, films, television programs,video games, and role-playing games, though the term originally and most commonly refers to the major narrative forms of literature,including 
the novel,novella, short story, and play. Fiction constitutes an act of creative invention, so that faithfulness to reality is not typically assumed; in other words, fiction is not expected to present only characters who are actual people or descriptions that are factually true.
</p>
<div>
<p>Traditionally, fiction includes: </p>
<ul><li>Novels:<span style="font-weight:normal;font-style:italic;font-size:26px">The Lord Of The Rings,To Kill A Mockingbird,Gone With The Wind </span></li>
<li>Short stories:<span style="font-weight:normal;font-style:italic;font-size:26px">The Monkey's Paw,An Angel in Disguise,The Gift of the Magi</span></li>
<li>Fables:<span style="font-weight:normal;font-style:italic;font-size:26px">Panchatantra,The Aesop's Fables,The Arabian Nights</span></li>
<li>Legends:<span style="font-weight:normal;font-style:italic;font-size:26px">Atlantis,Holy Grail,Robin Hood,Philosopher's Stone,Odysseus</span></li>
<li>Myths:<span style="font-weight:normal;font-style:italic;font-size:26px">A Witch in a Bottle,A Ride with the Devil,Matilda's Bracelet</span></li>
<li>Fairy tales:<span style="font-weight:normal;font-style:italic;font-size:26px">The Adventures of Pinocchio,Aladdin,Beauty and the Beast</span></li>
<li>Epic:<span style="font-weight:normal;font-style:italic;font-size:26px">Mahabharata,Ramayana,Iliad,Dante</span></li>
</div>
<marquee scrollamount=12 hspace=20%">
	<div class="marqo">
		<a href="lord.php"><img src="the-lord-of-the-rings.jpg" height="200em"/></a>
		<img src="panchatantra.gif" alt="Not Found" height="200em"/>
		<img src="alladin.jpg" alt="Not Found" height="200em"/>
		<img src="ack15.jpg" alt="Not Found" height="200em"/>
	</div>
</marquee>
<p id="id1">A VIDEO COMPILATION SHOWING MOVIE ADAPTIONS OF FICTIONAL LITERATURE</p>
<center><video width="55%" height="35%" style="padding:0 0 45px 0;" controls>
  <source src="movie.mp4" type="video/mp4">
  Sorry your browser does not support the video tag :(
</video>
</center>
<center><a href="homepage.html" target="_self"><img src="home.png" width="169" height="69" alt="Go Home"></a></center><br><br>
</body>
</html>