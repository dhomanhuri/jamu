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
                            <input type="text" class="form-control" name="umur" value="{{ $data['keluhan'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">nama jamu</label>
                            <input type="text" class="form-control" name="namajam" value="{{ $data['nama'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Khasiat</label>
                            <input type="text" class="form-control" name="umur" value="Meredakan {{ $data['keluhan'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">umur</label>
                            <input type="text" class="form-control" name="umur" value="{{ $data['umur'] }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">saran</label>
                            <input type="text" class="form-control" name="saran" value="{{ $data['saran'] }}" disabled>
                        </div>
                        {{-- <input type="hidden" name="nama" value="{{ Auth::user()->name }}"> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
