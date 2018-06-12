
<?php
session_start();

$db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
if(mysqli_connect_errno()){

echo "Error".mysqli_connect_error();
}
else
{
    echo "All set";
}

if(isset($_POST['sub']))
{
    $_SESSION["title"]=$_POST["title"];
    $_SESSION["d"]=$_POST["date"];
    $_SESSION["content"]=$_POST["content"];
    $_SESSION["highlights"]=$_POST["highlights"];
    $_SESSION["brief"]=$_POST["brief"];
    $_SESSION["category"]=$_POST["category"];
    $_SESSION["image"]=$_POST["upload"];
}

$query = "INSERT INTO `". $_SESSION["category"]."` (`Highlights`, `Title`, `Brief`, `Content`, `Date`, `Image`) 
  			  VALUES('". $_SESSION["highlights"]."','". $_SESSION["title"]."','". $_SESSION["brief"]."','". $_SESSION["content"]."','". $_SESSION["d"]."','". $_SESSION["image"]."')";
mysqli_query($db, $query);
?>