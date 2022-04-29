@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Tambah Data Customer</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('customer.index') }}">Back</a>
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
    <h1 class="fs-3">Tambah Data Customer</h2>

        <form action="{{ route('customer.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Lengkap</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="nama_lengkap" required>
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Alamat</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="alamat_customer">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="colFormLabel" name="tgl_lahir_customer">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="jenis_kelamin_customer">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="colFormLabel" name="email_customer">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor Telepon</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="no_telp_customer">
                </div>
            </div>     
            
            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="password_customer">
                </div>
            </div>  

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-primary mx-2" type="submit">Tambah</button>
                <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
            </div>
            
        </form>
</div>
@endsection
