<!DOCTYPE html>
<html>
<head><title>PRODUCTINFO</title>
</head>
<body>
	@foreach($emp as $emp)

		<a href="/employee/{{ $emp->id }}"> <li>{{ $emp->firstname }} </li>
		</a>

	
   @endforeach
</body>
</html>