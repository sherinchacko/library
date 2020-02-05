<?php
if(isset($_POST["getBookCode"]))
{
   $Bkcode=$_POST["getBookCode"];
   $Bkname=$_POST["getName"];
   $Author=$_POST["getAuthor"];
   $Description=$_POST["getDescription"];
   $Price=$_POST["getPrice"];
   $Publisher=$_POST["getPublisher"];
   $Servername="localhost";
   $Dbusername="root";
   $Dbpassword="";
   $Dbname="library";
   $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
   $Sql="INSERT INTO `bookstall`( `Bookcode`, `Bookname`, `Author`, `Description`,`Price`,`Publisher`)
    VALUES ($Bkcode,'$Bkname','$Author','$Description',$Price,'$Publisher')";
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