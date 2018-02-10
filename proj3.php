
<!DOCTYPE html>
<html>

<style>



/* LOGIN */
#b1{height:40px;width:90px;position:relative;top:-20px;left:-20px;}

.login2 {
		position: fixed;
		font-family: Andale Mono;font-style:oblique;font-weight:100;
		top: 0;
		right: 0;
		bottom: 0;
		left: 0;
		background: rgba(0,0,0,0.8);
		z-index: 99999;
		opacity:0;
		-webkit-transition: opacity 400ms ease-in;
		-moz-transition: opacity 400ms ease-in;
		transition: opacity 400ms ease-in;
		pointer-events: none;
	}
	
	.login2:target {
		opacity:1;
		pointer-events: auto;
	}
	
	.login2 div {
		width: 300px;
		height:260px;
		position: relative;
		margin: 10% auto;
		padding: 5px 20px 60px 20px;
		border-radius: 10px;
		background: #fff;
		background: -moz-linear-gradient(#fff, #999);
		background: -webkit-linear-gradient(#fff, #999);
		background: -o-linear-gradient(#fff, #999);
	}
	
	
	.close {
		background: #606061;
		color: #FFFFFF;
		line-height: 25px;
		position: absolute;
		right: -12px;
		text-align: center;
		top: -10px;
		width: 24px;
		text-decoration: none;
		font-weight: bold;
		-webkit-border-radius: 12px;
		-moz-border-radius: 12px;
		border-radius: 12px;
		-moz-box-shadow: 1px 1px 3px #000;
		-webkit-box-shadow: 1px 1px 3px #000;
		box-shadow: 1px 1px 3px #000;
	}

	.close:hover { background: #00d9ff; }
	
	#z{ height:2px;border:0;background:black;width:96%;}
	#y{height:1px;border:0;background:black;width:95%;}
	

/*tags */

ul#tag{position:fixed;z-index:100;background:black;width:100%;height:7%;list-style-type:none;top:0px;}

ul#tag li {
float:left;
margin: 0 10px;

margin-top:10px;
}

ul#tag li a {
font-size:20px;
font-style:oblique;
color:white;
padding-right:5px;
display: block; /* to set width & height of the a element */
width: 100px;
height: 28px;
line-height: 28px;
text-decoration: none;
text-align: center; }

ul#tag li a:hover {
background:#006666;
border-radius:10px;
}


body{
background:url(db/27.jpg) no-repeat fixed;
background-size:100% 100%;
}

/* image*/
#A img{
height:300px;width:100%;
position:relative;
top:40px;
}


/*slideshow*/


body {
   
   margin: auto;   
   font-family: sans-serif;
   text-align: center;
}


.slider-wrap {
margin: auto;   
   font-family: sans-serif;
   text-align: center;
   width: 1000px;
	height:auto;
   overflow: hidden;
   
   position:relative;
   top:50px;
   }

ul, li {
   margin: 0;
   padding: 0;
}

.slider-wrap ul {
   width: 10000px;
   position: relative;
   -webkit-animation: slide 30s;
}

.slider-wrap li {
   float: left;
   list-style: none;
   position: relative;
}

.slider-wrap a {
   text-decoration: none;
}

.slider-wrap h5 {
   position: absolute;
   bottom: 4px; 
   width: 100%;
   background: rgba(0,0,0,.3);
   color: white;
   padding: 10px 0;
   margin-bottom: 0;
   -webkit-animation: headings 30s;
}


.slider-wrap ul,
.slider-wrap h5 {
   -webkit-animation-iteration-count: infinite;
   -webkit-animation-timing-function: ease-out;
}

.slider-wrap ul:hover,
.slider-wrap ul:hover h5 {
    -webkit-animation-play-state: paused;
}


@-webkit-keyframes 'slide' {
   10% {
      left: 0;
   }

   15%,30% {
      left: -1000px;
   }

   35%,50% {
      left: -2000px;
   }

   55%,70% {
      left: -3000px;
   }

   75%,90% {
      left: -4000px;
   }
   93% { left: 0;}
}

@-webkit-keyframes 'headings' {
   10%,15%,30%,35%,50%,55%,70%,75%,90% {
      bottom: 4px;
   }
   13%,33%,53%,73%,93% {
      bottom: -200px;
   }
}


h4{
   font-size:590%;
   font-family:Andale Mono;
   font-style:oblique;
   color:white;
   font-weight:100;
   position:relative;
   top:25;
}

h3{
   font-size:590%;
   font-family:Andale Mono;
   font-style:oblique;
   color:white;
   font-weight:100;
   position:relative;
   top:-710px;
}
/*written*/

