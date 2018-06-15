<!DOCTYPE html>
<html lang="en">

<head>
    <title>NEWS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="style.css">



</head>


<body data-spy="scroll" data-target="#scrollspy" data-offset="0">


    <div id="particles-js">
        <div id="exa">

            <h1 style="font-family: 'roboto'">Live News Portal</h1>

        </div>

    </div>

    <script src="particles.js"></script>

    <script>
        particlesJS.load('particles-js', 'particles.json');

    </script>

    <nav class="navbar navbar-default" id="navaffix" data-spy="affix" data-offset-top="100">
        <div class="container-fluid" id="navb">
            <div class="navbar-header" style="padding-right:330px;">
                <div class="menu-icon">
                    <a href="javascript:void(0)" id="menu-button">
                        <!-- <span class="menu-text hidden-xs">Menu</span> --><i class="icon"></i>
                    </a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navToggle" style="padding-right: 40px;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="sidebarCollapse" onclick="toggleSide()" title="Menu"><img src="menu-alt-256.png" height=30 width=30></a>
            </div>
            <div class="collapse navbar-collapse" id="navToggle">
                <ul class="nav navbar-nav" id="navul">
                    <li class="dropdown active" style="margin-left:10px;margin-right: 10px;"onmouseover="caret(this)" onmouseout="caretOff(this)"><a class="dropdown-toggle"  data-toggle="dropdown" href="#" ><b style="font-size: 20px;">Trending</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sci-tech</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="index.php">All Trending News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="margin-left:10px;margin-right: 10px;" onmouseover="caret(this)" onmouseout="caretOff(this)" ><a class="dropdown-toggle" data-toggle="dropdown" href="India.html" ><b style="font-size: 20px;">India</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Criminal</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Civil</a></li>
                            <li><a href="India.php">All Indian News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="margin-left:10px;margin-right: 10px;" onmouseover="caret(this)" onmouseout="caretOff(this)"><a class="dropdown-toggle" data-toggle="dropdown" href="World.html" ><b style="font-size: 20px;">World</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Criminal</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Civil</a></li>
                            <li><a href="World.php">All World News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="margin-left:10px;margin-right: 10px;"onmouseover="caret(this)" onmouseout="caretOff(this)">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="Sports.html"  ><b style="font-size: 20px;">Sports</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Sports.php">All Sports News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="margin-left:10px;margin-right: 10px;"  onmouseover="caret(this)" onmouseout="caretOff(this)">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="Tech.html" ><b style="font-size: 20px;">Tech</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Tech.php">All Tech News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" style="margin-left:10px;margin-right: 10px;"  onmouseover="caret(this)" onmouseout="caretOff(this)">
                <a class="dropdown-toggle" data-toggle="dropdown" href="Business.html" ><b style="font-size: 20px;">Business</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Business.php">All Business News</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a  style="font-size: 30px; top: 1%;" onclick="toggleSearch()"><i class="glyphicon glyphicon-search" id="glysearch"></i></a>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search" name="search" id="searchBox" style="visibility: hidden">
                    </div>
                </form>
            </div>
        </div>
    </nav>


    <div class="container-fluid">
         <div class="row">
            <div class="col col-lg-2" style="padding-left: 0;">
        <nav id="sidebar" style="background-color: whitesmoke" data-spy="affix" data-offset-top="100">

            <ul class="list-unstyled components" id="sideul">
                <li><a href="India.php" title="India">India<img src="India-512.png" style="float: right;"   heigth="15" ; width="15.4"></a></li>
                <li><a href="Politics.php" title="Politics">Politics<img src="Politician-512.png"   heigth="15" ; width="15.4" style="float: right;"></a></li>
                <li><a href="World.php" title="World">World<i class="glyphicon glyphicon-globe" style="float: right;"></i></a></li>
                <li><a href="Business.php" title="Business">Business<i class="glyphicon glyphicon-usd" style="float: right;"></i></a></li>
                <li><a href="Tech.php" title="Tech">Tech<i class="glyphicon glyphicon-phone" style="float: right;"></i></a></li>
                <li><a href="Entertainment.php" title="Entertainment">Entertainment<i class="glyphicon glyphicon-headphones" style="float: right;"></i></a></li>
                <li><a href="Sports.php" title="Sports">Sports<img src="sports_equipment-07-512.png" style="float: right; heigth="15" ; width="15.4""></a></li>
                <li><a href="Videos.html" title="Videos">Videos<i class="glyphicon glyphicon-expand" style="float: right;"></i></a></li>
                <li><a href="Ideas.html" title="Ideas">Ideas<img src="Idea_Electricity_Bulb_Innovation_Innovative_Lightbulb1-512.png" style="float: right;"  heigth="15" ; width="15.4"></a></li>
                <li><a href="About_us.html" title="About us">About us<i class="glyphicon glyphicon-comment" style="float: right;"></i></a></li>
                <li><a href="Help.html" title="Help">Help<i class="glyphicon glyphicon-question-sign" style="float: right;"></i></a></li>
            </ul>
            <center>
                STAY CONNECTED
            </center>
            <div id="social-media" style="padding: 15px; padding-left: 50px;">
                <span class="icon icon-facebook-circle-stroke social-stroke-icon color-accent margin-4-right">
                      <a href="#" class="display-block " target="_blank">
                    <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd" fill="none" stroke="null"><path d="M32.95 18c0 8.258-6.693 14.95-14.95 14.95S3.05 26.26 3.05 18 9.742 3.05 18 3.05 32.95 9.74 32.95 18" stroke-width="2" stroke="#B7B4B4"></path><path d="M19.718 13.698c.433-.014.866-.004 1.3-.004h.18V11.57c-.232-.023-.473-.054-.716-.065-.445-.02-.89-.04-1.336-.03-.68.013-1.323.17-1.884.55-.644.435-.998 1.05-1.132 1.773-.057.3-.07.607-.08.912-.01.477-.002.953 0 1.43v.18h-2.16v2.373h2.147v5.966h2.622V18.7h2.134l.33-2.385h-.482c-.608.002-2.004 0-2.004 0s.006-1.177.02-1.687c.02-.7.46-.912 1.057-.932" fill="#e60909"></path></g></svg>    </a>
                  </span>
                <span class="icon icon-instagram-circle-stroke social-stroke-icon color-accent margin-4-right">
                      <a href="#" class="display-block " target="_blank">
                    <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd" fill="none" stroke="null"><path d="M32.95 18c0 8.257-6.693 14.95-14.95 14.95S3.05 26.258 3.05 18 9.742 3.05 18 3.05 32.95 9.742 32.95 18" stroke-width="2" stroke="#B7B4B4"></path><path d="M22.624 22c0 .344-.28.624-.623.624h-8.47c-.342 0-.62-.28-.62-.623v-5.13h1.218c-.07.29-.104.59-.104.9 0 2.07 1.677 3.75 3.75 3.75 2.07 0 3.75-1.68 3.75-3.75 0-.306-.038-.604-.108-.89h1.22V22zm-7.137-5.13c.356-.907 1.24-1.552 2.274-1.552 1.04 0 1.92.645 2.28 1.553.11.28.17.58.17.9 0 1.347-1.1 2.444-2.44 2.444-1.345 0-2.442-1.097-2.442-2.443 0-.314.06-.615.17-.89zm4.916-3.576c0-.19.154-.344.344-.344h1.49c.19 0 .344.154.344.344v1.49c0 .19-.15.344-.34.344h-1.49c-.19 0-.34-.154-.34-.344v-1.49zM22 11.592h-8.478c-1.065 0-1.93.865-1.93 1.93v8.48c0 1.064.865 1.93 1.93 1.93h8.48c1.065 0 1.93-.866 1.93-1.93v-8.48c0-1.065-.865-1.93-1.93-1.93z" fill="#e60909"></path></g></svg>    </a>
                  </span>
                <span class="icon icon-twitter-circle-stroke social-stroke-icon color-accent margin-4-right">
                      <a href="#" class="display-block " target="_blank">
                    <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd" fill="none" stroke="null"><path d="M32.977 18c0 8.272-6.705 14.976-14.977 14.976S3.023 26.272 3.023 18C3.023 9.728 9.728 3.024 18 3.024S32.977 9.728 32.977 18" stroke-width="2" stroke="#B7B4B4"></path><path d="M15.783 21.476c-1.48-.052-2.404-1.114-2.65-1.976.413.078.82.063 1.222-.037.01-.002.02-.01.04-.018-.8-.187-1.42-.616-1.848-1.307-.286-.46-.422-.962-.418-1.514.4.214.81.333 1.26.345-.607-.44-1.01-1.01-1.177-1.73-.164-.73-.057-1.42.306-2.07 1.54 1.813 3.492 2.81 5.872 2.973-.02-.113-.037-.21-.048-.31-.08-.67.054-1.295.416-1.86.454-.71 1.1-1.15 1.93-1.29.96-.156 1.796.117 2.495.795.046.045.085.06.15.045.586-.125 1.14-.335 1.657-.635l.04-.02h.02c-.225.664-.635 1.174-1.22 1.55.553-.06 1.08-.206 1.586-.426l.01.013c-.11.143-.215.29-.327.427-.302.373-.65.7-1.035.984-.034.025-.05.05-.05.09.016.424 0 .846-.053 1.266-.11.885-.352 1.73-.73 2.534-.39.833-.9 1.585-1.54 2.246-1.083 1.12-2.39 1.844-3.912 2.18-.52.115-1.05.173-1.585.19-1.64.046-3.16-.36-4.554-1.224l-.066-.043c.996.107 1.94-.02 2.85-.393.484-.197.93-.457 1.354-.79" fill="#e60909"></path></g></svg>    </a>
                  </span>
                <span class="icon icon-pinterest-circle-stroke social-stroke-icon color-accent margin-4-right">
                      <a href="#" class="display-block " target="_blank">
                    <svg width="36" height="36" xmlns="http://www.w3.org/2000/svg"><g fill-rule="evenodd" fill="none" stroke="null"><path d="M32.976 18c0 8.272-6.705 14.976-14.976 14.976-8.27 0-14.976-6.704-14.976-14.976C3.024 9.728 9.73 3.024 18 3.024S32.976 9.728 32.976 18" stroke-width="2" stroke="#B7B4B4"></path><path d="M17.162 20.54c-.012.038-.022.072-.03.105-.505 1.976-.562 2.415-1.08 3.332-.247.437-.525.85-.834 1.246-.034.044-.067.102-.137.088-.07-.01-.08-.08-.08-.14-.08-.6-.13-1.2-.11-1.81.03-.79.13-1.06 1.15-5.34.02-.06 0-.12-.02-.18-.24-.65-.29-1.32-.08-2 .46-1.46 2.12-1.57 2.41-.36.18.75-.292 1.72-.654 3.16-.3 1.19 1.1 2.04 2.298 1.17 1.106-.8 1.534-2.72 1.45-4.08-.16-2.71-3.13-3.29-5.02-2.42-2.16 1-2.65 3.68-1.675 4.91.126.157.22.25.18.41-.06.244-.117.49-.186.735-.05.184-.2.25-.384.175-.36-.148-.66-.377-.9-.678-.83-1.026-1.07-3.057.03-4.776 1.212-1.906 3.47-2.676 5.534-2.443 2.468.28 4.02 1.964 4.316 3.873.13.87.035 3.012-1.186 4.53-1.404 1.74-3.68 1.854-4.73.785-.08-.08-.146-.18-.225-.272" fill="#e60909"></path></g></svg>    </a>
                  </span>
            </div>
        </nav>
             </div>



        <div class="col col-lg-10">
        <div id="content" class="container-fluid">
              <div class="row">
                  <div class="col-lg-8">
                      <section data-id="1" id="section1"  style="padding-top:55px">
                          <h2 id="heading1"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date1"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image1"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high1" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent1"></p>
                      </section>
                      
                      <section data-id="2" id="section2" style="padding-top:120px">
                      <h2 id="heading2"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date2"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image2"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high2" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent2"></p>
                      </section>
                      <section data-id="3" id="section3" style="padding-top:120px">
                      <h2 id="heading3"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date3"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image3"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high3" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent3"></p>
                      </section>
                      <section data-id="4" id="section4" style="padding-top:120px">
                      <h2 id="heading4"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date4"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image4"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high4" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent4"></p>
                      </section>
                      <section data-id="5" id="section5" style="padding-top:120px">
                      <h2 id="heading5"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date5"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image5"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high5" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent5"></p>
                      </section>
                      <section data-id="6" id="section6" style="padding-top:120px">
                      <h2 id="heading6"></h2>
                  <div class="uploadDate" style="border-bottom: 1px solid black;"><strong style="color: lightgrey;" id="date6"></strong></div><br><br>
                      <div class="container-fluid">
                          <div class="row">
                              <div class="col col-lg-6">
                                  <img src="" width="382" height="300" style="object-fit: cover;" id="image6"></div>
                              <div class="col col-lg-6" style="background-color: #f5f5f5; max-height: 300px"><center><h4 style="border-bottom: 2px solid gray; padding-bottom: 2px;">Highlights</h4></center><span id="high6" style="font-size:17px;"></span>
                              </div>
                          </div>
                      </div>
                      <br><br>
                      <p style="font-size: 150%; font-family: 'Droid Sans', Helvetica, Arial, sans-serif;" id="newsContent6"></p>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;">
                                    
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;"></div>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;"></div>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;"></div>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;"></div>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=80 style="  object-fit: cover;"></div>
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
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                            <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                                                  <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                                                                  <div class="container-fluid">
                            <div class="row">
                                <div class="col col-lg-9" style="max-height: 100;"><h6 style="color:#e60909; font-weight: 700; margin-bottom: 6px;">INDIA</h6>
                                    <span class="subtext" style="font-size:18px; letter-spacing:2px;">Ut enim ad minim veniam, quis nostruds Lorem ipsum...</span>
                                    </div>
                                <div class="col col-lg-3"><img src="Robert_Downey_Jr_2014_Comic_Con_(cropped).jpg" height=100 style="  object-fit: cover;"></div>
                          </div>
                      </div>
                      
                      <hr>
                      
                      </div>
                  -->
                  </div>
