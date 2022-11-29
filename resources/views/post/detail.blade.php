@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-13">
            <div class="card">
                <div class="card-header">Post</div>
                <div class="card-body text">
                    <h2>{{ $post->judul }}</h2>
                    <label>Penulis {{ $post->penulis }}</label>
                    <p>{{ $post->isi }}</p>
                    <label>Tanggal Penulisan {{ $post->created_at }}</label>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