.transbox{
    position:relative;
	top:-110px;
    width:468px;
	height:160px;
	text-align:left;
	padding:5px;
	padding-left:20px;padding-right:12px;
	border:1px solid black;
	margin-left:130px;
	margin-bottom:80px;
	background-color:#1F001F;
	opacity:0.6;
	left:100px;
}

div.transbox p
      {
       
      font-weight:300;
      color:yellow;
      }

/* Images */	  
#B img{
    position:relative;
	top:-362px;
	left:270px;
    height:500px;
	margin-bottom:10px;
}

#C img{
   position:relative;
   width:500px;
   height:310px;
   left:-195px;
   top:-700px;
}
/*Banner*/
#photobanner1{
   position:relative;
   top:-850px;
   width:1200px;
   margin-left:50px;
}

/*Copyright */
.bottom{
   position:relative;
   margin:auto;
   border-radius:10px;
   top:-820px;
   color:white;
   height:50px;
   width:40%;
   
   background-color:black;
}

.bottom p{
   text-align: center;
   padding-top:15px;
}

/*textarea */
input,textarea,select{line-height: 2em;box-shadow:inset 1px 1px 20px #555;}

#tag li{color:white;}
</style>
<script type="text/javascript" src="crawler.js"></script>

</script>
<body>




<ul id="tag">

<li><a href="#login1">Login</a></li>
<li><a href="register1.html">Signup</a></li>
<li><a href="3.php">Shop</a></li>

</ul>

<form action="proj3.php#login1" method="post">
<div id="login1" class="login2">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>LOG IN</h2>
		<hr id="z"/>
		<hr id="y"/>
		<table>
        <tr><td><b>User Id:</b></td> <td><input type="text" name="t1" size="15"></td></tr><br><br>
        <tr><td><b>Password:</b></td><td><input type="password" name="t2" size="15"></td></tr></table><br><br>
        <input type="submit" name="submit" id="b1" value="LOG IN">
        
		
		</div>
</div>
</form>
<p id="A"><img src="db/9.jpg"/></p>


<div class="slider-wrap">
	<ul>
		

		<li>
			
				<img src="db/21.jpg" alt="" width="1000" height="300" />
				<h5>Online-Shopping</h5>
			
		</li>			
        
		<li>
			
				<img src="db/22.jpg" alt="" width="1000" height="300" />
				<h5>Shop till you drop</h5>
			
		</li>			
        <li>
			
				<img src="db/23.png" alt="" width="1000" height="300" />
				<h5>One stop for all your shopping needs</h5>
			
		</li>
		<li>
			
				<img src="db/24.jpg" alt="" width="1000" height="300" />
				<h5>Buy or Sell - Your choice</h5>
			
		</li>	
        <li>
			
				<img src="db/25.jpg" alt="" width="1000" height="300" />
				<h5>Keep shopping</h5>
			
		</li>			
	</ul>
</div>
<h4>SPICE UP your CLOSET</h4>
<div class="transbox">

<p>
My-Store.com is a one stop shop for all your shopping needs.<br>
It is one and only site where you can post free advertisement and get whopping deals on Clothes,Footwear,Jewellery,watches etc.
So dont wait and hurry up.<br><br>In order to post free ad, first register and then login.Once the product sold,you can remove that particular add.

</p>
</div>

<p id="B"><img src="db/28.jpg" /></p>
<p id="C"><img src="db/23.jpg" /></p>

<h3>EDITOR's faves</h3>
<div id="photobanner1">
<div class="photobanner" id="photobanner">
			
				<img class="first" src="db/1.jpg" alt="" height="300px" border="1px solid black" />
				<img src="db/5.jpg" alt="" height="300px" border="1px solid black" hspace="5px"/>
				<img src="db/2.jpg" alt="" height="300px" border="1px solid black" hspace="5px"/>
				<img src="db/3.jpg" alt="" height="300px" border="1px solid black" hspace="5px"/>
				<img src="db/4.jpg" alt="" height="300px" border="1px solid black"hspace="5px"/>
				<img src="db/12.jpg" alt="" height="300px" border="1px solid black"hspace="5px"/>
				<img src="db/15.jpg" alt="" height="300px" border="1px solid black"hspace="5px"/>
				<img src="db/26.jpg" alt="" height="300px" border="1px solid black"hspace="5px"/>
				<img src="db/16.jpg" alt="" height="300px" border="1px solid black"hspace="5px"/>
				
				
</div>
<script type="text/javascript">
marqueeInit({
	uniqueid: 'photobanner',
	style: {                           //for marquee container
		'padding': '2px',

		'margin': '70px',    	
		
		
	},
	inc: 5, 
	mouse: 'cursor driven', //false
	moveatleast: 1,
	neutral: 150,
	savedirection: true,
	random: true
});
</script>
</div>
<div class="bottom"><p>&copy; 2014</p></div>
</body>
</html>