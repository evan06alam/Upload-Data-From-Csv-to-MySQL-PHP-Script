<html>
<head>
<title>Upload Data base from CSV file</title>
<link href="bootstrap.css" rel='stylesheet' type='text/css'>
</head>

<body><center>
<div class="form-group">
<form action="upload_file.php" method="post"
enctype="multipart/form-data">
<label for="exampleInputFile"><br/><br/><br/><h2>Browse your csv file to upload data.</h2></label><br/><br/>
<input type="file" name="file" id="exampleInputFile"><br/>
<p class="help-block">Only csv type file allowed.</p>
<input type="submit" name="submit" value="Submit" class="btn btn-primary">
</form>
</div>
</center>
</body>
</html>