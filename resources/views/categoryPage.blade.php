<!DOCTYPE html>
<html>
<head>
	<title>Ctegory Passing</title>
</head>
<body>
	<h1>Passing Data Dari Controler</h1>
	@foreach ($category as $i)
	<ul>
		<li>{{$i}}</li>
	</ul>
	@endforeach
</body>
</html>