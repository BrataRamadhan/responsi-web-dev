@extends('layouts.app2')
@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Halaman Produk</h1>
<a href="tambahkategori" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Tambah Kategori</a>
  </div>
<table class="table">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Kategori</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        @foreach($data as $ktg)
      <tr>
        <th scope="row">{{ $no++ }}</th>
        <td>{{$ktg->nama_kategori}}</td>
      <td> <a href='{{route('edit_kategori',[$ktg->id])}}' class="btn btn-sm btn-primary">Edit</a> </td>
        <td>
        <form action ="{{route('delete',[$ktg->id])}}" method="POST">
                {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE">
                <button type="submit" onclick="return confirm('Yakin ingin menghapus data?')" class="btn btn-sm btn-danger" >hapus</button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
