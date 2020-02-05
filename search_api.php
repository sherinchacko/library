<?php
if(isset($_POST["getName"]))
{
    $Name=$_POST["getName"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="library";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Bookcode`, `Author`, `Description`, `Price`, `Publisher` FROM `bookstall` WHERE `Bookname`='$Name'";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
        $R=array();
        while($row=$result->fetch_assoc())
        {
           $R["data"][]=$row;
        }
        echo json_encode($R);        

    }

}

?>