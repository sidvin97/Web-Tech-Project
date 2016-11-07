<?php
 session_start();
  ?>
<!DOCTYPE html>
<html>
<head>
 <title> Captain America </title>
 <link rel="stylesheet" type="text/css" href="http://localhost/WTP/books.css">
 <style> </style>
</head>

<body >
  <nav>
   <ul>
   <li class="hello">
	<?php

	error_reporting(0);
	session_start();
	extract($_SESSION);
	$name=$_SESSION['username']; 
	//include("sessionvar.php"); 
	
    echo "<span style='font-size:1.25em;
	color:black;
	font-family:Impact, Charcoal;'>Welcome ".$name."</span>";
	
	?>
   </li>
   <li class="lol1"><a href="home.php" >Home</a> </li>
    
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
</nav>
<h1 class="head"> Captain America </h1>
<p class="about"name="lord"> Captain America is a fictional superhero appearing in American comic books published by Marvel Comics. Created by cartoonists Joe Simon and Jack Kirby, the character first appeared in Captain America Comics #1 (cover dated March 1941) from Timely Comics, a predecessor of Marvel Comics. Captain America was designed as a patriotic supersoldier who often fought the Axis powers of World War II and was Timely Comics' most popular character during the wartime period. The popularity of superheroes waned following the war and the Captain America comic book was discontinued in 1950, with a short-lived revival in 1953. Since Marvel Comics revived the character in 1964, Captain America has remained in publication.

Captain America wears a costume that bears an American flag motif, and is armed with a nearly indestructible shield that he throws at foes. The character is usually depicted as the alter ego of Steve Rogers, a frail young man enhanced to the peak of human perfection by an experimental serum to aid the United States government's efforts in World War II. Near the end of the war, he was trapped in ice and survived in suspended animation until he was revived in the present day. Although Captain America often struggles to maintain his ideals as a man out of his time with its modern realities, he remains a highly respected figure in his community which includes becoming the long-time leader of the Avengers.</p>
<br><a href="#" class="say" style='padding-left:2em;padding-right:2em;'>Speak out the text</a>
<audio src="" class="speech" hidden style='padding-left:2em;'></audio>
<script src='https://code.responsivevoice.org/responsivevoice.js' ></script>
<input onclick='responsiveVoice.speak("Captain America is a fictional superhero appearing in American comic books published by Marvel. Created by cartoonists Joe Simon and Jack Kirby,the character first appeared in Captain America Comics, cover dated March 1941 from Timely Comics, a predecessor of Marvel Comics. Captain America was designed as a patriotic supersoldier who often fought the Axis powers of World War II and was Timely Comics most popular character during the wartime period. The popularity of superheroes waned following the war and the Captain America comic book was discontinued in 1950, with a short-lived revival in 1953. Since Marvel Comics revived the character in 1964, Captain America has remained in publication.");' type='button' value='🔊 Play' />
<h1> <center> Discussion Forum </center> </h1>

<center> <button onclick = "addpost()">Comment</button> </center>
<?php
   
	$con=mysqli_connect('localhost','root','','web tech project');
	extract($_SESSION);
	if(isset($_POST)){
	error_reporting(0);
	extract($_POST);     
	if($rating!=0)
	{
	
	$name=$_SESSION['username'];
	$sql="Insert into captain values('$name','$comment','$rating')";
	mysqli_query($con,$sql);
	}
	   $sql="Select * from captain";
	  $res=mysqli_query($con,$sql);
	  
	 while($row=mysqli_fetch_assoc($res))
	{
	  echo "<div class='insert' style='background:#BF781B;opacity:0.8;border-radius:2.5em; color:black;margin:5em;padding:2em;padding-top:0em;padding-bottom:1em;font-family:Tahoma, Geneva, sans-serif;' >";
	    echo "<br> <h3><b>Username: </b>".$row['Username']."</h3><br>";
		echo "<p ><b> Comment: ".$row['Comment']."</b></p>";
		echo "<p><b> Rating: ".$row['Rating']."</b></p>";
	  echo "</div>";
	}  
	/*echo "<table style='padding-left:2em;'>";
	      echo "<tr>";
			 echo "<th style='padding:2em;'> Name </th>";
			 echo "<th style='padding:2em;'> Comment  </th>";
			 echo "<th style='padding:2em;'> Rating </th>";
			 echo "</tr>";
		 while($row=mysqli_fetch_assoc($res))
		 {
			 
			 echo "<tr height='40px' style='background:#C7795F; color:black;' >";
			 echo"<td style='padding:2em;'>".$row['Username']."</td>";
			 echo"<td style='padding:2em;' width='350px' align='left'>".$row['Comment']." </td>";
			 echo"<td style='padding:2em;' align='center'>".$row['Rating']."</td>";
			 echo "</tr>";
		 }
	echo "</table>";  */
	}
	
   ?>
