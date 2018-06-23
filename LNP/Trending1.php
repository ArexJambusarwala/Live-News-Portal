<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEWS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="news-512.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">



</head>


<body data-spy="scroll" data-target="#scrollspy" data-offset="0"  onload="searchStart()">


    <div id="particles-js">
        <div id="exa">

            <h1 style="font-family: 'roboto'">Live News Portal</h1>

        </div>

    </div>

    <script src="particles.js"></script>

    <script>
        particlesJS.load('particles-js', 'particles.json');

    </script>

<?php include 'navbar.php';?>

    <?php include 'sidebar.php';?>



        <div class="col col-xs-10 col-sm-10 col-md-10 col-lg-10">
        <div id="content" class="container-fluid">
              <div class="row">
                  <div class="col-lg-8">
                      <section data-id="1" id="section1"  style="padding-top:55px">
                          <h2 id="heading1"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date1"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image1"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high1"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent1"></p>
                      </section>
                      
                      <section data-id="2" id="section2" style="padding-top:120px">
                      <h2 id="heading2"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date2"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image2"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high2"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent2"></p>
                      </section>
                      <section data-id="3" id="section3" style="padding-top:120px">
                      <h2 id="heading3"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date3"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image3"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high3"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent3"></p>
                      </section>
                      <section data-id="4" id="section4" style="padding-top:120px">
                      <h2 id="heading4"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date4"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image4"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high4"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent4"></p>
                      </section>
                      <section data-id="5" id="section5" style="padding-top:120px">
                      <h2 id="heading5"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date5"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image5"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high5"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent5"></p>
                      </section>
                      <section data-id="6" id="section6" style="padding-top:120px">
                      <h2 id="heading6"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date6"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-md-6 col-lg-6">
                                  <img src="" width="auto" height="300" style="object-fit: cover;" id="image6"></div>
                              <div class="col col-md-6 col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high6"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent6"></p>
                      </section>
                      
                      
                      
                      
                      
                      <center>
                      <div class="pagination">
                            <a href="#">&laquo;</a>
                            <a href="#" class="active">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#">4</a>
                            <a href="#">&raquo;</a>
                    </div>
                      </center>
                      
                  </div>
                  
                  
                  
                         <nav class="col-lg-4" id="scrollspy">
                                 <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="100" id="stackul">
                                     
                                    
                                     <li class="active" id="data1"> <a href="#section1" onclick="                document.getElementById('myBar1').style.width='0%';"> <div class="container-fluid">                    
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;">
                                    
                                </div></div></div>
                                <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar1"></span>
                                    </span>
                                    </div></div>
                                         
                      </a></li>
                                     
                                     
                                      <li id="data2">            <a href="#section2" onclick="document.getElementById('myBar2').style.width='0%';">            <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;"></div>
                          </div>
                                          </div>
                                          <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar2"></span>
                                    </span>
                                    </div></div>
                                          
                                          </a></li>
                                     
                                     
                                      <li id="data3">    <a href="#section3" onclick="document.getElementById('myBar3').style.width='0%'">                   <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;"></div>
                          </div>
                                          </div>
                                          <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar3"></span>
                                    </span>
                                    </div></div>
                                          
                                          
                                         </a> </li>
                                    
                                     <li id="data4">   <a href="#section4" onclick="document.getElementById('myBar4').style.width='0%'">                    <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;"></div>
                          </div>
                                         </div>
                                         <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar4"></span>
                                    </span>
                                    </div></div>
                                         
                                         
                                         </a></li>
                                     <li id="data5">   <a href="#section5" onclick="document.getElementById('myBar5').style.width='0%'">                    <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;"></div>
                          </div>
                                         </div>
                                         <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar5"></span>
                                    </span>
                                    </div></div>
                                         
                                         
                                         </a></li>
                                     <li id="data6">   <a href="#section6" onclick="document.getElementById('myBar6').style.width='0%'">                    <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 80;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">Trending</h6>
                                    <span class="subtext" style="font-size:15px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=80 style="  object-fit: cover;"></div>
                          </div>
                                         </div>
                                         <div class="row" style="height:8px;"><div class="container-fluid"  style="height:8px;">
                                      <span class="progress-container">
                                        <span class="progress-bar" id="myBar6"></span>
                                    </span>
                                    </div></div>
                                         
                                         
                                         </a></li>
                             </ul>
    </nav></div>
                      
                     <!-- <center><h2 style="font-family:Roboto Condensed; font-size: 27px; font-weight: 700">Column</h2></center>
                      <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                                                  <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                                                  <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="download.png" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                      
                      </div>
                  -->
                  </div>
</div>
             </div></div></div><br>
<?php include 'footer.php';?>




        <script>
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                });
            });

        </script>

        <script>
            $(".nav a").on("click", function() {
                $(".nav").find(".active").removeClass("active");
                $(this).parent().addClass("active");
            });

        </script>
        <script>
            document.current = 1;
            var current = document.current;

            function toggleSearch() {
                if (current == 1) {
                    document.getElementById("navb").style.transition = "all 1s";
                    document.getElementById("navb").style.marginLeft = "-1200px";
                    document.getElementById("searchBox").style.visibility = "visible";
                    document.getElementById("testing").style.display="inline";
                    document.getElementById("searchBox").style.display = "inline";                    
                    document.getElementById("glysearch").className = "glyphicon glyphicon-remove";
                    current = 0;
                } else {
                    document.getElementById("navb").style.transition = "all 1s";
                    document.getElementById("navb").style.marginLeft = "0px";
                    document.getElementById("searchBox").style.display = "none";
                    document.getElementById("glysearch").className = "glyphicon glyphicon-search";
                    current = 1;
                }
            }

            function caret(a)
            {
                a.getElementsByTagName("i")[0].className="fa fa-caret-up";
            }
            function caretOff(r)
            {
                r.getElementsByTagName("i")[0].className="fa fa-caret-down";
            }

        </script>
        <script>
            $(document).ready(function() {
                $('.navbar-default .navbar-nav > li.dropdown').hover(function() {
                    $('ul.dropdown-menu', this).stop(true, true).slideDown('fast');
                    $(this).addClass('open');
                }, function() {
                    $('ul.dropdown-menu', this).stop(true, true).slideUp('fast');
                    $(this).removeClass('open');
                });
            });

        </script>
    <script>
