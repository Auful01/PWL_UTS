@extends('barang.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mt-2">
            <h2>JKELONTONG PAK MRX</h2>
        </div>
        <div class="float-right my-2">
            <a class="btn btn-success" href="{{ route('barangs.index') }}"> Kembali</a>
        </div>
        {{-- <div class="float-left my-1">
            <input type="text">
            <button class="btn btn-primary" type="submit">Search</button>
        </div> --}}
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

    @foreach ($barang as $brg)
    <tr>
        <td>{{ $brg->id_barang }}</td>
        <td>{{ $brg->kode_barang }}</td>
        <td>{{ $brg->nama_barang}}</td>
        <td>{{ $brg->kategori_barang}}</td>
        <td>{{ $brg->harga }}</td>
        <td>{{ $brg->qty }}</td>
        <td>
            <form action="{{ route('barangs.destroy',$brg->id_barang) }}" method="POST">
                <a class="btn btn-info" href="{{ route('barangs.show',$brg->id_barang) }}">Show</a>
                <a class="btn btn-primary" href="{{ route('barangs.edit',$brg->id_barang) }}">Edit</a>
                @csrf
            @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
    </table>


    <div class="d-flex">
        {{$barang->links()}}
    </div>
@endsection
