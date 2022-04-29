@extends('dashboard.dashboard')

@section('content')
   
<div class="d-flex justify-content-between mt-5 mb-5">
    <div>
        <h2>Customer CRUD</h2>
    </div>
    <div>
        <a class="btn btn-success" href="{{ route('customer.create') }}">Tambah Data Customer</a>
    </div>
</div>

    <table class="table table-bordered">
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Nama Customer</th>
            <th class="text-center">Action</th>
        </tr>

        @if(count($customer))
        @foreach($customer as $cust)

        <tr>
            <td class="text-center">{{ $cust->id }}</td>
            <td>{{ $cust->nama_lengkap }}</td>
            <td class="text-center">
                <form action="{{ route('customer.destroy', $cust->id) }}" method="POST">
                    <a class="btn btn-info btn-sm" href="{{ route('customer.show',$cust->id) }}">Show</a>
                    <a class="btn btn-primary btn-sm" href="{{ route('customer.edit',$cust->id) }}">Edit</a>
                    
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