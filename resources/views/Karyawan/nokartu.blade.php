@if(!empty($cek))
@foreach($data as $item)
<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Kartu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" readonly  name="kartu" autocomplete="off" placeholder="Tempelkan Kartu pada perangkat" value="{{$item->uid}}">
                      </div>
</div>
@endforeach
	
@else
	<div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">No Kartu</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control" readonly  name="kartu" autocomplete="off" placeholder="Tempelkan Kartu pada perangkat" value="">
                      </div>
</div>
@endif