</div>
             </div></div></div><br>
<footer class="container-fluid" id="footer">
    <div class="container" style="margin-bottom: 30; border-bottom:1px solid rgba(255,255,255,.5)">
       <div class="row text-center d-flex justify-content-center pt-5 mb-3">
           <div class="col-lg-3"> <a href="#"><h3 style="color:azure; font-weight:bolder;    font-family: GillSansMTStd-Medium;">ABOUT US</h6></a></div>
           <div class="col-lg-2"><a href="#"><h3 style="color:azure; font-weight:bolder;    font-family: GillSansMTStd-Medium;">PROJECTS</h6></a></div>
           <div class="col-lg-2"><a href="#"><h3 style="color:azure; font-weight:bolder;    font-family: GillSansMTStd-Medium;">HELP</h6></a></div>
           <div class="col-lg-2"><a href="#"> <h3 style="color:azure; font-weight:bolder;    font-family: GillSansMTStd-Medium;">CONTACT US</h6></a></div>
           <div class="col-lg-3"><a href="#"> <h3 style="color:azure; font-weight:bolder;    font-family: GillSansMTStd-Medium;">USEFUL LINKS</h6></a></div>
        </div>
    </div>
    <div class="container" id="footerContent">
        <center> <p style="color:azure;">"A brief para about the news Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco labori"A brief para about the news Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.""A brief para about the news Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."s nisi ut aliquip ex ea commodo consequat.""A brief para about the news Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.""A brief para about the news Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."</p></center>
    </div><br>
