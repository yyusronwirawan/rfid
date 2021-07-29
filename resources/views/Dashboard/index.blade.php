@extends('layout.main')
@section('title', 'Dashboard')
@section('judul_halaman', 'SELAMAT DATANG DI SISTEM INFORMASI ABSENSI DENGAN RFID READER')

@section('isi')
 <div class="row">
            <div class="col-md-6">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Karyawan</h4>
                  </div>
                  <div class="card-body">
                    {{$karyawan}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card card-statistic-1">
                <div class="card-icon bg-warning">
                  <i class="far fa-calendar"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jumlah Karyawan presensi hari ini</h4>
                  </div>
                  <div class="card-body">
                    {{$presensi}}
                  </div>
                </div>
              </div>
            </div>
 </div>

@endsection