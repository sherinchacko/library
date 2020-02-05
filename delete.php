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
                <a class="nav-link" href="delete.php">Delete</a>
              </li>
          </ul>
    </nav>
    <center>Welcome To The Delete Page </center>
    <form method="POST">
    <table class="table">
    <tr>
    <td>
    Book Code:
    </td>
    <td>
    <input type="text" class="form-control" name="getCode">
    </td>
    </tr>
    <tr>
    <td>

    </td>
    <td>
    <button type="submit" class="btn btn-danger" name="submit">
    Get Details
    </button>
    </td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $Bcode=$_POST["getCode"];
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="library";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT   `Bookname`, `Author`, `Description`, `Price`, `Publisher` FROM `bookstall` WHERE `Bookcode`=$Bcode";
    $result=$connection->query($Sql);
    if($result->num_rows>0)
    {
      while($row=$result->fetch_assoc())
      {
        $Bkname=$row["Bookname"];
        $Bkauthor=$row["Author"];
        $Bkdes=$row["Description"];
        $Bkprice=$row["Price"];
        $Bkpub=$row["Publisher"];
        echo"<form method='POST'><table class='table'> <tr> <td> Bookname </td> <td> <input type='text' name='mm' value='$Bkname' </td> </tr>
        <tr> <td> Author </td> <td> <input type='text' name='nn' value='$Bkauthor' </td> </tr>
        <tr> <td> Description </td> <td> <input type='text' name='bb' value='$Bkdes' </td> </tr>
        <tr> <td> Price </td> <td> <input type='text' name='vv' value='$Bkprice' </td> </tr>
        <tr> <td> Publisher </td> <td> <input type='text' name='cc' value='$Bkpub' </td> </tr>
        <tr> <td> <button type='submit' class='btn btn-danger' value='$Bcode' name='upbutton'> Delete </button> </td> </tr>
        </form>";
      }
      
    }
    else{
        echo "invaild";
    }

}
if(isset($_POST["upbutton"]))
{
  $Upname=$_POST["mm"];
  $Upauthor=$_POST["nn"];
  $Updes=$_POST["bb"];
  $Upprice=$_POST["vv"];
  $Uppub=$_POST["cc"];
  $Givencode=$_POST["upbutton"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="library";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="DELETE FROM `bookstall` WHERE `Bookcode`=$Givencode";
  $result=$connection->query($Sql);
  if($result===TRUE)
  {
      echo"successfully deleted";
  }
  else{
      echo"failed to delete";
  }
}
?>