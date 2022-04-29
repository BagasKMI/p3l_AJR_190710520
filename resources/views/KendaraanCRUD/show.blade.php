@extends('dashboard.dashboard')

@section('content')

<div class="d-flex justify-content-between mt-10 mb-10">
    <div class="text-center">
        <h2>Show Data Kendaraan</h2>
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
                            Id Kendaraan
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->id}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Nama Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->nama_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Tipe Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->tipe_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-id-badge"></i>
                            Jenis Transmisi
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->jenis_transmisi}}</p>
                        <hr>

                        <strong>
                            <i class="bi bi-arrow-up-left-circle-fill"></i>
                            Jenis Bahan Bakar
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->jenis_bahan_bakar}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Volume Bahan Bakar
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->volume_bahan_bakar}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Warna Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->warna_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Kapasitas Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->kapasitas_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Fasilitas Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->fasilitas_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Plat Nomor
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->plat_nomor}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Nomor STNK
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->no_stnk}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Kategori Aset
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->kategori_aset}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Tanggal Service Terakhir
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->tgl_service_terakhir}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Status Ketersediaan Mobil
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->status_ketersediaan_mobil}}</p>
                        <hr>

                        <strong>
                            <i class="fa-solid fa-genderless"></i>
                            Biaya Sewa
                        </strong>
                        <p class="text-muted">{{ $aset_kendaraan->biaya_sewa}}</p>
                        <hr>

                </div>
                        <div class="text-center">
                            <a class="btn btn-secondary" href="{{ route('driver.index') }}">Back</a>
                        </div>

            </div>

        </div>

    </div>

</div>
       
@endsection