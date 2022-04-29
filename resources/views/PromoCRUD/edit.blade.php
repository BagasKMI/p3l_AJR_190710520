@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Edit Data Promo</h2>
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
        <form action="{{ route('promo.update', $promo->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row g-0">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="col-md col-sm">
                            <label class="mb-2">Kode Promo</label>
                            <input type="text" class="form-control mb-3" value="{{ $promo->kode_promo }}" name="kode_promo">
                        </div>
    
                        <div class="col-md col-sm">
                            <label class="mb-2">Jenis Promo</label>
                            <input type="text" class="form-control mb-3" value="{{ $promo->jenis_promo }}" name="jenis_promo">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Diskon</label>
                            <input type="text" class="form-control mb-3" value="{{ $promo->diskon }}" name="diskon">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Keterangan</label>
                            <input type="text" class="form-control mb-3" value="{{ $promo->keterangan }}" name="keterangan">
                        </div> 

                        <div class="col-md col-sm">
                            <label class="mb-2">Status Promo</label>
                            <input type="text" class="form-control mb-3" value="{{ $promo->status_promo }}" name="status_promo">
                        </div>                                     
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-outline-primary mx-2" type="submit">Ubah</button>
                    <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
                    <button class="btn btn-outline-danger mx-2" href="{{ route('promo.index') }}">Back</button>
                </div>
            </div>
        </form>
        
    </div>
</div>
@endsection
