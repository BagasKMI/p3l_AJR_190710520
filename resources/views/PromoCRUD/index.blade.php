@extends('dashboard.dashboard')

@section('content')
   
<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Promo CRUD</h2>
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('promo.create') }}">Tambah Data Promo</a>
    </div>
</div>

    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Kode Promo</th>
            <th class="text-center">Diskon</th>
            <th class="text-center">Action</th>
        </tr>

        @if(count($promo))
        @foreach($promo as $pro)

        <tr>
            <td class="text-center">{{ $pro->id }}</td>
            <td class="text-center">{{ $pro->kode_promo }}</td>
            <th class="text-center">{{ $pro->diskon}}</th>

            <td class="text-center">
                <form action="{{ route('promo.destroy', $pro->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('promo.show',$pro->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('promo.edit',$pro->id) }}">Edit</a>
                    
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