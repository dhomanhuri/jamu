@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">kategori</div>
                <div class="card-body">
                    <a href="{{ route('kategori.create') }}" class="btn btn-primary">Add Kategori</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Nama Kaategori</th>
                                <th scope="col">Desc Kaategori</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kategori as $item)                               
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->nama_kategori }}</td>
                                <td>{{ $item->desc_kategori }}</td>
                                <td>
                                    <a href="{{ route('kategori.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('kategoridel/'.$item->id) }}" class="btn btn-success">delete</a>
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
