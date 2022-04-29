@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Edit Data Kendaraan</h2>
    </div>
    <div>
        <a class="btn btn-secondary" href="{{ route('kendaraan.index') }}">Back</a>
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
        <form action="{{ route('kendaraan.update', $aset_kendaraan->id) }}" method="POST" enctype="multipart/form-data">
            <div class="row g-0">
                @csrf
                @method('PUT')
                <div class="col-md-8">
                    <div class="card-body">
                        <div class="col-md col-sm">
                            <label class="mb-2">Nama Mobil</label>
                            <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->nama_mobil }}" name="nama_mobil">
                        </div>
    
                        <div class="col-md col-sm">
                            <label class="mb-2">Tipe Mobil</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->tipe_mobil }}" name="tipe_mobil">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Jenis Transmisi</label>
                            <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->jenis_transmisi }}" name="jenis_transmisi">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Jenis Bahan Bakar</label>
                            <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->jenis_bahan_bakar }}" name="jenis_bahan_bakar">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Volume Bahan Bakar</label>
                            <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->volume_bahan_bakar }}" name="volume_bahan_bakar">
                        </div> 

                        <div class="col-md col-sm">
                            <label class="mb-2">Warna Mobil</label>
                            <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->warna_mobil }}" name="warna_mobil">
                        </div>
                        
                        <div class="col-md col-sm">
                            <label class="mb-2">Kapasitas Mobil</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->kapasitas_mobil }}" name="kapasitas_mobil">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Fasilitas Mobil</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->fasilitas_mobil }}" name="fasilitas_mobil">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Plat Nomor</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->plat_nomor }}" name="plat_nomor">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Nomor STNK</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->no_stnk}}" name="nomor_stnk">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Kategori Aset</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->kategori_aset }}" name="kategori_aset">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Terakhir Service</label>
                        <input type="date" class="form-control mb-3" value="{{ $aset_kendaraan->tgl_service_terakhir }}" name="tgl_service_terakhir">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Status Ketersediaan Mobil</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->status_ketersediaan_mobil }}" name="status_ketersediaan_mobil">
                        </div>

                        <div class="col-md col-sm">
                            <label class="mb-2">Biaya Sewa</label>
                        <input type="text" class="form-control mb-3" value="{{ $aset_kendaraan->biaya_sewa }}" name="biaya_sewa">
                        </div>
 
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