<div class="container">
<!-- Facebook -->
         <center> <a href="#" class="fb-ic" title="Like us on Facebook!">
            <i class="fa fa-facebook fa-lg" style="color: deepskyblue;"> </i>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;
          <!-- Twitter -->
          <a a href="#" class="tw-ic" title="Follow us on Twitter!">
            <i class="fa fa-twitter fa-lg" style="color: skyblue;"> </i>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;
          <!-- Google +-->
          <a a href="#" class="gplus-ic" title="Join us on Google+!">
            <i class="fa fa-google-plus fa-lg" style="color:crimson;"> </i>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;
          <!--Linkedin -->
          <a a href="#" class="li-ic" title="Connect with us on LinkedIn!">
            <i class="fa fa-linkedin fa-lg" style="color: ghostwhite;"> </i>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;
          <!--Instagram-->
          <a a href="#" class="ins-ic" title="Like us on Instagram!">
            <i class="fa fa-instagram fa-lg" style="color: coral;"> </i>
          </a>&nbsp;&nbsp;&nbsp;&nbsp;
          <!--Pinterest-->
          <a a href="#" class="pin-ic" title="Like us on Pinterest!">
            <i class="fa fa-pinterest fa-lg" style="color: darkred;"> </i>
             </a></center>
    </div>
