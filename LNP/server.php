
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
    $_SESSION["title"]=mysqli_real_escape_string($db, $_POST["title"]);
    $_SESSION["d"]=mysqli_real_escape_string($db, $_POST["date"]);
    $_SESSION["content"]=mysqli_real_escape_string($db, $_POST["content"]);
    $_SESSION["highlights"]=mysqli_real_escape_string($db, $_POST["highlights"]);
    $_SESSION["brief"]=mysqli_real_escape_string($db, $_POST["brief"]);
    $_SESSION["category"]=mysqli_real_escape_string($db, $_POST["category"]);
    $_SESSION["image"]=mysqli_real_escape_string($db, $_POST["upload"]);
}

$query = "INSERT INTO `". $_SESSION["category"]."` (`Highlights`, `Title`, `Brief`, `Content`, `Date`, `Image`) 
  			  VALUES('". $_SESSION["highlights"]."','". $_SESSION["title"]."','". $_SESSION["brief"]."','". $_SESSION["content"]."','". $_SESSION["d"]."','". $_SESSION["image"]."')";
mysqli_query($db, $query);
?>