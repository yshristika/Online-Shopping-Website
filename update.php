<?php
session_start();

class Modify
{
   var $fname,$lname,$addr,$city,$state,$mob,$email,$id1;
   function modifyData()
   {
      $this->fname=$_POST["fname"];
	  $this->lname=$_POST["lname"];
	  $this->addr=$_POST["addr"];
	  $this->city=$_POST["city"];
	  $this->state=$_POST["state"];
	  $this->mob=$_POST["mob"];
	  $this->email=$_POST["email"];
	  $this->id1=$_SESSION["logID"];
	  
	  $con=mysql_connect("localhost","root","");
	  if(!$con)
	  echo "Problem in connection";
	  
	  else
	  {
	     mysql_select_db("shopping");
		 $sql="update register set Fname='$this->fname',Lname='$this->lname',Address='$this->addr',City='$this->city',State='$this->state',Mobile='$this->mob',Email='$this->email' where Id='$this->id1'";
		 mysql_query($sql);
		 
		 echo "<p>Data has been updated.</p>";
		 
	  }
	 }
}
$obj=new Modify();
$obj->modifyData();
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