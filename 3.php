<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
body{background:url(db/27.jpg) no-repeat fixed;
     background-size:100% 100%;
	margin:auto;
	margin-bottom:30px; 
     font-family: sans-serif;
   
	
}
	 
	 input,textarea,select{line-height: 2em;box-shadow:inset 1px 1px 20px #555;}
/* LOGIN */
.login2 #b1{height:40px;width:90px;position:relative;top:-20px;align:center;left:90px;}
h2{text-align:center;}
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

ul#tag{position:fixed;z-index:100;background:black;width:100%;height:7%;top:-17px;}

ul#tag li {
float:right;
margin:auto; /*0 10px;*/
margin-top:10px;

}
#tag1{margin-right:25px;}
ul#tag li a {
font-size:20px;
font-style:oblique;
color:white;
padding-right:10px;
display:block ; 
width: 80px;
height: 28px;
line-height: 28px;
text-decoration: none;
text-align: center; }

ul#tag li a:hover {
background:#006666;
border-radius:10px;
}
#site{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;list-style-type:none;}
.site1{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;left:29%;}
#site1{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;left:35px;top:-1px;text-transform:capitalize;}



/* Sell heading*/
#top{
   height:2px;
   background:white;
   width:38.5%;
   position:relative;
   top:110px;
   float:left;
   margin-left:15px;
}
#bottom{
   position:relative;top:127px;margin-left:15px;
   left:-39%;width:38.5%;background:white;
}

#qw{
   position:relative;
   top:-70px;
   float:left;
   display:inline-block;
   text-align:center;
   font-size:700%;
   font-family:Andale Mono;
   font-style:oblique;
   color:white;
   font-weight:100;
   padding:0 0.25em;
}

#top1{
     height:2px;background:white;position:relative;top:110px;margin-right:15px;}
#bottom1{position:relative;top:107px;margin-right:15px;}

/*Menu*/
.oe_wrapper{
   	font-family:"Trebuchet MS", Helvetica, sans-serif;
	font-size:15px;
	color: #fff;
	text-transform:uppercase;
	/*overflow-x:hidden;*/
	margin:0;clear:both;
	padding:0;
}

.oe_overlay{
	background:#000;
	opacity:0;
	position:fixed;
	top:0px;
	left:0px;
	width:100%;
	height:100%;
}
ul.oe_menu{
	list-style:none;
	position:relative;
	margin:-130px 260px 25px 360px;
	width:560px;
	float:left;
	clear:both;
}
ul.oe_menu > li{
	width:112px;
	height:101px;
	padding-bottom:2px;
	position:relative;
	float:left;
	
}
ul.oe_menu > li > a{
	display:block;
	background-color:#006666;/*#101010;*/
	color:#aaa;
	text-decoration:none;
	font-weight:bold;
	font-size:13px;
	width:90px;
	height:80px;
	padding:10px;
	margin:1px;
	text-shadow:0px 0px 1px #000;
	opacity:0.8;
}
ul.oe_menu > li > a:hover,
ul.oe_menu > li.selected > a{
	background:#fff;
	color:#101010;
	opacity:1.0;
}
.oe_wrapper ul.hovered > li > a{
	background:#fff;
	text-shadow:0px 0px 1px #FFF;
}
ul.oe_menu div{
	position:absolute;
	top:103px;
	left:1px;
	background:#fff;
	width:498px;
	height:180px;
	padding:30px;
	display:none;
}
ul.oe_menu div ul li a{
	text-decoration:none;
	color:#222;
	padding:2px 2px 2px 4px;
	margin:2px;
	display:block;
	font-size:12px;
}
ul.oe_menu div ul.oe_full{
	width:100%;
}
ul.oe_menu div ul li a:hover{
	background:#000;
	color:#fff;
}
ul.oe_menu li ul{
	list-style:none;
	float:left;
	width: 100px;
	margin-right:10px;
}
li.oe_heading{
    
	color:#aaa;
	font-size:16px;
	margin-bottom:10px;
	padding-bottom:6px;
	border-bottom:1px solid #ddd;
}

iframe{
    position:relative;
	left:80px;
   height:2100px;
   width:1190px;
   align:middle;border:none;
}


