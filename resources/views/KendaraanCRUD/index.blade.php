@extends('dashboard.dashboard')

@section('content')
   
<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Aset Kendaraan CRUD</h2>
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('kendaraan.create') }}">Tambah Data Kendaraan</a>
    </div>
</div>

    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nama Kendaraan</th>
            <th class="text-center">Status Kendaraan</th>
            <th class="text-center">Action</th>
        </tr>

        @if(count($aset_kendaraan))
        @foreach($aset_kendaraan as $mobil)

        <tr>
            <td class="text-center">{{ $mobil->id }}</td>
            <td>{{ $mobil->nama_mobil }}</td>
            <td>{{ $mobil->status_ketersediaan_mobil }}</td>
            <td class="text-center">
                <form action="{{ route('kendaraan.destroy', $mobil->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('kendaraan.show',$mobil->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('kendaraan.edit',$mobil->id) }}">Edit</a>
                    
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus Data Ini?'">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        @else
        <tr>
            <td align="center" clospan="3">Empty Data!! Have a Nice Day & #0411</td>
        </tr>
    @endif    
    </table>
@endsection