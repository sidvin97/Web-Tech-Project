<?php
session_start();
?>

<!DOCTYPE html>
 <head>
  <title>About Us</title>
  <link rel="stylesheet" type="text/css" href="homepagestyle.css">
   <script src="homepagejs.js">
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
    
	<li>
    <a href="genres.php" class="dropbtn">Genres</a>
	<ol class="dropdown1">
		<li><a href="#" target="_blank">Fiction</a></li>
      <li><a href="#" target="_blank">Fantasy</a></li>
      <li><a href="#" target="_blank">Non-Fiction</a></li>
	</ol>
	  </li>
   
   
  <li class="lol1"><a href="#" >About Us</a> </li>
   
  
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

<table>
	<tr>
		<td class="abt">
			<h3>Welcome to Bookworms, your go to place for the latest news and reviews from the world of literature. Catch up on the latest from the world of 'A Song of Ice and Fire' or find out what author Rick Riordan has lined
			up next for us. Also find out about the hottest biographies and autobiographies in the market. If you're  a cricket fan, here's where you can read about AB De Villiers' latest autobiography.</h3>
			<h3>You can discuss your favourite Marvel and DC superheroes right here on Bookworms.</h3>
			<marquee>
	<div class="marq">
		<img src="rick.jpg" height="200em"/>
		<img src="ab.jpg" height="200em"/>
		<img src="marv.jpg" height="200em"/>
		<img src="dc.jpg" height="200em"/>
	</div>
</marquee>
		</td>
		<td class="pres" >
			<h3 >This website is presented to you by Satvik Kumar, Shruthi Shankar and Siddhanth Vinay, second year students studying Computer Science Enginering in PES University.</h3>
			<div class="ema">
			<h3>To find out more, mail us at:</h3>
			<h4><a href="mailto:sidvin97@gmail.com" class="mail" id="sid">sidvin97@gmail.com</a></h4>
			<h4><a href="mailto:shruthishankar2512@gmail.com" class="mail" id="shru">shruthishankar2512@gmail.com</h4>
			<h4><a href="mailto:satvik.kumar97@gmail.com" class="mail" id="saps">satvik.kumar97@gmail.com</h4>
			</div>
		</td>
		<script>
			var sid=document.getElementById("sid");
			var shru=document.getElementById("shru");
			var saps=document.getElementById("saps");
			var br=document.createElement("br");
			var br1=document.createElement("br");
			var br2=document.createElement("br");
			var br3=document.createElement("br");
			saps.parentNode.appendChild(br);
			br.parentNode.appendChild(br1);
			br1.parentNode.appendChild(br2);
			br2.parentNode.appendChild(br3);
			sid.addEventListener("mouseover",show1,false);
			sid.addEventListener("mouseout",del1,false);
			shru.addEventListener("mouseover",show2,false);
			shru.addEventListener("mouseout",del2,false);
			saps.addEventListener("mouseover",show3,false);
			saps.addEventListener("mouseout",del1,false);
			function show1()
			{
				img= document.createElement("img");
				img.setAttribute("src","sid.jpg");
				img.setAttribute("height","300em");
				img.setAttribute("width","300em");
				br.parentNode.appendChild(img);
				
			}
			function del1()
			{
				img.parentNode.removeChild(img);
				
			}
			function show2()
			{
				img= document.createElement("img");
				img.setAttribute("src","shruthi.jpg");
				img.setAttribute("height","300em");
				img.setAttribute("width","230em");
				br.parentNode.appendChild(img);
				
			}
			function del2()
			{
				img.parentNode.removeChild(img);
				
			}
			function show3()
			{
				img= document.createElement("img");
				img.setAttribute("src","saps.jpg");
				img.setAttribute("height","300em");
				img.setAttribute("width","300em");
				br.parentNode.appendChild(img);
				
			}
			function del3()
			{
				img.parentNode.removeChild(img);
				
			}
			
		</script>
</tr>
</table>

</body>
</html>