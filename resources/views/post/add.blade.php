@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">post</div>
                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">judul</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">isi</label>
                            <input type="text" class="form-control" name="isi">
                        </div>
                        <input type="hidden" name="penulis" value="{{ Auth::user()->name }}">
                        <input type="hidden" name="visible" value="1">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
