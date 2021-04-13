<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	
<center>
	<h1>CSV to Database</h1>
</center>

	<form method="POST" action="script/upload.php" enctype="multipart/form-data">
		<label for="csv_file">Select CSV File:</label><br><br>
		<input type="file" name="csv" id="csv_file"><br><br>
		<input name="upload_btn" type="submit" value="Upload">
	</form>


</body>
</html>