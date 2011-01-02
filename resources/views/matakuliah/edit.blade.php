@extends('matakuliah/app')

@section('content')
	<div class="col-6 m-auto">
		<div class="card">
			<div class="card-header">
				<h3 class="text-center">Edit Mata Kuliah</h3>
			</div>
			<div class="card-body">
				<form action="/matakuliah" method="POST">
			 		@csrf
			 		@method('PUT')
			 		<div class="form-group">
			 			<label for="kode_mk">Kode Mata Kuliah :</label>
						<input type="number" class="form-control" name="kode_mk" value="{{ $mahasiswa->kode_mk }}">
						@if($errors->has('kode_mk'))
                            <div class="text-danger">
                                {{ $errors->first('kode_mk')}}
                            </div>
                        @endif
					</div>

					<div class="form-group">
			 			<label for="nama">Nama Mata Kuliah :</label>
						<input type="text" class="form-control" name="nama_mk" value="{{ $matakuliah->nama_mk }}">
						@if($errors->has('nama_mk'))
                            <div class="text-danger">
                                {{ $errors->first('nama_mk')}}
                            </div>
                        @endif
					</div>
					<button type="submit" class="btn btn-primary">Update</button>
				</form>
			</div>
		</div>
 	</div>
@endsection