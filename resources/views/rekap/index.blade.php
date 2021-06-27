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
					<th>Jam Masuk</th>
					<th>Jam Pulang</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>0017732</td>
					<td>Ahmad Rafi Akbar Putra Hamzah</td>
					<td>26-nov-2020, 07.30:15</td>
					<td>26-nov-2020, 16.30:15</td>
				</tr>

			</tbody>


		</table>
	</div>
</div>
@endsection