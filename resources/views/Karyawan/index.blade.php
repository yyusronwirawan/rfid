@extends('layout.main')
@section('title', 'Data Karyawan')
@section('judul_halaman', 'Data Karyawan')

@section('isi')
<div class="row">
	<div class="col-md-9">
		<a href="{{url('/tambah-karyawan')}}" class="btn btn-success adds ml-auto"><i class="fa fa-plus"></i> Tambah Data</a>
	</div>
	<div class="col-md-3">

	</div>
</div>
<div class="card">
	<div class="table-responsive">
		<table id="example1" class="table table-striped table-md">
			<thead>
				<tr>
					<th>No</th>
					<th>Kode Rfid</th>
					<th>Nama Karyawan</th>
					<th>Email</th>
					<th>Jabatan</th>
					<th class="text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($data as $item)
				<tr>
					<td>{{ $loop->iteration }}</td>
					<td>{{$item->no_kartu}}</td>
					<td>{{$item->nama}}</td>
					<td>{{$item->email}}</td>
					<td>{{$item->jabatan}}</td>
					<td class="text-center"><a href="{{url('/edit-karyawan/'.$item->id.'')}}" class="btn btn-warning">Edit</a> 
					<a href="{{url('/hapus-karyawan/'.$item->id.'')}}" class="btn btn-danger confirm">Hapus</a>
						</form>
					</td>
				</tr>
				@endforeach

			</tbody>


		</table>
	</div>
</div>
@endsection