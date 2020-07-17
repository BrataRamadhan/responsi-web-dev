@extends('layouts.app2')
@section('content')
<div>
<form action="{{route('update-data',[$data->id])}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
      <label for="exampleInputEmail1">Masukan Data</label>
    <input type="text" class="form-control" class="fomr-control" name="nama_kategori" value="{{$data->nama_kategori}}" >
    </div>
    <button type="submit" class="btn btn-primary">Update Data</button>
  </form>
</div>
@endsection
