@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Tambah Data Promo</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('promo.index') }}">Back</a>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger" >
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $errors)
                <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="container-fluid">
    <h1 class="fs-3">Tambah Data Promo</h2>

        <form action="{{ route('promo.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Kode Promo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="kode_promo" required>
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Promo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="jenis_promo">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Diskon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="diskon">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Keterangan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="keterangan">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Status Promo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="status_promo">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-primary mx-2" type="submit">Tambah</button>
                <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
            </div>
            
        </form>
</div>
@endsection
