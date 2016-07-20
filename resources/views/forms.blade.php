<!doctype html>
<html>
<head>
	<meta charset="utf-8"> 
	<title>forms</title>
</head>
<body>
	<form action="/insert" method="post">
		用户名:<input type="text" name="username" value="{{old('username')}}"><br>
		密码:<input type="password" name="pass" value="{{old('pass')}}"><br>
		邮箱:<input type="text" name="email"  value="{{old('email')}}"><br>
		{{csrf_field()}}
		<input type="submit"  value="提交">
	</form>
</body>
</html>