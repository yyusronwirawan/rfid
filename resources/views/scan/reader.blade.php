@if($hasil == 1)
<center>
	<h3>Silahkan Tempelkan Kartu Anda Pada RFID Reader</h3>
	<h4>Mode Absensi : <span style="font-weight: bold;">{{$text_mode}}</span></h4>
	<img src="{{url('/assets_admin/img/scan/rfid.gif')}}" width="400" class="d-block">
	<img src="{{url('/assets_admin/img/scan/loading.gif')}}" width="500" style="margin-top: -93px;">
</center>
@elseif($hasil == 0)
<center>
	<h3>Kamu Berhasil Absen Masuk </h3>
	<h3>Selamat Datang Ahmad Rafi Akbar PH</h3>
	<h4>Semoga Harimu Menyenangkan</span>

</center>
@elseif($hasil == 2)
<center>
	<h3>Kamu Berhasil Absen Pulang </h3>
	<h3>Selamat Jalan Ahmad Rafi Akbar PH</h3>
	<h4>Semoga Selamat Sampai Tujuan</span>

</center>
@elseif($hasil == 3)
<center>
	<h3 style="color: red;">MAAF KARTU TIDAK DIKENALI !!!!!</h3>
</center>

@elseif($hasil == 4)
<center>
	<h3 style="color: red;">BELOM WAKTUNYA PULANG !!!!!</h3>
</center>

@endif



