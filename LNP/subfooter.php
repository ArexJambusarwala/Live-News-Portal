<div class="container-fluid" id="signin">
        <img src="cross.png" height="23px" width="23px" style="float:right;margin-top:12px;" onclick="toggleSub()">
    <b><i><center><h3>Subscribe for our newsletter</h3></center></i></b>
    <center>
    <div class="form-inline" method="post">
    <div class="form-group">
        <input type="email" name="E-mail" placeholder="Enter your E-mail" style="font-size:12.95px; border: 0.8px solid black; height:34px; border-radius:4px;width:200px;padding-left:8px;">
        </div>
                <div class="form-group">
                    <button class="btn btn-md btn-basic" type="submit">Subscribe me</button>
        </div>    
    </div>
        <br><br>
        <h5>Read our privacy policy here</h5>
    
    </center>
        
</div>

        <script>
            document.x=1;
            function toggleSub()
            {
                document.getElementById("signin").style.display="none";
                document.x=0;
                document.getElementById("footer").style.marginBottom="0px";
            }
        
        
        </script>