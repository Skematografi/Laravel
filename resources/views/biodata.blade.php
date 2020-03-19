<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
</head>
<body>
 
	<h1>Tutorial Laravel</h1>
	<p>Nama Saya : {{ $name }}</p>

	<ul>
		@foreach($suka as $L)

		<li>{{ $L }}</li>

		@endforeach
	</ul>
 
</body>
</html>