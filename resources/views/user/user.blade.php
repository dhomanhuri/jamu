@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">user</div>
                <div class="card-body">
                    <a href="{{ route('user.create') }}" class="btn btn-primary">Add user</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">name</th>
                                <th scope="col">email</th>
                                <th scope="col">Password</th>
                                <th scope="col">role</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $item)                               
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>****</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <a href="{{ route('user.edit',$item->id) }}" class="btn btn-success">Edit</a>
                                    <a href="{{ url('userdel/'.$item->id) }}" class="btn btn-success">delete</a>
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
