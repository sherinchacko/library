<?php
if(isset($_POST["Bookcode"]))
{
  $Upname=$_POST["Bookname"];
  $Upauthor=$_POST["Bookauther"];
  $Updes=$_POST["Bookdescription"];
  $Upprice=$_POST["Bookprice"];
  $Uppub=$_POST["Bookpub"];
  $Givencode=$_POST["Bookcode"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="library";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="UPDATE `bookstall` SET `Bookname`='$Upname',`Author`='$Upauthor',`Description`='$Updes',`Price`=$Upprice,`Publisher`='$Uppub' WHERE `Bookcode`=$Givencode";
  $result=$connection->query($Sql);
  if($result===TRUE)
  {
    $r["status"]="success";
  }
  else{
    $r["status"]="error";
  }
  echo json_encode($r);
}
?>