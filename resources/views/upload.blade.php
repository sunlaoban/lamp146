<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>upload</title>
</head>
<body>
	<form action="/uploadss" method="post" enctype="multipart/form-data">
		<input type="file" name="photo"> 
		{{csrf_field()}}
		<input type="submit" value="上传">
	</form>
</body>
</html>