</style>
<script language="javascript">

</script>
<body>

<ul id="tag">
<li id="site">MyStore.com</li>
<li><a href="#login1" id="tag1">Login</a></li>
<li><a href="register1.html">Signup</a></li>
<li><a href="3.php">Shop</a></li> 
<li><a href="proj3.html">Home</a></li>

</ul>

<form action="login.php" method="post">
<div id="login1" class="login2">
	<div>
		<a href="#close" title="Close" class="close">X</a>
		<h2>LOG IN</h2>
		<hr id="z"/>
		<hr id="y"/>
		<table>
        <tr><td><b>User Id:</b></td> <td><input type="text" name="t1" size="15" ></td></tr><br><br>
        <tr><td><b>Password:</b></td><td><input type="password" name="t2" size="15"></td></tr></table><br><br>
        <input type="submit" id="b1" name="submit" value="LOG IN">
        

		</div>
</div>
</form>

<hr id="top" />
<hr id="bottom" />
<p id="qw">Shop</p>
<hr id="top1" />
<hr id="bottom1" />

<div class="oe_wrapper">
<div id="oe_overlay" class="oe_overlay"></div>
<ul id="oe_menu" class="oe_menu">
<li><a href="">Clothes</a>
<div>
  <ul> 
     <li class="oe_heading">Men</li>
	 <li><a href="2.php?categSelected=Shirts" target="iframe1">Shirts</a></li>
	 <li><a href="2.php?categSelected=Jeans" target="iframe1">Jeans</a></li>
	 <li><a href="2.php?categSelected=Shirts" target="iframe1">Pants/Shorts</a></li>
	 <li><a href="2.php?categSelected=Ethnic wear" target="iframe1">Ethnic wear</a></li>
	 <li><a href="2.php?categSelected=Sports wear" target="iframe1">Sports wear</a></li>
	 <li><a href="2.php?categSelected=Sleepwears" target="iframe1">Sleepwears</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Women</li>
	 <li><a href="2.php?categSelected=Dresses/Tops" target="iframe1">Dresses/Tops</a></li>
	 <li><a href="2.php?categSelected=Shorts/Skirts" target="iframe1">Shorts/Skirts</a></li>
	 <li><a href="2.php?categSelected=Pants/Trousers" target="iframe1">Pants/Trousers</a></li>
	 <li><a href="2.php?categSelected=Leggings/Jeggings" target="iframe1">Leggings/Jeggings</a></li>
	 <li><a href="2.php?categSelected=SleepWear" target="iframe1">Sleepwear</a></li>
	 <!-- <li><a href="2.php?categSelected=ethnic Wear" target="iframe1">Ethnic Wear</a></li> -->
	 <li><a href="2.php?categSelected=Winter Wear" target="iframe1">Winter Wear</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Kids</li>
	 <li><a href="2.php?categSelected=Boys clothing" target="iframe1">Boys Clothing</a></li>
	 <li><a href="2.php?categSelected=Girls clothing" target="iframe1">Girls Clothing</a></li>
   </ul>
</div>
</li>


<li><a href="">Footwear</a>
<div style="left:-111px;">
  <ul>
     <li class="oe_heading">Men</li>
	 <li><a href="2.php?categSelected=Boots" target="iframe1">Boots</a></li>
	 <li><a href="2.php?categSelected=Floaters/Flip-Flops" target="iframe1">Floaters/Flip-Flops</a></li>
	 
	 <li><a href="2.php?categSelected=Sneakers" target="iframe1">Sneakers</a></li>
	 <li><a href="2.php?categSelected=Shoes" target="iframe1">Shoes</a></li>
	 <li><a href="2.php?categSelected=Sandals" target="iframe1">Sandals</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Women</li>
	 <li><a href="2.php?categSelected=Sandal" target="iframe1">Sandals</a></li>
	 <li><a href="2.php?categSelected=Flat/Slippers" target="iframe1">Flats/Slippers</a></li>
	 <li><a href="2.php?categSelected=Wedges" target="iframe1">Wedges</a></li>
	 <li><a href="2.php?categSelected=Boot" target="iframe1">Boots</a></li>
	 <li><a href="2.php?categSelected=Bellies/Shoes" target="iframe1">Bellies/Shoes</a></li>
	 
   </ul>
   <ul>
     <li class="oe_heading">Kids</li>
	 <li><a href="2.php?categSelected=Boys" target="iframe1">Boys</a></li>
	 <li><a href="2.php?categSelected=Girls" target="iframe1">girls</a></li>
   </ul>
