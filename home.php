<!DOCTYPE html>


<head>
  <title> Books </title>
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

	session_start();
	extract($_SESSION);
	error_reporting(0);
	$name=$_SESSION['username']; 
	//include("sessionvar.php"); 
	
    echo "<span style='font-size:1.25em;
	color:black;
	font-family:Impact, Charcoal;'>Welcome ".$name."</span>";
	
	?>
   </li>
   <li class="lol1"><a href="#" >Home</a> </li>
    
	<li>
    <a href="genres.php" class="dropbtn">Genres</a>
	<ol class="dropdown1">
		<li><a href="#" target="_blank">Fiction</a></li>
      <li><a href="#" target="_blank">Fantasy</a></li>
      <li><a href="#" target="_blank">Non-Fiction</a></li>
	</ol>
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
  <!-- <script>
	var log=document.querySelector(".logout");
	log.addEventListener("click",destroy,false);
	function destroy()
	{
		<?php
		//session_destroy();
		?>
	}
   </script> -->
</nav>


<table>

<tr>
<td>
<div class="parent" style="position:relative">
   <div class="hp" style="position:absolute; z-index:0;padding-top:25em;">
     <div height="500em" width="500em">
     <img src="curse.jpg" height="30%" width="30%"/></div>
     <h3>Warner Bros. Denies Reports Of a 'Harry Potter and the Cursed Child' Movie Trilogy.</h3>
     Back in July, Warner Bros. Pictures filed a trademark for Harry Potter and the Cursed Child. This might not seem surprising since the film studio was the distributor of every single film in the Harry Potter franchise, as well as the upcoming spin-off Fantastic Beasts and Where to Find Them. However...
     <br>
     <a href="http://www.slashfilm.com/harry-potter-and-the-cursed-child-movie-trilogy/" class="click" target="_blank">click here to read more </a><br><br>

 
   </div>  

<div class="div1" style="position:absolute; z-index:1;">
<div height="500em" width="500em">
  <img src="marilyn.jpg" height="200px" width="200px " /></div><br>
  <h3>Marilyn Nelson Announced as 2017 NSK Neustadt Prize for Children’s Literature Winner</h3>
  Norman, Okla. (October 29, 2016) – World Literature Today, the award-winning magazine of international literature and culture, today announced Marilyn Nelson as the winner of the 2017 NSK Neustadt Prize for Children’s Literature. Awarded in alternating years with the prestigious Neustadt International Prize for Literature,recognizes...
 <br>
  <a href="http://www.neustadtprize.org/the-nsk-prize/" class="click" target="_blank">click here to read more </a><br><br>

</div>
</div>

<div class="parent" style="position:relative">
<div class="grr" style="position:absolute; z-index:0;">
<div height="500em" width="500em">
  <img src="grrm1.jpg" height="30%" width="30%" /></div><br><br><br><br>
  <h3>'Winds Of Winter' Expected By 2017; 'GOT' Season 7 To Be Based Off Books 6 & 7?</h3>
  The release date of "Winds of Winter" has been very much demanded by avid fans of the book series "A Song of Ice and Fire" by George R.R. Martin. This will be the sixth book of the series and will be the next book after "A Dance With Dragons". There have been allegations that the book will not be released soon since... <br>
  <a href="http://www.itechpost.com/articles/22561/20160722/winds-winter-expected-2017-season-7-based-books-6.htm" class="click" target="_blank">click here to read more </a><br><br>

  
  
</div>

<div class="div2" style="position:absolute; z-index:1;padding-top:30em;">
  <div height="500em" width="500em">
  <img src="anne.jpg" height="30%" width="30%" /></div>
  <h3>Anne Frank poem, handwritten for a friend, goes on sale.</h3>
  A short poem by Anne Frank written in Amsterdam in 1942 and autographed by the teenager is expected to fetch up to €50,000 (£44,000) at auction.
  The handwritten eight-line poem was written in the “poezie album”, or friendship book, of the older sister of Frank’s classmate and best friend Jacqueline van Maarsen, according to... <br>
  <a href="https://www.theguardian.com/books/2016/nov/04/anne-frank-poem-handwritten-for-a-friend-goes-on-sale" class="click" target="_blank">click here to read more </a><br><br>

</div>  
</div>
</td>
<td>
<div class="parent1" style="position:relative">
   <div class="div3" style="position:absolute; z-index:0;padding-top:22em;">
     <div height="500em" width="500em">
     <img src="beedle.jpg" height="300px" width="30%"/></div>
     <h3>JK Rowling's hand-drawn Tales of Beedle the Bard go up for auction.</h3>
     A handwritten copy of JK Rowling’s story collection The Tales of Beedle the Bard, which she made for the publisher who first accepted Harry Potter for publication, is set to fetch up to £500,000 when it is auctioned next month.
     Rowling handwrote...    <br>
     <a href="https://www.theguardian.com/books/2016/nov/04/jk-rowlings-hand-drawn-tales-of-beedle-the-bard-go-up-for-auction" class="click" target="_blank">click here to read more </a><br><br>
   </div>  

<div class="div4" style="position:absolute; z-index:1;">
<div height="500em" width="500em">
  <img src="roald.jpg" height="30%" width="30%"/></div><br><br><br>
  <h3>He thought 'The BFG' was his classic: Roald Dahl's wife on his 100th birth anniversary</h3><br>
  Felicity Dahl talks about her husband and his works as the author's fans and followers gear up to celebrate the centenary of his birth. Roald Dahl had his own misfortunes despite being from a fairly privileged background but... <br>
  <a href="http://www.dnaindia.com/lifestyle/report-dahl-always-believed-dreams-could-come-true-no-matter-what-the-circumstances-wife-2254380" class="click" target="_blank">click here to read more </a><br><br>

</div>
</div>

<div class="parent1" style="position:relative">
<div class="div5" style="position:absolute; z-index:0;">
<div height="500em" width="500em">
  <img src="devi.jpg" height="30%" width="30%"/></div><br><br>
  <h3>Eminent litterateur Mahasweta Devi passes away in Kolkata</h3>
  Eminent author and social activist Mahasweta Devi passed away at around 3.16 pm on Thursday due to multi-organ failure. She was 90, when she breathed her last at a South Kolkata hospital.Devi had been suffering from...
  <br>  <a href="http://www.dnaindia.com/india/report-eminent-litterateur-mahasweta-devi-passes-away-in-kolkata-2238925" class="click" target="_blank">click here to read more </a><br><br>
  
</div>   

<div class="div6" style="position:absolute; z-index:1;padding-top:30em;">
  <div height="500em" width="500em">
  <img src="miguel.jpg" height="30%" width="30%"/></div>
  <h3>Spain commemorates the 400th anniversary of Miguel de Cervantes' death.</h3>
 Spain is commemorating the 400th anniversary of the death of its best-known writer, Miguel de Cervantes. Events are planned throughout the country on Saturday celebrating the author of Don Quixote, one of the most influential books in world...
<br>  <a href="http://www.dnaindia.com/world/report-spain-commemorates-the-400th-anniversary-of-miguel-de-cervantes-death-2205370" class="click" target="_blank">click here to read more </a><br><br>

</div>  
</div>
</td>
</tr> 

</table>
 
  
</body>


</html>