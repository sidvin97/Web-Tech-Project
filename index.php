<!DOCTYPE html>
<head>
  <title>Sign up</title>
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
  
  
  
  


   
   
   
   
   <li class="logout"><a href="login.php">Login</a> </li>
   
   
   </ul>
   <script>
	var log=document.querySelector(".logout");
	log.addEventListener("click",destroy,false);
	function destroy()
	{
		<?php
		session_destroy();
		?>
	}
   </script>
</nav>

<table>
	<tr>
		<td class="abt" style="background-image: url('books1.jpg');background-repeat: no-repeat;background-size: 100%;padding-top:5em;margin-top:2em;padding-right:0em;font-weight:bold;border-radius:2em;">
			<form action="#" method="post" id="sub">
				<div class="confpass">
				<pre><label>Enter your first name: <input type="text" name="first" class="emp" required='required'></input></label><br><br></pre>
				<pre><label>Enter your last name:  <input type="text" name="last" class="emp1" required='required'></input></label><br><br></pre>
				<pre><label>Enter your Username:   <input type="text" name="user" class="emp2" required='required'></input></label><br><br></pre>
				<pre><label>Enter your Password:   <input type="password" name="pass" class="pass" required='required'></input></label><br><br></pre>
				<pre><label>Confirm Password:      <input type="password" name="conf" class="confirm" required='required'></input></label><br><br></pre>
				
				<script>
					a=document.querySelector(".pass");
					b=document.querySelector(".confirm");
					c=document.querySelector(".confpass");
					/*e=document.querySelector(".emp");
					f=document.querySelector(".emp1");
					g=document.querySelector(".emp2");*/
					a.addEventListener("blur",check,false);
					b.addEventListener("blur",check,false);
					/*e.addEventListener("blur",check,false);
					f.addEventListener("blur",check,false);
					g.addEventListener("blur",check,false);*/
					di=document.createElement("div");
					pa=document.createElement("p");
					pa.textContent="";
					function check()
					{
					if(a.value===b.value /*&& a.value!='' && b.value!='' && e.value!='' && f.value!='' && g.value!=''*/)
					{						
						pa.textContent="Passwords match";
						pa.style.color="green";
						pa.style.fontWeight="bold";
						c.appendChild(di);
						di.appendChild(pa);
						document.getElementById("submit").disabled=false;
						d=document.getElementById("sub");
						d.setAttribute("action","Thanks.php");
						document.querySelector(".confirm").style.borderColor="green";
					}
					else{
						pa.textContent="Passwords do not match";
						pa.style.color="red";
						pa.style.fontWeight="bold";
						c.appendChild(di);
						di.appendChild(pa);
						document.getElementById("submit").disabled=true;
						d=document.getElementById("sub");
						d.setAttribute("action","#");
						document.querySelector(".confirm").style.borderColor="red";
						}
					}
				</script>
				</div>
				<input type="submit"  disabled="true" name="submit" id="submit"></submit>
			</form>
			<p>
			  If you are already a member, click <a href="login.php">here</a> to login.
			</p>
		</td>
		<td class="pres">
		  <div class="about">
		  Welcome to Bookworms, your go to place for the latest news and reviews from the world of literature. Catch up on the latest from the world of 'A Song of Ice and Fire' or find out what author Rick Riordan has lined
			up next for us. Also find out about the hottest biographies and autobiographies in the market. If you're  a cricket fan, here's where you can read about AB De Villiers' latest autobiography.</h3>
			You can even discuss your favourite Marvel and DC superheroes right here on Bookworms.
		  </div>
		</td>
		
		
</tr>
</table>
</body>
</html>