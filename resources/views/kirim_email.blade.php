<!DOCTYPE html>
<html>
<head>
	<title>Laravel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	<div class="row">
		<div class="container">
			<div class="col-lg-6 mx-auto my-5">
				<div class="card">
					<div class="card-header text-center">
						<b>Form Email</b>
					</div>
					<div class="card-body">
					<form action="/email/kirim" method="POST">
						@csrf
						<div class="form-group">
							<label>Tujuan :</label>
							<input type="text" class="form-control" name="tujuan" required>
						</div>
						<div class="form-group">
							<label>Pesan :</label>
							<textarea class="form-control" name="pesan" required></textarea>
						</div>
						<input type="submit" value="Kirim" class="btn btn-primary">
					</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>