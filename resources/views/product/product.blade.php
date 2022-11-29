@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">product</div>
                <div class="card-body">
                    <a href="{{ route('product.create') }}" class="btn btn-primary">Add product</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Product</th>
                                <th scope="col">foto</th>
                                <th scope="col">harga</th>
                                <th scope="col">desc prodict</th>
                                <th scope="col">Kategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($product as $item)                               
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_product }}</td>
                                <td>
                                    <img src="{{ asset('storage/'.$item->foto) }}" width="60px" alt="">
                                </td>
                                <td>{{ $item->harga }}</td>
                                <td>{{ $item->desc_product }}</td>
                                <td>{{ $item->kategori->nama_kategori }}</td>
                                <td>
                                    <a href="{{ route('product.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('productdel/'.$item->id) }}" class="btn btn-success">delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
