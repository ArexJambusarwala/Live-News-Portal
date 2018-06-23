 <nav class="navbar navbar-default" id="navaffix" data-spy="affix" data-offset-top="100">
        <div class="container-fluid" id="navb">
            <div class="navbar-header" style="padding-right:10px;" id="navHead">
                <div class="menu-icon">
                    <a href="javascript:void(0)" id="menu-button">
                        <!-- <span class="menu-text hidden-xs">Menu</span> --><i class="icon"></i>
                    </a>
                </div>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navToggle" style="padding-right: 10px; float: right;">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="sidebarCollapse" onclick="toggleSide()" title="Menu"><!--<img src="menu-alt-256.png" height=30 width=30>-->
                <?php include 'burger.php';?></a>
            </div>
            <div class="collapse navbar-collapse" id="navToggle">
                <ul class="nav navbar-nav" id="navul">
                    <li class="dropdown active" onmouseover="caret(this)" onmouseout="caretOff(this)"><a class="dropdown-toggle"  data-toggle="dropdown" href="#" ><b style="font-size: 20px;">Trending</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Fashion</a></li>
                            <li><a href="#">Sci-tech</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="index">All Trending News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" onmouseover="caret(this)" onmouseout="caretOff(this)" ><a class="dropdown-toggle" data-toggle="dropdown" href="India.html" ><b style="font-size: 20px;">India</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Criminal</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Civil</a></li>
                            <li><a href="India">All Indian News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" onmouseover="caret(this)" onmouseout="caretOff(this)"><a class="dropdown-toggle" data-toggle="dropdown" href="World.html" ><b style="font-size: 20px;">World</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Criminal</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Civil</a></li>
                            <li><a href="World">All World News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown" onmouseover="caret(this)" onmouseout="caretOff(this)"><a class="dropdown-toggle" data-toggle="dropdown" href="World.html" ><b style="font-size: 20px;">Sports</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Sports">All Sports News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"  onmouseover="caret(this)" onmouseout="caretOff(this)">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="Tech.html" ><b style="font-size: 20px;">Tech</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Tech">All Tech News</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"  onmouseover="caret(this)" onmouseout="caretOff(this)">
                <a class="dropdown-toggle" data-toggle="dropdown" href="Business.html" ><b style="font-size: 20px;">Business</b>&nbsp;<i class="fa fa-caret-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Cricket</a></li>
                            <li><a href="#">Football</a></li>
                            <li style="border-bottom: 2px solid black"><a href="#">Tennis</a></li>
                            <li><a href="Business">All Business News</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <a  style="font-size: 30px; top: 1%; padding-left:15px" onclick="toggleSearch()"><i class="glyphicon glyphicon-search" id="glysearch"></i></a>
                </ul>
                <form class="navbar-form navbar-right" style="max-width:300px !important;" id="testing">
                    <div class="form-group" >
                        <script>
  (function() {
    var cx = '001135896050108742372:rtujuu1x3ik';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script><span id="searchBox">
                        <gcse:search></gcse:search></span>
                    </div>
                </form>
            </div>
        </div>
    </nav>
