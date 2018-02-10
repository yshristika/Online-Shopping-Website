
<?php
session_start();

  
$k=$_SESSION['logID'];  

  $e=0;
  $con=mysql_connect("localhost","root",""); 
  if(!$con)
   {
   echo "problem";
   }
   else
   {
   mysql_select_db("shopping");  
   $result = mysql_query("SELECT * FROM sell where Seller_id='".$k."'");
   echo "<p id='title'>Uploaded Products</p>";
   
   while($row = mysql_fetch_array($result))
     {
	    
	    $e++;
		if($e==5)
		{
		    echo "<br>";
			$e=1;
			echo "<a href='view1.php?clickedImage=$row[0]' ><img src='".$row['photo']."' /></a>";
		}
		else{
	    echo "<a href='view1.php?clickedImage=$row[0]'><img padding='20%' src='".$row['photo']."' /></a>";
	    }
		
     }    
}
?>
<html>
<style>
#title{
     color:white;font-family:Andale Mono;font-variant:small-caps;text-align:center;font-size:400%;
}
img{
   height:200px;padding:20px;width:170px;
}
</style>
<body />
</html>