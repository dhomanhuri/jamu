@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">post</div>
                <div class="card-body">
                    <form action="{{ route('post.update',$post->id) }}" method="POST">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">judul</label>
                            <input type="text" class="form-control" value="{{ $post->judul }}" name="judul">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">isi</label>
                            <input type="text" class="form-control" name="isi" value="{{ $post->isi }}">
                        </div>
                        @if (Auth::user()->role=='admin')
                        <div class="mb-3">
                            <label class="form-label">visible</label>
                            <select class="form-select" name='visible' aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value='1'>Visible</option>
                                <option value='2'>Unvisible</option>
                            </select>
                        </div>
                        @endif
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
