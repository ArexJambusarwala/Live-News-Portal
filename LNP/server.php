
<?php
session_start();

$db = mysqli_connect('localhost', 'root', '', 'news');
if(isset($_POST['sub']))
{
    $_SESSION["title"]=$_POST["title"];
    $_SESSION["d"]=$_POST["date"];
    $_SESSION["content"]=$_POST["content"];
    $_SESSION["highlights"]=$_POST["highlights"];
    $_SESSION["brief"]=$_POST["brief"];
    $_SESSION["category"]=$_POST["category"];
}

$query = "INSERT INTO trending (`Title`, `Brief`, `Content`, `Date`, `Highlights`) 
  			  VALUES('". $_SESSION["title"]."','". $_SESSION["brief"]."','". $_SESSION["content"]."','". $_SESSION["d"]."','". $_SESSION["highlights"]."')";
mysqli_query($db, $query);
?>