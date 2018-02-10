<?php
   session_start();
  $fname;$lname;$addr;$city;$state;$mob;$email;$id1;
   $id1=$_SESSION["logID"];
   $con=mysql_connect("localhost","root","");
   
   if(!$con)
   echo "Problem in connection";
   else
   {
      mysql_select_db("shopping");
	  $sql="select * from register where Id='$id1'";
	  $result=mysql_query($sql);
	  echo "<p id='title'>Update Information</p>";
	  echo "<form action='update.php' method='post'>";
	  echo "<table>";
	  while($row=mysql_fetch_array($result))
	  {
	      $fname=$row[0];
		  $lname=$row[1];
		  $addr=$row[2];
		  $city=$row[3];
		  $state=$row[4];
		  $mob=$row[5];
		  $email=$row[6];
		
		  //echo "<html><body>";
		  echo "<tr><td><span>First Name:</span></td><td><input type='text' value='$fname' name='fname' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>Last Name:</span></td><td><input type='text' value='$lname' name='lname' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>Home Address:</span></td><td><input type='text' value='$addr' name='addr' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>City:</span></td><td><input type='text' value='$city' name='city' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>State:</span></td><td><input type='text' value='$state' name='state' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>Mobile Number:</span></td><td><input type='text' value='$mob' name='mob' size='30' class='sub'></td></tr>";
		  echo "<tr><td><span>Email Address:</span></td><td><input type='text' value='$email' name='email' size='30' class='sub'></td></tr>";
		  
		  //echo "</body></html>";
	  }echo"</table>";
	  echo "<input type='submit' name='update' value='Update' id='b1'>";
	  echo "</form>";
	  }
   ?>
   <html>
   <style>
   #title{
     color:white;font-family:Andale Mono;font-variant:small-caps;text-align:center;font-size:400%;
}

   
   #b1{height:40px;width:90px;position:relative;top:40px;left:280px;}
   input,textarea,select{line-height: 2em;box-shadow:inset 1px 1px 20px #555;}

   span{
   color:#FCA908;font-family:Andale Mono;font-style:oblique;
font-size:25px;font-variant:small-caps;line-height:18px;
position:relative;top:10px;left:170px;}

.sub{
   position:relative;top:10px; left:170px;
}

   </style>
   <body />
   </html>