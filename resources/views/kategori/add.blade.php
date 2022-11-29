@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">kategori</div>
                <div class="card-body">
                    <form action="{{ route('kategori.store') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">name_kategori</label>
                            <input type="text" class="form-control" name="nama_kategori">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">deskripsi kategori</label>
                            <input type="text" class="form-control" name="desc_kategori">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
