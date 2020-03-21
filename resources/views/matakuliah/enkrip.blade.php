@extends('matakuliah/app')

@section('content')
	<div card>
		<div class="card-header text-center">
			<a href="/matakuliah">Encrypted & Decrypted</a>
		</div>
		<div class="card-body text-center text-dark">
			<div class="form-group">
				<label for="exampleFormControlTextarea1"><b>Hasil Enkripsi :</b></label>
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="4">
					{{ $enkrip }}
				</textarea>
			</div>
			<div class="form-group">
	 			<label for="kode_mk"><b>Hasil Deskripsi : </b></label>
				<input type="text" class="form-control text-center" name="kode_mk" value="{{ $deskrip }}">
			</div>			
		</div>		
	</div>
@endsection