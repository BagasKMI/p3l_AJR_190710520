@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-10 mb-10">
    <div class="text-center">
        <h2>Show Data Customer</h2>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="d-flex justify-content-center">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile"> 
                    <hr>
                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Id Customer
                        </strong>
                        <p class="text-muted">{{ $customer->id}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Nama Customer
                        </strong>
                        <p class="text-muted">{{ $customer->nama_lengkap}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Tanggal Lahir
                        </strong>
                        <p class="text-muted">{{ $customer->tgl_lahir_customer}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Jenis Kelamin
                        </strong>
                        <p class="text-muted">{{ $customer->jenis_kelamin_customer}}</p>
                        <hr>

                        <strong>
                            <i class="bi bi-arrow-up-left-circle-fill"></i>
                            Alamat Customer
                        </strong>
                        <p class="text-muted">{{ $customer->alamat_customer}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Nomor Telepon
                        </strong>
                        <p class="text-muted">{{ $customer->no_telp_customer}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Email
                        </strong>
                        <p class="text-muted">{{ $customer->email_customer}}</p>
                        <hr>

                </div>
                        <div class="text-center">
                            <a class="btn btn-secondary" href="{{ route('customer.index') }}">Back</a>
                        </div>

            </div>

        </div>

    </div>

</div>
       
@endsection