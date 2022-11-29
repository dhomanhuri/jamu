@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">product</div>
                <div class="card-body">
                    <form action="{{ route('product.update',$product->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="mb-3">
                            <label class="form-label">nama_product</label>
                            <input type="text" class="form-control" value="{{ $product->nama_product }}" name="nama_product">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">harga</label>
                            <input type="text" class="form-control" name="harga" value="{{ $product->harga }}" >
                        </div>
                        <div class="mb-3">
                            <label class="form-label">desc_product</label>
                            <input type="text" class="form-control" name="desc_product"  value="{{ $product->desc_product }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="mn-3">
                            <label class="form-label">kategori</label>
                            <select class="form-select" name='kategori_id' aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                @foreach ($kategori as $item)
                                <option value='{{ $item->id }}'>{{ $item->nama_kategori }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
