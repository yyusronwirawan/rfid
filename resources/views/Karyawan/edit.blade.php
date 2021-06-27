@extends('layout.main')
@section('title', 'Edit Data')
@section('judul_halaman', 'Edit Data Karyawan')

@section('isi')
  @foreach($data as $item)
		 <form action="/editkaryawan" method="POST">
            @csrf
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body">
                    <input type="hidden" name="id" value="{{$item->id}}">
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Kartu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" readonly disabled name="kartu" autocomplete="off" value="{{$item->no_kartu}}">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control"  name="nama" autocomplete="off" placeholder="Nama Karyawan" value="{{$item->nama}}">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control"  name="email" autocomplete="off" placeholder="example@gmail.com " value="{{$item->email}}">
                      </div>
                    </div>

                      <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                        <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control"  name="jabatan" autocomplete="off" placeholder="Jabatan" value="{{$item->jabatan}}">
                    </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-warning">Edit</button>
                        <a href="{{url('/karyawan')}}" class="btn btn-danger">Cancel</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </form>
        @endforeach
@endsection
