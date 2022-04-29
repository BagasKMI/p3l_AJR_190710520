@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-10 mb-10">
    <div class="text-center">
        <h2>Show Data Promo</h2>
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
                            ID
                        </strong>
                        <p class="text-muted">{{ $promo->id}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Kode Promo
                        </strong>
                        <p class="text-muted">{{ $promo->kode_promo}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Jenis Promo
                        </strong>
                        <p class="text-muted">{{ $promo->jenis_promo}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Diskon
                        </strong>
                        <p class="text-muted">{{ $promo->diskon}}</p>
                        <hr>

                        <strong>
                            <i class="bi bi-arrow-up-left-circle-fill"></i>
                            Keterangan
                        </strong>
                        <p class="text-muted">{{ $promo->keterangan}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Status Promo
                        </strong>
                        <p class="text-muted">{{ $promo->status_promo}}</p>
                        <hr>


                </div>
                        <div class="text-center">
                            <a class="btn btn-secondary" href="{{ route('promo.index') }}">Back</a>
                        </div>

            </div>

        </div>

    </div>

</div>
       
@endsection