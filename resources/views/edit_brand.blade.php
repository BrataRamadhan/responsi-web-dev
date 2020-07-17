@extends('layouts.app2')
@section('content')

    <form action="{{route('update',[$data->id])}}" method="POST">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="PUT">
        <div class="form-group">
          <label for="exampleInputEmail1">Masukan Data</label>
        <input type="text" class="form-control" class="fomr-control" name="name_brand" value="{{$data->name_brand}}" >
        </div>
        <button type="submit" class="btn btn-primary">Update Data</button>
      </form>


@endsection



