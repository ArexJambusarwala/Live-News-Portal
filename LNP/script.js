window.onscroll = function() {testScroll()};
function testScroll()
{
    if($(window).width()<768 && document.x==1)
    {
        document.getElementById("footer").style.marginBottom="239.6px";
    }
    else if(document.x==1)
    {
        document.getElementById("footer").style.marginBottom="165.6px";
    }
    if($(window).width()>1436 && document.x==1)
    {
        if(window.pageYOffset>1007.8)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    else if($(window).width()>1210 && document.x==1)
    {
        if(window.pageYOffset>1377.8)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    else if($(window).width()>991 && document.x==1)
    {
        if(window.pageYOffset>1577.8)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    else if($(window).width()>780 && document.x==1)
    {
        if(window.pageYOffset>3977.8)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    else if($(window).width()>500 && document.x==1)
    {
        if(window.pageYOffset>4177.8)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    else if(document.x==1)
    {
        if(window.pageYOffset>5177.8 && document.x==1)
            {
                document.getElementById("signin").style.display="block";
            }
        else
            {
                document.getElementById("signin").style.display="none";
            }
    }
    if(window.pageYOffset>100)
        {
            document.getElementById("pageHeading").style.marginTop = "75px";
        }
    else
        {
            document.getElementById("pageHeading").style.marginTop = "10px";
        }
    if($(window).width()>1436)
    {
        if(window.pageYOffset>600)
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="0";
        }
        else
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="1";
        }
    }
    else if($(window).width()>1210)
    {
        if(window.pageYOffset>1125)
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="0";
        }
        else
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="1";
        }
    }
    else if($(window).width()>972.4)
    {
        if(window.pageYOffset>1125)
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="0";
        }
        else
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="1";
        }
    }
    else
    {
        if(window.pageYOffset>3400)
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="0";
        }
        else
        {
            document.getElementById("sidebar").style.transition = "all 0.8s";
            document.getElementById("sidebar").style.opacity="1";
        }
    }
    if(document.getElementById("sidebar").style.opacity=="0")
    {
        document.getElementById("sidebar").style.visibility="hidden";
    }
    else
    {
        document.getElementById("sidebar").style.visibility="visible";
    }
}

function searchStart()
{
    document.getElementById("searchBox").style.visibility="hidden";
    document.getElementById("testing").style.display="none";
}
            
$(document).ready(function() {
    $('.navbar-default .navbar-nav > li.dropdown').hover(function() {
        $('ul.dropdown-menu', this).stop(true, true).slideDown('fast');
        $(this).addClass('open');
    }, function() {
        $('ul.dropdown-menu', this).stop(true, true).slideUp('fast');
        $(this).removeClass('open');
    });
});

document.current = 1;
var current = document.current;

function toggleSearch() {
    if (current == 1) {
        document.getElementById("navb").style.transition = "all 1s";
        document.getElementById("navb").style.marginLeft = "-1100px";
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
$(".nav a").on("click", function() {
    $(".nav").find(".active").removeClass("active");
    $(this).parent().addClass("active");
});
$(document).ready(function() {
    $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
    });
});