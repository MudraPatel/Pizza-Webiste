 <html> 
 <head>
  <title>Login and Registration</title>
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/lstyle.css" />
  <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
  <link rel="stylesheet" href="css/ftg.css">

  
 </head>
 <style>
ul#navmenu 
{ 
margin-top:15px;
display:block;
position:absolute;
top:10px;
left:55px;

}


ul#navmenu a{
margin-top:10px;
margin-left:20px;
display: block; padding:9px;
color: yellow;
text-decoration: none;
width:150px;
text-align:center;
font-color:blue;

border-radius: 15px;
}

ul#navmenu li
{ 

outline:10px;
list-style:none;
margin-left:0px;
margin-top:5px;
padding-left:0px;
width:175px;
margin-right:0px;
text-align:center;
float:left;
position:relative;
}

ul#navmenu li:hover .sub 
{ 
display:block;
}

ul#navmenu ul.sub  a
{ 
margin-top:0px;
}

ul#navmenu ul.sub
{
display:none;
top:40px;
position:absolute;
margin-left:0px;
list-style:none;
}

ul#navmenu li:hover >a
{
background-color: #8B0000;
}

ul#navmenu li:hover a:hover
{
background-color: #8B0000;
}
 
input#navmenu:hover, input#navmenu:focus{
background-color :pink;
}
</style>
 						
 <body>
 
<div class=" header">

<img src ="logo.jpg" height=130 width=150 align="left"><img src ="chef.png" height=130 width=170 align="right">
<center><font face="nanum brush script" size="20" color="yellow" align= "center" >Pizza Punch <br> <dfn>Worth Loving</dfn></font>
</center>
<img src ="slide.png" height=100 width=1290 >

</div>

<ul border="4" id="navmenu" >
<br><br><br><br><br><br>
<!--<a href="frame.html"><input id="button" type="submit"  value="Home"  style="border-top-right-radius:10px;border-top-left-radius:10px;border-bottom-right-radius:10px;border-bottom-left-radius:10px;"></a> -->
<li><a href="pizza2.html" target="_blank"><font color=yellow>HOME</font></a></li>
<li><a href="menu.html"><font color=yellow> MENU</font></a>
	<ul class="sub"  >	
		<li><a href="menu.html">Socheezy Chilli</a></li>
		<li><a href="menu.html">The Big Pizza</a></li>
		<li><a href="menu.html">Birizza</a></li>
		<li><a href="menu.html">Deserts & Drinks</a></li>
		
	</ul>

</li>
<li><a href="offers.html" ><font color=yellow>OFFERS</font></a>
	
</li>
<li><a href="feedback.html" ><font color=yellow>FEEDBACK</font></a></li>

<li><a href="login.html" s><font color=yellow>SIGN IN</font></a>
	<ul class="sub" >	
		<li><a href="login.html" >REGISTER</a></li>
	
			</ul>
</li>

<li><a href="contact.html" ><font color=yellow>CONTACT US</font></a></li>
</ul> 
 
  <div class="container">
   <!-- Codrops top bar -->
   <div class="codrops-top">
       <a href="pizza2.html">
           <strong>&laquo; Home: </strong>
       </a>
       <span class="right">
                <b>Log in For Delicious Pizza</b>      
           
       </span>
       <div class="clr"></div>
   </div><!--/ Codrops top bar -->
   <header>
       <h1>Login and Registration Form </h1>
	</header>
   <section>				
       <div id="container_demo" >
          
           <a class="hiddenanchor" id="toregister"></a>
           <a class="hiddenanchor" id="tologin"></a>
           <div id="wrapper">
               <div id="login" class="animate form">
                   <form  method="post" action="login.php" autocomplete="on"> 
                       <h1>Log In</h1> 
                       <p>
							<?php
								session_start();
								echo "Invalid User ".$_SESSION['login_user']; 

							?>                       
                       </p>
                       <p> 
                            Your email or username 
                           <input id="username" name="username" required="required" type="text" placeholder="myusername or mymail@mail.com"/>
                       </p>
                       <p> 
                            Your password 
                           <input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO" /> 
                       </p>
                       
                       <p class="login button"> 
                           <input type="submit" value="Login" name="submit" /> 
					</p>
                       <p class="change_link">
						Not a member yet ?
						<a href="#toregister" class="to_register">Join us</a>
					</p>
                   </form>
               </div>

               <div id="register" class="animate form">
                   <form  method="post" action="register.php" > 
                       <h1> Sign up </h1> 
                      <p> 
                           Your username
                           <input id="username" name="username" required="required" type="text" />
                       </p>
                       <p> 
                           Your email
                           <input id="email" name="email" required="required" type="text" /> 
                       </p>
                       <p> 
                           Your password 
                           <input id="password" name="password" required="required" type="password" />
                       </p>
                       <p> 
                           Mobile number 
                           <input id="mobile" name="mobile" required="required" type="text" />
                       </p>
                      
                       <p class="signin button"> 
						<input type="submit" value="Sign up"/> 
					</p>
                       <p class="change_link">  
						Already a member ?
						<a href="#tologin" class="to_register"> Go and log in </a>
					</p>
                   </form>
               </div>
			
           </div>
       </div>  
   </section>
  </div>
  
  <br><br><br><br>
<div class="footer"><br><br><br><br><br>
<div class="social">
  <a href="https://www.facebook.com" class="link facebook" target="_parent"><br><i><b><h6 style=font-size:"100%">f&nbsp;</h6></a><i class="fa fa-facebook-square"> </i> </a>
  <a href="https://twitter.com" class="link twitter" target="_parent"><br><i><h6 style=font-size:"100%">t&nbsp;</h6></a><span class="fa fa-twitter"></span></a>
  <a href="https://plus.google.com" class="link google-plus" target="_parent"><br><i><h6 style=font-size:"100%">g+&nbsp;</h6><span class="fa fa-google-plus-square"></span></a>
</div>
</div>
 </body>
</html>
