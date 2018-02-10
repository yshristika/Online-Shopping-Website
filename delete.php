
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
   
   echo "<p id='title'>Delete Products</p>";
 
   while($row = mysql_fetch_array($result))
     {
	    
	    $e++;
		if($e==5)
		{
		    echo "<br>";
			$e=1;
	
			echo "<a href='delete1.php?selectImage=$row[0]' ><img src='".$row['photo']."' /></a>";
		}
		else{
	
	    echo "<a href='delete1.php?selectImage=$row[0]'><img src='".$row['photo']."' /></a>";
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