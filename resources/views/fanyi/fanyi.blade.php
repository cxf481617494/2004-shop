<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<table border=1>
		<tr>
			<td>名称</td>
			<td>拼音</td>
		</tr>
		@foreach($data as $v)
		<tr>
			<td>{{$v->f_name}}</td>
			<td>{{$v->f_pinyin}}</td>
		</tr>
		@endforeach
	</table>
</body>
</html>