<script>

var count2 = 0;

var countc =0;

function addpost()

{


   var division = document.createElement("form");
division.setAttribute("method","post");
division.setAttribute("action","captain.php");
		 division.setAttribute("width","100%");
       

  /*var post = document.createElement("textarea");
   post.setAttribute("rows","2");
   post.setAttribute("name","comment");
   post.setAttribute("cols","100");
   post.setAttribute("disabled","disabled");*/
   
var post = document.createElement("input");
post.setAttribute("type","text");
post.setAttribute("required","required");
post.style.backgroundColor="#E3DD96";
post.setAttribute("name","comment");
post.setAttribute("size","200");

var label=document.createElement("p");
label.innerHTML="Comment: ";
label.appendChild(post);
       
/*
    var lbl = document.createElement("label");

        lbl.setAttribute("id","label"+count2);

        lbl.textContent = "0 Likes";

   

   var btn1 = document.createElement("input");

        btn1.setAttribute("type","number");

        btn1.setAttribute("v

        btn1.setAttribute("value","Likes");

        btn1.setAttribute("onClick","like1(this.id)");

       

   var btn2 = document.createElement("input");

        btn2.setAttribute("type","button");

        btn2.setAttribute("value","Comment");

        btn2.setAttribute("id", "bc"+count2);

        btn2.setAttribute("onClick","comment(this.id)");

   

   var btn3 = document.createElement("input");

        btn3.setAttribute("type","button");

        btn3.setAttribute("value","Delete");

        btn3.setAttribute("id", "bd"+count2);

        btn3.setAttribute("onClick","del1(this.id)");

       

   count2++;

   */

   division.appendChild(label);
   var rat=document.createElement("label");
   rat.innerHTML=" Rating : ";
   division.appendChild(rat);
   var rating=document.createElement("input");
   rating.setAttribute("type","number");
   rating.setAttribute("value","1");
   rating.setAttribute("min","1");
   rating.setAttribute("max","10");
   rating.setAttribute("step","1");
   rating.setAttribute("name","rating");
   rating.style.backgroundColor="#E3DD96";
	division.appendChild(rating);
	rating.style.marginBottom="1em";
	
	var br=document.createElement("br");
	division.appendChild(br);
	var sub=document.createElement("input");
   sub.setAttribute("type","submit");
   division.appendChild(sub);
	   

  /* division.appendChild(lbl);

   division.appendChild(btn1);

   division.appendChild(btn2);

   division.appendChild(btn3);*/
   var abc=document.querySelector(".insert");
   division.style.margin="4em";
   division.style.padding="2em";
   division.style.paddingRight="1em";
   division.style.backgroundColor="#BF781B";
   division.style.opacity="0.8";
   division.style.borderRadius="2em";
   document.body.appendChild(division);
   //opacity:0.8;border-radius:2.5em

}

/*function del1(l)

{

   var but = document.getElementById(l);

    var post = but.parentNode;

    document.body.removeChild(post);

}

function like1(l)

{

    var but = document.getElementById(l);

    var post = but.parentNode;

    var status= post.firstChild;

    var lab = status.nextSibling;

    lab.textContent= (parseInt(lab.textContent) + 1)+" Likes";

}

function comment(l)

{

var a = prompt("Enter a comment:    ");

var division2 = document.createElement("div");

    division2.setAttribute("id", "f1");

   

var comm= document.createElement("pre");

    comm.textContent = a;

   

division2.appendChild(comm);

var but = document.getElementById(l);

var post = but.parentNode;

   

post.appendChild(division2);

var btn1 = document.createElement("input");

    btn1.setAttribute("type","button");

    btn1.setAttribute("id","c1"+countc);

    btn1.setAttribute("onclick","reply(this.id)");

    btn1.setAttribute("value","REPLY");

   

var btn2 = document.createElement("input");

   btn2.setAttribute("type","button");

    btn2.setAttribute("id","c2"+countc);

    btn2.setAttribute("onclick","del2(this.id)");

    btn2.setAttribute("value","DELETE COMMENT");

   

    countc++;

  

division2.appendChild(btn1);

division2.appendChild(btn2);

}

function del2(l)

{

    var but = document.getElementById(l);

    var comm = but.parentNode;

    var post = comm.parentNode;

    post.removeChild(comm);

}

function reply(l)

{

    var stat = prompt("Enter a reply:    ");

    var but = document.getElementById(l);

    var comm = but.parentNode;

    var post = comm.parentNode;

   var rep= document.createElement("pre");

   rep.textContent = stat;

   comm.appendChild(rep);

   post.appendChild(comm);

} 
*/
</script>
</body>
</html>
