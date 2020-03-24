<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-lg-6 mx-auto my-5 text-center">	
				<form action="/session/buat" method="POST">
					@csrf
					<div class="form-group">
						<input type="text" class="form-control text-center" name="session">
					</div>
					<input type="submit" value="Create Session" class="btn btn-primary">
				</form>
				<div class="form-group">
					<input type="text" class="form-control text-center mt-5" value="{{ $session }}" readonly>
				</div>
				<a href="/session/hapus" class="btn btn-danger">Delete Session</a>
			</div>
		</div>
	</div>
</body>
</html>