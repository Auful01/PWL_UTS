@extends('barang.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>KELONTONG PAK MRX</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barangs.create') }}"> Input Barang</a>
        </div>
        <form method="GET" action="{{url('search')}}">
            <div class="float-left my-1">
                <input type="text" name="nama_barang" >
                <button class="btn btn-primary" type="submit">Search</button>
            </div>
        </form>
    </div>
</div>

@if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
 @endif

 <table class="table table-bordered">
     <tr>
         <th>ID Barang</th>
         <th>Kode Barang</th>
         <th>Nama Barang</th>
         <th>Kategori Barang</th>
         <th>Harga</th>
         <th>Quantity</th>
         <th width="280px">Action</th>
    </tr>

    @foreach ($barangs as $barang)
    <tr>
        <td>{{ $barang->id_barang }}</td>
        <td>{{ $barang->kode_barang }}</td>
        <td>{{ $barang->nama_barang}}</td>
        <td>{{ $barang->kategori_barang}}</td>
        <td>{{ $barang->harga}}</td>
        <td>{{ $barang->qty }}</td>

        <td>
            <form action="{{ route('barangs.destroy',$barang->id_barang) }}" method="POST">
                <a class="btn btn-info" href="{{ route('barangs.show',$barang->id_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id_barang) }}">Edit</a>
                @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>


    <div class="d-flex">
        {{$barangs->links()}}
    </div>
@endsection
