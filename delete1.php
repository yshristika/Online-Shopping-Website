<?php

   $did=$_REQUEST['selectImage'];
   $con=mysql_connect("localhost","root","");
   if(!$con)
   { 
      echo "Problem in connection";
   }
   else
   {
      mysql_select_db("shopping");
	  $sql1="select photo from sell where id=$did";
	  $result=mysql_query($sql1);
	  while($row=mysql_fetch_array($result))
	  {
	      $photu=$row['photo'];
		  //echo $photu."<br>";
		  $temp=explode("/",$photu);
		  $image=$temp[2]."/".$temp[3];
		  //echo $image;
	      unlink($image);
       }
	 $sql="delete from sell where id=$did";
	  mysql_query($sql);
	  
	   echo "<p>Product has been deleted.</p>";
   }
   ?>
   <html>
   <style>
   p{
  border:dashed 2px white;
  color:white;
  font-size:20px;
  text-align:center;
  padding:10px;font-weight:900;font-style:oblique;
    }

   </style>
   <body />
   </html>