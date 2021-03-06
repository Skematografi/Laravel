@extends('matakuliah/app')

@section('content')
	<div card>
		<div class="card-header text-center">
			<a href="/matakuliah">Data Mata Kuliah</a> | Framework Laravel
		</div>
		<div class="card-body">
			<div class="mb-2">
				<a href="/matakuliah/tambah" class="btn btn-primary btn-sm mr-2" role="button">Tambah</a>|
				<a href="/matakuliah/sampah" class="btn btn-primary btn-sm" role="button">Tong Sampah</a>
				<div style="float: right;">
				<form class="form-inline" action="/matakuliah/cari" method="GET">
			 		<div class="form-group">
					  <input type="text" class="form-control form-control-sm mr-2" name="cari" value="{{ old('cari') }}">
					</div>
					<button type="submit" class="btn btn-primary btn-sm">Cari</button>
			 	</form>
				</div>
			</div>
			
			<table class="table table-striped">
				<thead class="col">
				<tr>
					<th>ID</th>
					<th>KODE MK</th>
					<th>NAMA MK</th>
					<th>Created_at</th>
					<th>Updated_at</th>
					<th>OPSI</th>
		 		</tr>
				</thead>
		 		<tbody>
		 		@if($matakuliah->count()>0)
		 		@foreach($matakuliah as $row)
		 		<tr>
		 			<td>{{ $row->id }}</td>
		 			<td>{{ $row->kode_mk }}</td>
		 			<td>{{ $row->nama_mk }}</td>
		 			<td>{{ $row->created_at }}</td>
		 			<td>{{ $row->updated_at }}</td>
		 			<td>
		 				<a href="/matakuliah/edit/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
		 				<a href="/matakuliah/hapus/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
		 			</td>
		 		</tr>
		 		@endforeach
		 		@else
		 			<p>Data Tidak Ada</p>
		 		@endif
		 		</tbody>
		 	</table>
		</div>		
	</div>
@endsection