</footer>



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
                    document.getElementById("glysearch").className = "glyphicon glyphicon-remove";
                    current = 0;
                } else {
                    document.getElementById("navb").style.transition = "all 1s";
                    document.getElementById("navb").style.marginLeft = "0px";
                    document.getElementById("searchBox").style.visibility = "hidden";
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];?>";
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
                    echo $row["Date"];            
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
                    echo $row["Content"];            
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];
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
                    echo $row["Date"];            
                    ?>";
                document.getElementById("newsContent"+2).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Content"];            
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];
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
                    echo $row["Date"];            
                    ?>";
                document.getElementById("newsContent"+3).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Content"];            
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];
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
                    echo $row["Date"];            
                    ?>";
            document.getElementById("newsContent"+4).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".$rowc["COUNT(*)"];
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Content"];            
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];
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
                    echo $row["Date"];            
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
                    echo $row["Content"];            
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
                    echo $row["Title"];?>";
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
                    echo $row["Image"];?>";
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
                    echo $row["Highlights"];
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
                    echo $row["Date"];            
                    ?>";
                document.getElementById("newsContent"+6).innerHTML="<?php 
                    $db = mysqli_connect('localhost', 'livenews_portal', 'creatives@2k18', 'livenews_news');
                    $queryc="SELECT COUNT(*) FROM trending";
                    $queryc=mysqli_real_escape_string($db,$queryc);
                    $resultc=mysqli_query($db,$queryc);   
                    $rowc=mysqli_fetch_assoc($resultc);
                    $query="SELECT `Content` FROM `trending` WHERE `ID`=".($rowc["COUNT(*)"]-4);
                    $query=mysqli_real_escape_string($db,$query);
                    $result=mysqli_query($db,$query);
                    $row=mysqli_fetch_assoc($result);
                    echo $row["Content"];            
                    ?>";

        
    </script>
<script>
window.onscroll = function() {myFunction(),testScroll()};
    
function testScroll()
{
    if(window.pageYOffset>6545)
        {
            document.getElementById("scrollspy").style.transition = "all 0.8s";
            document.getElementById("scrollspy").style.opacity="0";
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="0";
        }
    else
        {
            document.getElementById("scrollspy").style.transition = "all 0.8s";
            document.getElementById("scrollspy").style.opacity="1";
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="1";
        }
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
          window.location.hash = data;
        }
    });
});    
    
</script>
        
    


</body>


</html>
