<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Comics</title>
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
<center><img src="comic.gif" alt="Fiction" style="padding-top:5%"></center>
<p class="p1" style="color:#500791;text-shadow:red 0.2em 0.2em 0.2em">Comics is a medium used to express ideas by images, often combined with text or other visual information.
Comics frequently takes the form of juxtaposed sequences of panels of images. Often textual devices such as speech balloons, captions, and 
onomatopoeia indicate dialogue, narration, sound effects, or other information. Size and arrangement of panels contribute to narrative pacing. 
Cartooning and similar forms of illustration are the most common image-making means in comics; fumetti is a form which uses photographic images. 
Common forms of comics include comic strips, editorial and gag cartoons, and comic books. Since the late 20th century, bound volumes such as graphic novels, 
comic albums, and tankōbon have become increasingly common, and online webcomics have proliferated in the 21st century.
</p>
<div style="text-shadow:blue 0.2em 0.2em 0.2em">
<p>Traditionally, Comics includes: </p>
<ul><li>Marvel Comics:<span style="font-weight:normal;font-style:italic;font-size:26px">Captain America,Iron Man,Captain Marvel,Hulk,Doctor Strange</span></li>
<li>DC Comics:<span style="font-weight:normal;font-style:italic;font-size:26px">Superman,Batman,Wonder Woman,Green Lantern,The Flash,Aquaman</span></li>
<li>Indian Comics:<span style="font-weight:normal;font-style:italic;font-size:26px">Amar Chitra Katha,Billoo,Chacha Chaudhary,Batul The Great</span></li>
<li>Graphic Novel:<span style="font-weight:normal;font-style:italic;font-size:26px">Watchmen,Maus,Heartburst,A Sailor's Story</span></li>

<marquee scrollamount=12 hspace=20%">
	<div class="marqo">
		<a href="captain.php"><img src="capt.jpg" height="200em"/></a>
		<img src="iron.jpg" alt="Not Found" height="200em"/>
		<img src="batman.jpg" alt="Not Found" height="200em"/>
		<img src="flash.jpg" alt="Not Found" height="200em"/>
	</div>
</marquee>
<p id="id1">A VIDEO COMPILATION SHOWING MOVIE ADAPTIONS OF COMICAL LITERATURE</p>
<center><video width="55%" height="35%" style="padding:0 0 45px 0;" controls>
  <source src="Comics.mp4" type="video/mp4">
  Sorry your browser does not support the video tag :(
</video>
</center>
<center><a href="homepage.html" target="_self"><img src="home.png" width="169" height="69" alt="Go Home"></a></center><br><br>
</body>
</html>