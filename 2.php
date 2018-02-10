<html>
<style>

img{
   height:190px;width:150px;padding:20px;
   }
</style>
<body>
</body>
</html>


<?php
  $k=$_REQUEST["categSelected"];  
  $e=0;
  $con=mysql_connect("localhost","root",""); 
  //--------------------------------------------
  
  //-------------------------------------------------
  if(!$con)
   {
   echo "problem";
   }
   else
   {
   mysql_select_db("shopping");
   if(strcmp($k,"null")==0)
   {
   
   $result = mysql_query("SELECT * FROM sell");//select * from sell where category='';
   while($row = mysql_fetch_array($result))
     {
	    //echo "enter";
	    $e++;
		if($e==7)
		{
		    echo "<br>";
			$e=1;
			echo "<a href='view.php?clickedImage=$row[0]' ><img height='111' width='100' src='".$row['photo']."' /></a>";
		}
		else{
	    echo "<a href='view.php?clickedImage=$row[0]'><img height='111' width='100' padding='20%' src='".$row['photo']."' /></a>";
	    }
		
     }
   }
   
   else
   {
   
   $result = mysql_query("SELECT * FROM sell where category2='".$k."' OR category3='".$k."'");//select * from sell where category='';
   
    while($row = mysql_fetch_array($result))
     {
	    $e++;
		if($e==5)
		{
		    echo "<br>";
			$e=1;
			echo "<a href='view.php?clickedImage=$row[0]' ><img height='111' width='100' src='".$row['photo']."' /></a>";
		}
		else{
	    echo "<a href='view.php?clickedImage=$row[0]'><img height='111' width='100' padding='20%' src='".$row['photo']."' /></a>";
	    }
		
     }
	} 
}



?>
