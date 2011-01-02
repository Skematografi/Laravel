@extends('app')

@section('content')
	<div class="col-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Edit Pegawai</h3>
			</div>
			<div class="card-body">
				@foreach($pegawai as $row)
 				<form action="/pegawai/update" method="POST">
			 		{{ csrf_field() }}
			 		<div class="form-group">
			 			<label for="nama">ID :</label>
						<input type="hidden" class="form-control" name="id" value="{{ $row->pegawai_id }}" readonly>
					</div>
					<div class="form-group">
			 			<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama" value="{{ $row->pegawai_nama }}">
					</div>
					<div class="form-group">
						<label for="nama">Jabatan :</label>
						<input type="text" class="form-control" name="jabatan" value="{{ $row->pegawai_jabatan }}">
					</div>
					<div class="form-group">
						<label for="nama">Umur :</label>
						<input type="number" class="form-control" name="umur" value="{{ $row->pegawai_umur }}">
					</div>
					<div class="form-group">
						<label for="nama">Alamat :</label>
						<input type="text" class="form-control" name="alamat" value="{{ $row->pegawai_alamat }}">
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
				@endforeach
			</div>
		</div>
 	</div>
@endsection