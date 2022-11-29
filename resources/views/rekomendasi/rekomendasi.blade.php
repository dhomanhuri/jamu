@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 text-center">
            <div class="card">
                <div class="card-header">rekomendasi</div>
                <div class="card-body">
                    <form action="{{ url('rekomendasiresult') }}" method="get">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">keluhan</label>
                            <input type="text" class="form-control" name="keluhan">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">tahun</label>
                            <input type="text" class="form-control" name="tahun">
                        </div>
                        {{-- <input type="hidden" name="nama" value="{{ Auth::user()->name }}"> --}}
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
