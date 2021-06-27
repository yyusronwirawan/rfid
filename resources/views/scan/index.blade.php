@extends('layout.main')
@section('title', 'Scan RFID')
@section('judul_halaman', 'RFID')
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