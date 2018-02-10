<?php

session_start();

$allowedExts = array("gif", "jpeg", "jpg", "png","JPG");
$temp = explode(".", $_FILES["file"]["name"]);
$path= "/Project/upload1";
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/JPG")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 8000000)
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {


    if (file_exists("upload1/" . $_FILES["file"]["name"]))
      {
      exit( " already exists ");
      }
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],"upload1/" . $_FILES["file"]["name"]);
      echo "Stored in: " . "upload1/" . $_FILES["file"]["name"] . "<br>";
	  $mysql_path = $path."/".$_FILES["file"]["name"];
	  $_SESSION["fff"]=$mysql_path;
      
      }
    }
  }
else
  {
  echo "Invalid file";
  }
?>

<?php

    $id1=$_SESSION["logID"];
    $path=$_SESSION["fff"];
    $categ1;$categ2;$categ3;$title;$desc;$brand;$condn;$barc;$op;$bp;$photo;
	
	   $categ1=$_POST["mainC"];
	   $categ2=$_POST["subC"];
	   if(strcmp($categ1,"Watches")!=0)
	  { $categ3=$_POST["SsubC"];}
	  else{$categ3='null';}
	   $title=$_POST["t1"];
	   $desc=$_POST["t2"];
	   $brand=$_POST["t3"];
	   $condn=$_POST["t4"];
	   $barc=$_POST["t5"];
	   $op=$_POST["t6"];
	   $bp=$_POST["t7"];
	   
	   $con=mysql_connect("localhost","root","");
	   if(!$con)
	   {
	     echo "problem in connection";
	   }
	   
	   else
	   {
	     mysql_select_db("shopping");
		 $sql="insert into sell value(null,'$categ1','$categ2','$categ3','$title','$desc','$brand','$condn','$barc','$op','$bp','$path','$id1')";
		 mysql_query($sql);
		 header("Location:mypage.php");
	   }
	

	
	?>