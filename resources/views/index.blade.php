@extends('app')

@section('content')
	<div card>
		<div class="card-header">
			<a href="/pegawai/tambah" class="btn btn-primary" role="button">Tambah</a>
			<div style="float: right;">
			<form class="form-inline" action="/pegawai/cari" method="GET">
		 		<div class="form-group">
				  <input type="text" class="form-control" name="cari" value="{{ old('cari') }}">
				</div>
				<button type="button" class="btn btn-info">Cari</button>
		 	</form>
			</div>
		</div>
		<div class="card-body">
			<table class="table table-striped table-responsive">
				<thead>
				<tr>
					<th>ID</th>
					<th>NAMA</th>
					<th>JABATAN</th>
					<th>UMUR</th>
					<th>ALAMAT</th>
					<th>OPSI</th>
		 		</tr>
				</thead>
		 		<tbody>
		 		@if($pegawai->count()>0)
		 		@foreach($pegawai as $row)
		 		<tr>
		 			<td>{{ $row->pegawai_id }}</td>
		 			<td>{{ $row->pegawai_nama }}</td>
		 			<td>{{ $row->pegawai_jabatan }}</td>
		 			<td>{{ $row->pegawai_umur }}</td>
		 			<td>{{ $row->pegawai_alamat }}</td>
		 			<td>
		 				<a href="/pegawai/edit/{{ $row->pegawai_id }}">Edit</a>
		 				<a href="/pegawai/hapus/{{ $row->pegawai_id }}">Hapus</a>
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
			{{ $pegawai->links() }}
		</div>			
	</div>
 	<!-- Halaman : {{ $pegawai->currentPage() }}<br/>
 	Jumlah Data : {{ $pegawai->total() }}<br/>
 	Data Per Halaman : {{ $pegawai->perPage() }}<br/> -->
@endsection