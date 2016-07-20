<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>form</title>
</head>
<body>
	<form action="/user/add" method="post">
		<input type="text">
		<!-- TokenMismatchException in VerifyCsrfToken.php line 53: -->
		<!-- 没有匹配到防止跨站请求伪造攻击  的存在用户session里面的token字符串-->
		{{csrf_field()}}
		<input type="submit" value="提交">
	</form>
</body>
</html>