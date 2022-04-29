<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $customer = Customer::all();

        return view ('CustomerCRUD.index', ['customer' => $customer]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('CustomerCRUD.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $customer = Customer::create([
            'nama_lengkap' => $request->nama_lengkap,
            'tgl_lahir_customer' => $request->tgl_lahir_customer,
            'jenis_kelamin_customer' => $request->jenis_kelamin_customer,
            'email_customer' => $request->email_customer,
            'password_customer' => $request->password_customer,
            'no_telp_customer' => $request->no_telp_customer,
            'alamat_customer' => $request->alamat_customer
        ]);

        $customer->save();
        return redirect()->route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $customer = Customer::where('id', $id)->first();

        return view('CustomerCRUD.show', ['customer' => $customer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $customer = Customer::find($id);

        return view('CustomerCRUD.edit', ['customer' => $customer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $customer = Customer::find($id);
            $customer->nama_lengkap = $request->nama_lengkap;
            $customer->tgl_lahir_customer = $request->tgl_lahir_customer;
            $customer->jenis_kelamin_customer = $request->jenis_kelamin_customer;
            $customer->email_customer = $request->email_customer;
            $customer->password_customer = $request->password_customer;
            $customer->no_telp_customer = $request->no_telp_customer;
            $customer->alamat_customer = $request->alamat_customer;

            $customer->save();
            return redirect()->route('customer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $customer = Customer::find($id);
        
        $customer->delete();

        return redirect()->route('customer.index');
    }
}
