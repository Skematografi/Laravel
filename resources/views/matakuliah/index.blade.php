@extends('matakuliah/app')

@section('content')
	<div card>
		<div class="card-header">
			<a href="/matakuliah/tambah" class="btn btn-primary" role="button">Tambah</a>
			<div style="float: right;">
			<form class="form-inline" action="/mahasiswa/cari" method="GET">
		 		<div class="form-group">
				  <input type="text" class="form-control" name="cari" value="{{ old('cari') }}">
				</div>
				<button type="submit" class="btn btn-info">Cari</button>
		 	</form>
			</div>
		</div>
		<div class="card-body">
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
		 				<a href="/matakuliah/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
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