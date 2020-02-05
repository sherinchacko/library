<?php
    $r=array();
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="library";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Bookcode`, `Author`, `Description`, `Price`, `Publisher` FROM `bookstall`";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            
            $r["data"][]=$row;
          
        }
        echo json_encode($r);
    }



?>