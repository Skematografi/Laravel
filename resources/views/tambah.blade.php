@extends('app')

@section('content')
	<div class="col-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Tambah Pegawai</h3>
			</div>
			<div class="card-body">
				@if (count($errors)>0)
				<div class="alert alert-danger">
					<ul>
						@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
				@endif
				<form action="/pegawai/store" method="POST">
			 		{{ csrf_field() }}
			 		<div class="form-group">
			 			<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<div class="form-group">
						<label for="nama">Jabatan :</label>
						<input type="text" class="form-control" name="jabatan">
					</div>
					<div class="form-group">
						<label for="nama">Umur :</label>
						<input type="umur" class="form-control" name="umur">
					</div>
					<div class="form-group">
						<label for="nama">Alamat :</label>
						<input type="text" class="form-control" name="alamat">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
 	</div>
@endsection