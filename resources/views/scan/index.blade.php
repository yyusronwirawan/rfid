@extends('layout.main')
@section('title', 'Presensi')
@section('judul_halaman', 'Presensi')
@section('isi')
<script type="text/javascript">
  $(document).ready(function(){
      setInterval(function(){
        $("#isi").load('/reader')
      },2000);
  });
</script>

<div class="card text-center">
	<div id="isi"></div>
</div>
@endsection