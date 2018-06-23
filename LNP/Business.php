<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Business News</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Portal with the latest news">
    <meta name="keywords" content="live,news,portal,business,livenewsportal">
    <meta name="author" content="Arex Jambusarwala">
    <link rel="icon" href="news-512.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">


</head>


<body onload="searchStart()">


    <?php include 'head.php';?>

<?php include 'navbar.php';?>

    <?php include 'sidebar.php';?>
            


        <div class="col col-xs-10 col-sm-10 col-md-10 col-lg-10" id="some1">
        <div id="content" class="container">
            <center><h1 style="margin-top: 10px; margin-bottom: 15px; font-family: fira Sans; font-weight: 700;  font-style: normal;" id="pageHeading">Business</h1></center>
              <div class="row">
                  <div id="business_1">
                  <a  href="Trending1#section1" title="Read more">
                      <div class="col-sm-10 col-md-3 col-lg-3">
                          <img id="image1" src="" width=262.5 height=280 style="  object-fit: cover;">
                          <center>
                              <h3 id="heading1" style="max-height: 79.2px; overflow:hidden"></h3>
                          </center>
                          <span id="brief1" style="max-height: 136px; overflow:hidden"></span>
                          <br><br>
                      <div class="uploadDate">
                          <strong style="color: lightgrey" id="date1"></strong>
                      </div>
                     </div>
                    </a>
                  </div>
                  <div id="business_2">
                      <a  href="Trending1#section2" title="Read more">   <div class="col-sm-10 col-md-3 col-lg-3"><img id="image2" src="" width=262.5 height=280 style="  object-fit: cover;"><center><h3 id="heading2"  style="max-height: 79.2px; overflow:hidden"></h3></center> <span id="brief2"></span><br><br>
                                     <div class="uploadDate"><strong style="color: lightgrey" id="date2"></strong></div></div></a>
                  </div>
                  <div id="business_3">
                      <a  href="Trending1#section3" title="Read more">   <div class="col-sm-10 col-md-3 col-lg-3" ><img id="image3" src="" width=262.5 height=280; style="  object-fit: cover;"><center><h3 id="heading3"  style="max-height: 79.2px; overflow:hidden"></h3></center> <span id="brief3"></span><br><br>
                   <div class="uploadDate"><strong style="color: lightgrey" id="date3"></strong></div></div></a>
                  </div>
                  <div class="col-md-0 col-lg-3" style="border-style: solid; border-radius: 5px; border-color: rgba(128,128,128,0.5);border-left-color: white;border-right-color: white; border-width: 2px; padding-bottom: 10px;" id="otherStories1">
                      <h2 style="font-family:Roboto Condensed; font-size: 27px; font-weight: 700">Other Stories</h2>
                  <hr>
                      <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      
</div>
        </div><br><br><br>
            <div class="row" id="otherStories3" style="margin-bottom: 60px; border-bottom:2px solid rgba(128,128,128,0.5);">
                <h2 style="font-family:Roboto Condensed; font-size: 27px; font-weight: 700; padding-left:27px;">Other Stories</h2><hr>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
            </div>
                          <div class="row">
                              <div id="business_4">
                                  <a  href="Trending1#section4" title="Read more"><div class="col-sm-10 col-md-3 col-lg-3"><img id="image4" src="" width=262.5 height=280 style="  object-fit: cover;"><center><h3 id="heading4"  style="max-height: 79.2px; overflow:hidden"></h3></center> <span id="brief4" style="max-height: 79.2px; overflow:hidden"></span><br><br>
                      <div class="uploadDate"><strong style="color: lightgrey" id="date4"></strong></div>


                      </div></a>
                              </div>
                                  <div id="business_5">
                                      <a  href="Trending1#section5" title="Read more"><div class="col-sm-10 col-md-3 col-lg-3"><img id="image5" src="" width=262.5 height=280 style="  object-fit: cover;"><center><h3 id="heading5"  style="max-height: 79.2px; overflow:hidden"></h3></center> <span id="brief5" style="max-height: 79.2px; overflow:hidden"></span><br><br>
                                        <div class="uploadDate"><strong style="color: lightgrey" id="date5"></strong></div></div></a>
                              </div>
                  <div id="business_6">
                      <a  href="Trending1#section6" title="Read more"><div class="col-sm-10 col-md-3 col-lg-3"><img id="image6" src="" width=262.5 height=280 style="  object-fit: cover;"><center><h3 id="heading6"  style="max-height: 79.2px; overflow:hidden"></h3></center> <span id="brief6"></span><br><br>
                                        <div class="uploadDate"><strong style="color: lightgrey" id="date6"></strong></div></div></a>
                              </div>
                  <div class="col-md-0 col-lg-3" style="border-style: solid; border-radius: 5px; border-color: rgba(128,128,128,0.5);border-left-color: white;border-right-color: white; border-width: 2px; padding-bottom: 10px;" id="otherStories2">
                      <h2 style="font-family:Roboto Condensed; font-size: 27px; font-weight: 700">Other Stories</h2>
                  <hr>
                      <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <a href="Trending1">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div></a>
                          </div>
                      </div>
                      
                      
</div>
        </div>
            <div class="row" id="otherStories4" style="margin-bottom: 60px; border-bottom:2px solid rgba(128,128,128,0.5);">
                <h2 style="font-family:Roboto Condensed; font-size: 27px; font-weight: 700; padding-left:27px;">Other Stories</h2><hr>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
                <a href="Trending1">
                    <div class="col-md-3 col-lg-3">
                        <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:14px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                    <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                    </div>
                </a>
            </div>
</div>
            </div>
</div>
    </div><br>
    <div>

<?php include 'footer.php';?>
<?php include 'subfooter.php';?>



    <script>
      /*  for(i=1;i<=<?php  $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $query="SELECT COUNT(*) FROM business";
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["COUNT(*)"]?>;i++)
        {*/
                document.getElementById("heading"+1).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+1).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+1).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];?>";
                document.getElementById("date"+1).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
        
                document.getElementById("heading"+2).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+2).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];
                    ?>";
                document.getElementById("date"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
                        document.getElementById("heading"+3).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+3).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];
                    ?>";
                document.getElementById("date"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
                        document.getElementById("heading"+4).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+4).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];
                    ?>";
                document.getElementById("date"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
                        document.getElementById("heading"+5).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+5).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+5).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];
                    ?>";
                document.getElementById("date"+5).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
                        document.getElementById("heading"+6).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Title"];?>";
               document.getElementById("image"+6).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Image"];?>";
                document.getElementById("brief"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM business";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Brief` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Brief"];
                    ?>";
                document.getElementById("date"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $query="SELECT `Date` FROM `business` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Date"];            
                    ?>";
       // }
        </script>


        <script src="script.js"> </script>
</body>


</html>
