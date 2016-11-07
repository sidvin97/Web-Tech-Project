<!DOCTYPE html>
<html>
	<head>
		<title>Login</title>
		<link rel="stylesheet" type="text/css" href="homepagestyle.css">
		<style>
	.log{
	
	}
	</style>
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
  
  
  
  


   
   
   
   
   <li class="logout"><a href="index.php">Sign Up</a> </li>
   
   
   </ul>
 
</nav>

<table>
	<tr>
		<td class="abt1" style="background-image: url('books1.jpg');background-repeat: no-repeat;background-size: 100%;padding-top:5em;margin-top:2em;font-weight:bold;border-radius:2em;">
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<pre><label>Enter your Username:   <input type="text" name="user" class="emp2" required='required'></input></label><br><br></pre>
			<pre><label>Enter your Password:   <input type="password" name="pass" class="pass" required='required'></input></label><br><br></pre>
			<input type="submit"  name="submit" id="submit"></submit>
		</form>		
	<?php
	    error_reporting(0);
	    extract($_POST);
		$con=mysqli_connect('localhost','root','','web tech project');
		/*$sql="Select * from account";
	    $res=mysqli_query($con,$sql);*/
		
		$check= "SELECT * FROM account WHERE Username= '" .$_POST['user']."'";
		
		if ($result = mysqli_query($con, $check)) 
		{
          /* fetch associative array */
          while ($obj = mysqli_fetch_object($result)) 
		  {
            if($obj->Password == $_POST['pass'])
			{
				echo "matched";
				header("Location:home.php");
				session_start();
				if(!IsSet($_SESSION['username']))
				{
					$_SESSION['username']=$obj->Username;
				}
				break;
			}
			else
			   echo "<br>Invalid Password";
			
		  }
		  
		  /* free result set */
          mysqli_free_result($result);
        }
		else
		   echo "invalid";
		?>
		<div>
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