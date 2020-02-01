<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
<ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="book.php">Book Details Entry </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edit.php">Edit</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="Delete.php">Delete</a>
    </li>
  </ul>
</nav>
   <center> Welcome to search page:</center> 
   <form method="GET">
   <table class="table">
       <tr>
           <td>
           Enter Book name:
           </td>
           <td>
               <input type="text" class="form-control" name="getName">
           </td>
           
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" class="btn btn-warning" name="submit">
                    Serach

                </button>
            </td>
        </tr>

   </table>   
   </form>
</body>
</html>
<?php
if(isset($_GET["submit"]))
{
    $Name=$_GET["getName"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="library";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Bookcode`, `Author`, `Description`, `Price`, `Publisher` FROM `bookstall` WHERE `Bookname`='$Name'";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $Code=$row["Bookcode"];
            $Author=$row["Author"];
            $Dis=$row["Description"];
            $Money=$row["Price"];
            $Pub=$row["Publisher"];
            echo"<table class='table'> <tr> <td> Bookcode </td> <td> $Code </td> </tr>
            <tr> <td> Author </td> <td> $Author </td> </tr>
            <tr> <td> Description </td> <td> $Dis </td> </tr>
            <tr> <td> Price </td> <td> $Money </td> </tr>
            <tr> <td> Publisher </td> <td> $Pub </td> </tr>";
        }
    }

}

?>