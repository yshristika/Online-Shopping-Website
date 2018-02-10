<?php
session_start();
?>
<html>
<style>

body{background:url(db/27.jpg) no-repeat fixed;
     background-size:100% 100%;
	margin:auto;
	margin-bottom:70px;
     font-family: sans-serif;
     /*text-align:center;*/
	
}
	 
	 
/* DELETE ACCOUNT */
.delAcc2 {
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
	
	.delAcc2:target {
		opacity:1;
		pointer-events: auto;
	}
	
	.delAcc2 div {
		width: 300px;
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
#site{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;}
.site1{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;left:29%;}
#site1{position:absolute;color:#FCA908;font-size:20px;font-style:oblique;left:35px;top:-1px;text-transform:capitalize;}

/*Menu*/
#navigation {
margin-top:150px;
border-right:1px solid #999;
padding:10px 0px;
width:145px;
}
#navigation li{}
#navigation a  {
display:block;
text-decoration:none;
text-transform:uppercase;
height:37px;color:gray;
text-align:right;
padding-right:20px;
padding-top:20px;
padding-bottom:5px;
}
#navigation li:hover{
background:#2e3639;
}
#navigation li .mid{padding-top:10px;margin-bottom:12px;}

#iframe2{
    position:relative;
	top:-300px;border:none;
	left:280px;
   height:1200px;
   width:890px;
   align:middle;
}


</style>
<body>
<ul id="tag">
<li id="site">MyStore.com</li>
<li><a href="logout.php" id="tag1">Logout</a></li> 
<li><a href="sell1.html">Sell</a></li>
<li class="site1">Hi,<a href="mypage.php" id="site1">
    <?php
	   echo $_SESSION["Slog"];
	?>
</a></li>
</ul>

<ul id="navigation">
<li><a href="update1.php" class="mid"target="iframe2">Update Contact Info</a></li>
<li><a href="delete.php" class="mid" target="iframe2">Delete Products</a></li>
<li><a href="#delAcc1" class="mid">Delete Account</a></li>
</ul>

<form action="delAccount.php" method="post">
<div id="delAcc1" class="delAcc2">
<div>
<a href="#close" title="Close" class="close">X</a>
		<h2>Delete Account</h2>
		<hr id="z"/>
		<hr id="y"/>
		<p> Are you Sure you want to delete your My-Store Account</p>
		<input type="submit" name="yes" id="b1" value="YES">
		<input type="submit" value="NO" id="b2" name='no'>
</div>
</div>
</form>
<iframe src="mains.php" id="iframe2" seamless ></iframe>
</body>
</html>

