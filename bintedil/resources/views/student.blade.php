<!DOCTYPE html>
<html>
<head>
<title>DATA
</title>
</head>
<body>
	<h1>This is the page where you will find the data of database</h1>
	@foreach($q as $tb)
	<li>{{ $tb->name }}</li>
	@endforeach
</body>


</html>