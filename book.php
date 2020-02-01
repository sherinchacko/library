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
              <a class="nav-link" href="book.php">Book Details Entry</a>
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
    <form method="GET">
    <table class="table">
        <tr>
            <td>
                Book code
            </td>
            <td>
                <input type="number" class="form-control" name="getBookCode">
            </td>
        </tr>
        <tr>
            <td>
                Book name
            </td>
            <td>
                <input type="text" class="form-control" name="getBookTitle">
            </td>
        </tr>
        <tr>
            <td>
                Author
            </td>
            <td>
                <input type="text" class="form-control" name="getAuthor">
            </td>
        </tr>
        <tr>
            <td>
                Description
            </td>
            <td>
                <input type="text" class="form-control" name="getDescription">
            </td>
        </tr>
        <tr>
            <td>
                Price
            </td>
            <td>
                <input type="number" class="form-control" name="getPrice">
            </td>
        </tr>
        <tr>
            <td>
                Publisher
            </td>
            <td>
                <input type="text" class="form-control" name="getPublisher">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" name="submit" class="btn btn-success"> submit

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
   $Bkcode=$_GET["getBookCode"];
   $Bktitle=$_GET["getBookTitle"];
   $Author=$_GET["getAuthor"];
   $Description=$_GET["getDescription"];
   $Price=$_GET["getPrice"];
   $Publisher=$_GET["getPublisher"];
   $Servername="localhost";
   $Dbusername="root";
   $Dbpassword="";
   $Dbname="library";
   $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
   $Sql="INSERT INTO `bookstall`( `Bookcode`, `Booktitle`, `Author`, `Description`,`Price`,`Publisher`)
    VALUES ($Bkcode,'$Bktitle','$Author','$Description',$Price,'$Publisher')";
    $result=$connection->query($Sql);
    if($result===TRUE)
    {
        echo "success";
    }
    else{
        echo "invalid";
    }

}
?>