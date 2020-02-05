<?php
if(isset($_POST["getCode"]))
{
  $Givencode=$_POST["getCode"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="library";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="DELETE FROM `bookstall` WHERE `Bookcode`=$Givencode";
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