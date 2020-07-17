@extends('layouts.app2')
@section('content')
<form action="{{route('product.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="exampleInputPassword1">Product</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="name_product">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Kategori</label>
        <select name="kategori_id" class="form-control selectric">
            <option value="">Pilih Kategori</option>
            @foreach($kategori as $result)
            <option class="seletric" value=" {{ $result->id }}">{{ $result->nama_kategori }}</option>
            @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Brand</label>
        <select name="brand_id" class="form-control selectric">
            <option value="">Pilih Brand</option>
            @foreach($brand as $result)
            <option class="seletric" value=" {{ $result->id }}">{{ $result->name_brand }}</option>
            @endforeach
        </select>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection
