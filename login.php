
<?php
session_start();
class Login
{
   var $id,$pwd,$id1,$pwd1,$c=0,$name;
   function Cdata()
   {
      $this->id=$_POST["t1"];
	  $this->pwd=$_POST["t2"];
	  $con=mysql_connect("localhost","root","");
	  if(!$con)
	  echo "Problem in connection";
	  else
	  {
	      mysql_select_db("shopping");
		  $sql="select * from register";
		  $r=mysql_query($sql);
		  while($row=mysql_fetch_array($r))
		  {
		     $this->id1=$row['Id'];
			 $this->pwd1=$row['Password'];
			 $this->name=$row['Fname'];
			 if($this->id==$this->id1) 
             {
                 if($this->pwd==$this->pwd1)
                 { 
                    $this->c=1;
                    break;
                 }
             
             }
		  }
		  if($this->c==1)
          {
			 
             $_SESSION["Slog"]=$this->name;
			 $_SESSION["logID"]=$this->id1;
			 header('Location:mypage.php');
          }
          else
          {
		      
			 header('Location:proj3.html#login1');
			 
			
          } 
	  }
	}
}
$obj=new Login();
$obj->Cdata();
?>