</div>
</li>

<li><a href="">Jewellery</a>
<div style="left:-223px;">
  <ul>
     <li class="oe_heading">Men</li>
	 <li><a href="2.php?categSelected=Rings" target="iframe1">Rings</a></li>
	 <li><a href="2.php?categSelected=Bracelet" target="iframe1">Bracelets</a></li>
	 <li><a href="2.php?categSelected=Pendents" target="iframe1">Pendents</a></li>
	 <li><a href="2.php?categSelected=Chain" target="iframe1">Chains</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Women</li>
	 <li><a href="2.php?categSelected=Fashion jewellery" target="iframe1">Fashion Jewellery</a></li>
	 <li><a href="2.php?categSelected=Precious jewellery" target="iframe1">Precious Jewellery</a></li>
   </ul>
</div>
</li>

<li><a href="">Watches</a>
<div style="left:-335px;">
  <ul>
     <li class="oe_heading">Men</li>
	 <li><a href="2.php?categSelected=Men watch" target="iframe1">Men watch</a></li>
	 </ul>
   <ul>
     <li class="oe_heading">Women</li>
	 <li><a href="2.php?categSelected=Women watch" target="iframe1">Women watch</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Kids</li>
	 <li><a href="2.php?categSelected=Kid watch" target="iframe1">Kids watch</a></li>
   </ul>
</div>
</li>

<li><a href="">Bags</a>
<div style="left:-447px;">
  <ul>
     <li class="oe_heading">Men</li>
	 <li><a href="2.php?categSelected=Backpack" target="iframe1">Backpack</a></li>
	 <li><a href="2.php?categSelected=Wallets" target="iframe1">Wallets</a></li>
	 <li><a href="2.php?categSelected=Sling bags" target="iframe1">Sling Bags</a></li>
	 <li><a href="2.php?categSelected=Laptop Bags" target="iframe1">Laptop Bags</a></li>
   </ul>
   <ul>
     <li class="oe_heading">Women</li>
	 <li><a href="2.php?categSelected=Handbags" target="iframe1">Handbags</a></li>
	 <li><a href="2.php?categSelected=Clutches" target="iframe1">Clutches</a></li>
	 <li><a href="2.php?categSelected=Shopping bags" target="iframe1">Shopping Bags</a></li>
	 <!-- <li><a href="2.php?categSelected=LapTop Bags" target="iframe1">Laptop Bags </a></li> -->
   </ul>
   <ul>
     <li class="oe_heading">Kids</li>
	 <li><a href="2.php?categSelected=Kids bag" target="iframe1">Kids Bag</a></li>
   </ul>
</div>
</li>
</ul>
</div>

<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">

$(function() {
				var $oe_menu		= $('#oe_menu');
				var $oe_menu_items	= $oe_menu.children('li');
				var $oe_overlay		= $('#oe_overlay');

                $oe_menu_items.bind('mouseenter',function(){
					var $this = $(this);
					$this.addClass('slided selected');
					$this.children('div').css('z-index','9999').stop(true,true).slideDown(200,function(){
						$oe_menu_items.not('.slided').children('div').hide();
						$this.removeClass('slided');
					});
				}).bind('mouseleave',function(){
					var $this = $(this);
					$this.removeClass('selected').children('div').css('z-index','1');
				});

				$oe_menu.bind('mouseenter',function(){
					var $this = $(this);
					$oe_overlay.stop(true,true).fadeTo(200, 0.6);
					$this.addClass('hovered');
				}).bind('mouseleave',function(){
					var $this = $(this);
					$this.removeClass('hovered');
					$oe_overlay.stop(true,true).fadeTo(200, 0);
					$oe_menu_items.children('div').hide();
				})
            });
        </script>
<!--frameborder="0" seamless-->
<iframe src="2.php?categSelected=null" id="iframe1" seamless>
</iframe>
</body>
</html>