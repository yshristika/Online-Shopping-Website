<?php
session_start();
   $k=$_SESSION['logID'];
   $con=mysql_connect("localhost","root","");
   if(!$con)
   { 
      echo "Problem in connection";
   }
   else
   {
     if(isset($_POST['yes']))
	 {
      session_unset();
      mysql_select_db("shopping");
	  $sql1="delete from sell where Seller_id='$k'";
	  mysql_query($sql1);
	  
	  $sql="delete from register where Id='$k'";
	  mysql_query($sql);
	  header("Location:proj3.html");
	  }
	  else
	  {
	     header("Location:mypage.php");
	  }
   }
   ?>