<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;

class PromoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $promo = Promo::all();

        return view ('PromoCRUD.index', ['promo' => $promo]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('PromoCRUD.create');
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
        $promo = Promo::create([
            'kode_promo' => $request->kode_promo,
            'jenis_promo' => $request->jenis_promo,
            'diskon' => $request->diskon,
            'keterangan' => $request->keterangan,
            'status_promo' => $request->status_promo
        ]);

        $promo->save();
        return redirect()->route('promo.index');
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
        $promo = Promo::where('id', $id)->first();

        return view('PromoCRUD.show', ['promo' => $promo]);
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
        $promo = Promo::find($id);

        return view('PromoCRUD.edit', ['promo' => $promo]);
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
        $promo = Promo::find($id);
        $promo->kode_promo = $request->kode_promo;
        $promo->jenis_promo = $request->jenis_promo;
        $promo->diskon = $request->diskon;
        $promo->keterangan = $request->keterangan;
        $promo->status_promo = $request->status_promo;

        $promo->save();
        return redirect()->route('promo.index');
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
        $promo = Promo::find($id);

        $promo->delete();

        return redirect()->route('promo.index');
    }
}
