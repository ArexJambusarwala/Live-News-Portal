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


<body>
    <div class="container" style="margin-top:70px; padding-left:250px; padding-right:300px;">
    <div class="header" style="margin-top:10px;">
  	<h1 style="border-bottom: solid 4px black; padding-bottom:15px; padding-left:20px;">Add news</h1>
  </div>
    <form action="server.php" method="post" class="form-horizontal">
        <div class="form-group">
        <label for="category">Select Category : </label>
        <select class="form-control" id="category" name="category">
            <option value="Select" disabled selected="selected">Select</option>
            <option value="Trending">Trending</option>
            <option value="India">India</option>
            <option value="World">World</option>
            <option value="Business">Business</option>
            <option value="Tech">Tech</option>
            <option value="Politics">Politics</option>
            <option value="Sports">Sports</option>
            <option value="Entertainment">Entertainment</option>
        </select>
        </div>
        <br><br>
        <div class="form-group">
            <label for="title">Add title : </label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <br><br>
        <div class="form-group">
            <label for="date" class="control-label">Add date : </label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <br><br>
        <div class="form-group">
            <label for="brief">Add display text : </label>
            <textarea class="form-control" id="brief" rows="5" name="brief"></textarea>
        </div>
        <br><br>
        <div class="form-group">
            <input id="upload" type="file" onchange="readURL(this);" accept="image/*"/>
            <img id="blah" src="#" alt="" style="object-fit: cover"/>
        </div>
        <br><br>
        <div class="form-group">
            <label for="highlights">Add highlights : </label>
            <textarea class="form-control" id="highlights" rows="5" name="highlights"></textarea>
        </div>
        <br><br>
        <div class="form-group">
            <label for="content">Add content : </label>
            <textarea class="form-control" id="content" rows="10" name="content"></textarea>
        </div>
        <br><br>
        <div class="form-group">
            <input type="submit" name="sub" value="submit">
        </div>
    </form>
    </div>
    
    
    <script>
    
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(262.5)
                    .height(280);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
    
    </script>
    
</body>
    
</html>