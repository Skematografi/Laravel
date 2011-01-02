@extends('mahasiswa/app')

@section('content')
	<div class="col-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Tambah Mahasiswa</h3>
			</div>
			<div class="card-body">
				<form action="/mahasiswa/proses" method="POST">
			 		{{ csrf_field() }}
			 		<div class="form-group">
			 			<label for="nim">NIM :</label>
						<input type="text" class="form-control" name="nim">
						@if($errors->has('nim'))
                            <div class="text-danger">
                                {{ $errors->first('nim')}}
                            </div>
                        @endif
					</div>

					<div class="form-group">
			 			<label for="nama">Nama :</label>
						<input type="text" class="form-control" name="nama">
						@if($errors->has('nama'))
                            <div class="text-danger">
                                {{ $errors->first('nama')}}
                            </div>
                        @endif
					</div>
					<div class="form-group">
						<label for="jurusan">Jurusan :</label>
						<input type="text" class="form-control" name="jurusan">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat :</label>
						<input type="text" class="form-control" name="alamat">
					</div>
					<button type="submit" class="btn btn-primary">Simpan</button>
				</form>
			</div>
		</div>
 	</div>
@endsection