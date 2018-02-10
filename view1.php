<?php
     $nid;
	 $title;$des;$brand;$con;$bc;$op;$bp;$sid;
	     $nid=$_REQUEST["clickedImage"]; 
		 $con=mysql_connect("localhost","root","");
		 if(!$con)
		 {
		     echo "problem in connection";
		 }
		 else
		 {
		     mysql_select_db("shopping");
			 $sql="select * from sell where id=$nid";
			 
			 $result=mysql_query($sql);
			 
             echo "<table id='detail' >";
	         while($row=mysql_fetch_array($result))
	        {
		     $title=$row[4];
		     $des=$row[5];
		     $brand=$row[6];
		     $con=$row[7];
			 $bc=$row[8];
             $op=$row[9];
			 $bp=$row[10];
			 $sid=$row[12];
             echo "<p id='title'>Product Details</p>";
			 
			 
			 echo "<tr><td><span>Title:</span></td><td class='sub'>".$title."</td></tr>";
			 echo "<tr><td><span>Description:</span></td><td class='sub'><pre>".$des."</pre></td></tr>";
			 echo "<tr><td><span>Brand:</span></td><td class='sub'>".$brand."</td></tr>";
			 echo "<tr><td><span>Condition:</span></td><td class='sub'>".$con."</td></tr>";
			 echo "<tr><td><span>Bar-Code:</span></td><td class='sub'>".$bc."</td></tr>";
			 echo "<tr><td><span>Original Price:</span></td><td class='sub'>".$op."Rs.</td></tr>";
			 echo "<tr><td><span>Buy it now price:</span></td><td class='sub'>".$bp."Rs.</td></tr>";
             echo "</table>";
			 
			 }
			
		}	 
?>
<html>
<style> 

span{
color:#FCA908;font-family:Andale Mono;font-style:oblique;
font-size:25px;font-variant:small-caps;line-height:18px;
position:relative;top:490px;left:-180px;}
#email{font-variant:normal;}
td{color:white;text-transform:capitalize;}
table{border-spacing:3px 30px;border:none;}
#detail{position:relative;margin:auto;top:-500px;left:150px;}
.sub, .sub pre{font-size:17px;font-family:Georgia;position:relative;top:490px;left:-180px;}



#title{
   color:white;font-family:Andale Mono;font-variant:small-caps;text-align:center;font-size:400%;
   }
   .sub pre{position:relative;top:6px;left:0px;}
</style>
<body /></html>