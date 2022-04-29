@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Tambah Data Kendaraan</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('kendaraan.index') }}">Back</a>
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
    <h1 class="fs-3">Tambah Data Kendaraan</h2>

        <form action="{{ route('kendaraan.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nama Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="nama_mobil" required>
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Tipe Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="tipe_mobil">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Transmisi</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="jenis_transmisi">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Jenis Bahan Bakar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="jenis_bahan_bakar">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Volume Bahan Bakar</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="volume_bahan_bakar">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Warna Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="warna_mobil">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Kapasitas Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="kapasitas_mobil">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Fasilitas Mobil</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="fasilitas_mobil">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Plat Nomor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="plat_nomor">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Nomor STNK</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="nomor_stnk">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Kategori Aset</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="kategori_aset">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Service Terakhir</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" id="colFormLabel" name="tgl_service_terakhir">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Status Ketersediaan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="status_ketersediaan_mobil">
                </div>
            </div>

            <div class="form-group row my-3">
                <label for="colFormLabel" class="col-sm-2 col-form-label">Biaya Sewa</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="colFormLabel" name="biaya_sewa">
                </div>
            </div>

            <div class="d-flex justify-content-center">
                <button class="btn btn-outline-primary mx-2" type="submit">Tambah</button>
                <button class="btn btn-outline-danger mx-2" type="reset">Batal</button>
            </div>
            
        </form>
</div>
@endsection
