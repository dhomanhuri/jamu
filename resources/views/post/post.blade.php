@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">post</div>
                <div class="card-body">
                    <a href="{{ route('post.create') }}" class="btn btn-primary">Add post</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Isi</th>
                                <th scope="col">Tanggal Dibuat</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($post as $item)                               
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->isi }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="{{ route('post.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('postdel/'.$item->id) }}" class="btn btn-success">delete</a>
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
