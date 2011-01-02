@extends('mahasiswa/app')

@section('content')
	<div card>
		<div class="card-header">
			<a href="/mahasiswa/tambah" class="btn btn-primary" role="button">Tambah</a>
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
					<th>NIM</th>
					<th>NAMA</th>
					<th>JURUSAN</th>
					<th>ALAMAT</th>
					<th>Created_at</th>
					<th>Updated_at</th>
					<th>OPSI</th>
		 		</tr>
				</thead>
		 		<tbody>
		 		@if($mahasiswa->count()>0)
		 		@foreach($mahasiswa as $row)
		 		<tr>
		 			<td>{{ $row->id }}</td>
		 			<td>{{ $row->nim }}</td>
		 			<td>{{ $row->nama }}</td>
		 			<td>{{ $row->jurusan }}</td>
		 			<td>{{ $row->alamat }}</td>
		 			<td>{{ $row->created_at }}</td>
		 			<td>{{ $row->updated_at }}</td>
		 			<td>
		 				<a href="/mahasiswa/edit/{{ $row->id }}" class="btn btn-warning btn-sm">Edit</a>
		 				<a href="/mahasiswa/hapus/{{ $row->id }}" class="btn btn-danger btn-sm">Hapus</a>
		 			</td>
		 		</tr>
		 		@endforeach
		 		@else
		 			<p>Data Tidak Ada</p>
		 		@endif
		 		</tbody>
		 	</table>
		</div>
		<div class="card-footer">
			{{ $mahasiswa->links() }}
		</div>			
	</div>
@endsection