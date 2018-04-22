<!DOCTYPE html>
<html>
<head>
	<title>WELCOME (Learning)</title>
</head>
<body>
	<ul>
		@foreach ($tasks as $task)
		<li>{{ $task }}</li>
		@endforeach
	</ul>
</body>
</html>