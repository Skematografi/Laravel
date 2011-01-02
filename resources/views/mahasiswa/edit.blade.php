@extends('mahasiswa/app')

@section('content')
	<div class="col-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Edit Mahasiswa</h3>
			</div>
			<div class="card-body">
				<form action="/mahasiswa/update/{{ $mahasiswa->id }}" method="POST">
			 		@csrf
			 		@method('PUT')
			 	
			 		<div class="form-group">
			 			<label for="nim">NIM :</label>
						<input type="text" class="form-control" name="nim" value="{{ $mahasiswa->nim }}" readonly>
						@if($errors->has('nim'))
                            <div class="text-danger">
                                {{ $errors->first('nim')}}
                            </div>
                        @endif
					</div>

					<div class="form-group">
			 			<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama" value="{{ $mahasiswa->nama }}">
						@if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan :</label>
						<input type="text" class="form-control" name="jurusan" value="{{ $mahasiswa->jurusan }}">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat :</label>
						<input type="text" class="form-control" name="alamat" value="{{ $mahasiswa->alamat }}">
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
 	</div>
@endsection