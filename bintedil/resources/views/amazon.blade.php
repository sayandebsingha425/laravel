<!DOCTYPE html>
<html>
<head><title>PRODUCTINFO</title>
</head>
<body>
	@foreach($prod as $tb)
	<li>{{$tb->firstname}}</li>
	<li>{{$tb->lastname}}</li>
	<li>{{$tb->branch}}</li>
	<li>{{$tb->gender}}</li>
	<li>{{$tb->dob}}</li>

   @endforeach
</body>
</html>