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
<center> Welcome to the Update page...</center>
<form method="GET">
    <table class="table">
        <tr>
            <td>
                Enter Book code:
            </td>
            <td>
                <input type="text" class="form-control" name="getCode">
            </td>
        </tr>
        <tr>
            <td>

            </td>
            <td>
                <button type="submit" class="btn btn-danger" name="eeee">
                pick for edit
                    
                </button>
            </td>
        </tr>

    </table>
</form>

</body>
</html>
<?php
if(isset($_GET["eeee"]))
{
  $Bkcode=$_GET["getCode"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="library";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="SELECT   `Bookname`, `Author`, `Description`, `Price`, `Publisher` FROM `bookstall` WHERE `Bookcode`=$Bkcode";
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
      echo"<form method='POST'><table class='table'> <tr> <td> Bookname </td> <td> <input type='text' name='qq' value='$Bkname'/> </td> </tr>
      <tr> <td> Author </td> <td> <input type='text' name='ww' value='$Bkauthor' </td> </tr>
      <tr> <td> Description </td> <td> <input type='text' name='ee' value='$Bkdes' </td> </tr>
      <tr> <td> Price </td> <td> <input type='text' name='rr' value='$Bkprice' </td> </tr>
      <tr> <td> Publisher </td> <td> <input type='text' name='tt' value='$Bkpub' </td> </tr>
      <tr> <td> <button type='submit' class='btn btn-success' value='$Bkcode' name='upbutton'> Update </button> </td> </tr>
      </form>";
    }
    
  }
  else{
    echo "invalid";
  }
}
if(isset($_POST["upbutton"]))
{
  $Upname=$_POST["qq"];
  $Upauthor=$_POST["ww"];
  $Updes=$_POST["ee"];
  $Upprice=$_POST["rr"];
  $Uppub=$_POST["tt"];
  $Givencode=$_POST["upbutton"];
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="library";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="UPDATE `bookstall` SET `Bookname`='$Upname',`Author`='$Upauthor',`Description`='$Updes',`Price`=$Upprice,`Publisher`='$Uppub' WHERE `Bookcode`=$Givencode";
  $result=$connection->query($Sql);
  if($result===TRUE)
  {
    echo"success";
  }
  else{
    echo"failed";
  }
}
?>