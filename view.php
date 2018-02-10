<?php
     $nid;
	 $title;$des;$brand;$con;$bc;$op;$bp;$sid;
	 $fname;$lname;//$addr;
	 $city;$state;$mob;$email;
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
			 echo "<img id='img1' src='".$row['photo']."'";
			 
			 echo "<tr><td><span>Title:</span></td><td class='sub'>".$title."</td></tr>";
			 echo "<tr><td><span>Description:</span></td><td class='sub'><pre>".$des."</pre></td></tr>";
			 echo "<tr><td><span>Brand:</span></td><td class='sub'>".$brand."</td></tr>";
			 echo "<tr><td><span>Condition:</span></td><td class='sub'>".$con."</td></tr>";
			 echo "<tr><td><span>Bar-Code:</span></td><td class='sub'>".$bc."</td></tr>";
			 echo "<tr><td><span>Original Price:</span></td><td class='sub'>".$op."Rs.</td></tr>";
			 echo "<tr><td><span>Buy it now price:</span></td><td class='sub'>".$bp."Rs.</td></tr>";
             echo "</table>";
			 
			 $sql1="select * from register where Id='$sid'";
			 
             $result1=mysql_query($sql1);

			 //echo $result1['Fname'];
			 echo "<table id='detail'>";
			 while($row1=mysql_fetch_array($result1))
			 {
			   
			     $fname=$row1[0];
				 $lname=$row1[1];
				 //$addr=$row1[2];
				 $city=$row1[3];
				 $state=$row1[4];
				 $mob=$row1[5];
				 $email=$row1[6];
				 echo "<p id='Stitle'>Seller Information</p>";
				 echo "<tr><td><span class='subdet'>Seller name:</span></td><td class='Ssub'>".$fname."&nbsp;".$lname."</td></tr>";
		
		
			 echo "<tr><td><span class='subdet'>City:</span></td><td class='Ssub'>".$city."</td></tr>";
			 echo "<tr><td><span class='subdet'>State:</span></td><td class='Ssub'>".$state."</td></tr>";
			 echo "<tr><td><span class='subdet'>Contact no:</span></td><td class='Ssub'>".$mob."</td></tr>";
			 echo "<tr><td><span class='subdet' id='email'>Email id:</span></td><td class='Ssub'>".$email."</td></tr>";
             echo "</table>";
			 }
             			 
		    }
			
		}	 
?>
<html>
<style> 

span{color:#FCA908;font-family:Andale Mono;font-style:oblique;
font-size:25px;font-variant:small-caps;line-height:18px;
position:relative;top:30px;}
#email{font-variant:normal;}
td{color:white;text-transform:capitalize;}
table{border-spacing:3px 30px;border:none;}
#detail{position:relative;margin:auto;top:-500px;left:150px;}
.sub, .sub pre{font-size:17px;font-family:Georgia;position:relative;top:30px;}
.subdet{position:relative;left:-200px;}
.Ssub{position:relative;left:-200px;top:30px;font-size:17px;font-family:Georgia;}
#img1{height:400px;width:300px;position:relative;top:-40px;left:150px;}
#title{
   color:white;font-family:Andale Mono;font-variant:small-caps;text-align:center;font-size:400%;
   }
   .sub pre{position:relative;top:6px;}
#Stitle{text-decoration:underline;
    color:white;font-family:Andale Mono;font-variant:small-caps;text-align:center;font-size:250%;
	position:relative;top:-450px;left:-70px;
}
</style>

<body /></html>