@extends('layout.main')
@section('title', 'Data ABsensi')
@section('judul_halaman', 'Data Absensi')

@section('isi')
<div class="card">
	<div class="table-responsive">
		<table id="example1" class="table table-striped table-md">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Rfid</th>
					<th>Nama Karyawan</th>
					<th>Tanggal</th>
					<th>Jam Masuk</th>
					<th>Jam Pulang</th>
				</tr>
			</thead>
			<tbody>
				@foreach($absensi as $item)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$item->uid}}</td>
					<td>{{$item->Karyawan['nama']}}</td>
					<td>{{$item->tanggal}}</td>
					<td>{{$item->jam_masuk}}</td>
					<td>{{$item->jam_pulang}}</td>
				</tr>
				@endforeach
			</tbody>


		</table>
	</div>
</div>
@endsection