document.getElementById("heading"+1).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+1).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+1).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);?>";
                document.getElementById("date"+1).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
                document.getElementById("newsContent"+1).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";
        
                document.getElementById("heading"+2).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+2).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);
                    ?>";
                document.getElementById("date"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
                document.getElementById("newsContent"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-1);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";
                        document.getElementById("heading"+3).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+3).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);
                    ?>";
                document.getElementById("date"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
                document.getElementById("newsContent"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-2);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";
                        document.getElementById("heading"+4).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+4).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);
                    ?>";
                document.getElementById("date"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
            document.getElementById("newsContent"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-3);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";
                 document.getElementById("heading"+5).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+5).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+5).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);
                    ?>";
                document.getElementById("date"+5).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
        document.getElementById("newsContent"+5).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";
                        document.getElementById("heading"+6).innerHTML="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Title` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Title"]);?>";
               document.getElementById("image"+6).src="<?php
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Image` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);   
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Image"]);?>";
                document.getElementById("high"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Highlights` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Highlights"]);
                    ?>";
                document.getElementById("date"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $query="SELECT `Date` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Date"]);            
                    ?>";
                document.getElementById("newsContent"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-5);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo addslashes($row["Content"]);            
                    ?>";

        
    </script>
<script>
window.onscroll = function() {myFunction(),testScroll()};
    
function testScroll()
{

                if($(window).width()>1400)
                {
                    if(window.pageYOffset>6700)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0";                    }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1";
                    }
                }
                else if($(window).width()>1300)
                {
                    if(window.pageYOffset>7000)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0";                     }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1";                    }
                }
                else if($(window).width()>1200)
                {
                    if(window.pageYOffset>7200)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0"; 
                    }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1";                     }
                }
                else if($(window).width()>1000)
                {
                    if(window.pageYOffset>6300)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0"; 
                    }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1"; 
                    }
                }
                else if($(window).width()>900)
                {
                    if(window.pageYOffset>7400)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0"; 
                    }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1"; 
                    }
                }
                else if($(window).width()>800)
                {
                    if(window.pageYOffset>7800)
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="0";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="0"; 
                    }
                    else
                    {
                        document.getElementById("sidebar").style.transition = "all 0.8s";
                        document.getElementById("sidebar").style.opacity="1";
                        document.getElementById("scrollspy").style.transition = "all 0.8s";
                        document.getElementById("scrollspy").style.opacity="1"; 
                    }
                }
/*                if(document.getElementById("sidebar").style.opacity=="0")
                {
                    document.getElementById("sidebar").style.visibility="hidden";
                }
                else
                {
                    document.getElementById("sidebar").style.visibility="visible";
                }
            }
*/
    if(document.getElementById("scrollspy").style.opacity=="0")
        {
            document.getElementById("scrollspy").style.visibility="hidden";
            document.getElementById("sidebar").style.visibility="hidden";
        }
    else
        {
            document.getElementById("scrollspy").style.visibility="visible";
            document.getElementById("sidebar").style.visibility="visible";
        }
}

function myFunction() {
  var elemTop=$("#section1").offset().top;
  var height = $("#section1").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar1").style.width = scrolled + "%";
    
  var elemTop=$("#section2").offset().top;
  var height = $("#section2").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar2").style.width = scrolled + "%";
    
  var elemTop=$("#section3").offset().top;
  var height = $("#section3").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar3").style.width = scrolled + "%";
    
  var elemTop=$("#section4").offset().top;
  var height = $("#section4").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar4").style.width = scrolled + "%";
    
  var elemTop=$("#section5").offset().top;
  var height = $("#section5").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar5").style.width = scrolled + "%";
    
  var elemTop=$("#section6").offset().top;
  var height = $("#section6").height();
  var scTop=$(window).scrollTop();
  var scrolled = ((scTop-elemTop) / height) * 100;
  document.getElementById("myBar6").style.width = scrolled + "%";
    
   var i;
    for(i=1;i<=6;i++)
    {
        if(document.getElementById("data"+i).className!="active")
            {
                document.getElementById("myBar"+i).style.visibility="hidden";
            }
        else
            {
                document.getElementById("myBar"+i).style.visibility="visible";
            }
    }
}       
</script>
<script>
$(document).on('scroll',function(e)
{
    $('section').each(function()
    {
        if ( $(this).offset().top < window.pageYOffset + 10 
        &&   $(this).offset().top + 
             $(this).height() > window.pageYOffset + 10
           ) 
        {
          var data = $(this).data('id');
          location.replace("Trending1#"+document.getElementById("heading"+data).innerHTML.replace(/ /g,"_"));
        }
    });
});    
    
</script>
<script>
function searchStart()
{
    document.getElementById("searchBox").style.visibility="hidden";
    document.getElementById("testing").style.display="none";
}
</script>
    


</body>


</html>
