<?php
class Register
{
   var $fname,$lname,$addr,$city,$state,$mob,$email;
   var $id,$pass;
   function Registration()
   {
      $this->fname=$_POST["fname"];
	  $this->lname=$_POST["lname"];
	  $this->addr=$_POST["addr"];
	  $this->city=$_POST["city"];
	  $this->state=$_POST["state"];
	  $this->mob=$_POST["mob"];
	  $this->email=$_POST["email"];
	  $this->id=$_POST["id"];
	  $this->pass=$_POST["pass"];
	  
	  
	  $con=mysql_connect("localhost","root","");
	  
	  if(!$con)
	  {
	     echo "Problem in connection";}
	  else
	  {
	     mysql_select_db("shopping");
		 $sql="insert into register value('$this->fname','$this->lname','$this->addr','$this->city','$this->state','$this->mob','$this->email','$this->id','$this->pass')";
	     mysql_query($sql);
		  		 echo "<p>You have been registered.</p>";
		 
	  }
	}
}
$obj=new Register();
$obj->Registration();
?>
<html>
<style>

body{
background:url(db/27.jpg) no-repeat fixed;
background-size:100% 100%;
}
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