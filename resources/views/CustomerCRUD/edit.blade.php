@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Edit Data Customer</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('customer.index') }}"> Back</a>
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
        @endforeach
    </ul>
</div>
@endif
<div class="container-fluid">
    
    <div class="card mb-3">
        <form action="{{ route('customer.update', $customer->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row g-0">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="col-md col-sm">
                            <label class="mb-2">Nama Lengkap</label>
                            <input type="text" class="form-control mb-3" value="{{ $customer->nama_lengkap }}" name="nama_lengkap">
                        </div>
    
                        <div class="col-md col-sm">
                            <label class="mb-2">Tanggal Lahir</label>
                            <input type="date" class="form-control mb-3" value="{{ $customer->tgl_lahir_customer }}" name="tgl_lahir_customer">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Jenis Kelamin</label>
                            <input type="text" class="form-control mb-3" value="{{ $customer->jenis_kelamin_customer }}" name="jenis_kelamin_customer">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Nomor Telepon</label>
                            <input type="text" class="form-control mb-3" value="{{ $customer->no_telp_customer }}" name="no_telp_customer">
                        </div> 

                        <div class="col-md col-sm">
                            <label class="mb-2">Email</label>
                            <input type="email" class="form-control mb-3" value="{{ $customer->email_customer }}" name="email_customer">
                        </div>
    
                        <label class="mb-2">Alamat</label>
                        <input type="text" class="form-control mb-3" value="{{ $customer->alamat_customer }}" name="alamat_customer">

                        <label class="mb-2">Password</label>
                        <input type="password" class="form-control mb-3" value="{{ $customer->password_customer }}" name="password_customer">

                          
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mx-2" type="submit">Ubah</button>
                    <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection
