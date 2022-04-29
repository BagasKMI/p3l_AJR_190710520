<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kendaraan;

class KendaraanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kendaraan = Kendaraan::all();

        return view ('KendaraanCRUD.index', ['aset_kendaraan' => $kendaraan]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('KendaraanCRUD.create');
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
        $aset_kendaraan = Kendaraan::create([
        'nama_mobil' => $request->nama_mobil,
        'tipe_mobil' => $request->tipe_mobil,
        'jenis_transmisi' => $request->jenis_transmisi,
        'jenis_bahan_bakar' => $request->jenis_bahan_bakar,
        'volume_bahan_bakar' => $request->volume_bahan_bakar,
        'warna_mobil' => $request->warna_mobil,
        'kapasitas_mobil' => $request->kapasitas_mobil,
        'fasilitas_mobil' => $request->fasilitas_mobil,
        'plat_nomor' => $request->plat_nomor,
        'no_stnk' => $request->no_stnk,
        'kategori_aset' => $request->kategori_aset,
        'tgl_service_terakhir' => $request->tgl_service_terakhir,
        'status_ketersediaan_mobil' => $request->status_ketersediaan_mobil,
        'biaya_sewa' => $request->biaya_sewa
    ]);

    $aset_kendaraan->save();
    return redirect()->route('kendaraan.index');

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
        $aset_kendaraan = Kendaraan::where('id', $id)->first();

        return view('KendaraanCRUD.show', ['aset_kendaraan' => $aset_kendaraan]);
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
        $aset_kendaraan = Kendaraan::find($id);

        return view('KendaraanCRUD.edit', ['aset_kendaraan' => $aset_kendaraan]);
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
            $aset_kendaraan = Kendaraan::find($id);
            $aset_kendaraan->nama_mobil = $request->nama_mobil;
            $aset_kendaraan->tipe_mobil = $request->tipe_mobil;
            $aset_kendaraan->jenis_transmisi = $request->jenis_transmisi;
            $aset_kendaraan->jenis_bahan_bakar = $request->jenis_bahan_bakar;
            $aset_kendaraan->volume_bahan_bakar = $request->volume_bahan_bakar;
            $aset_kendaraan->warna_mobil = $request->warna_mobil;
            $aset_kendaraan->kapasitas_mobil = $request->kapasitas_mobil;
            $aset_kendaraan->fasilitas_mobil = $request->fasilitas_mobil;
            $aset_kendaraan->plat_nomor = $request->plat_nomor;
            $aset_kendaraan->nomor_stnk = $request->nomor_stnk;
            $aset_kendaraan->kategori_aset = $request->kategori_aset;
            $aset_kendaraan->tgl_service_terakhir = $request->tgl_service_terakhir;
            $aset_kendaraan->status_ketersediaan_mobil = $request->status_ketersediaan_mobil;
            $aset_kendaraan->biaya_sewa = $request->biaya_sewa;

            $aset_kendaraan->save();
            return redirect()->route('kendaraan.index');
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
        $aset_kendaraan = Kendaraan::find($id);
        
        $aset_kendaraan->delete();

        return redirect()->route('kendaraan.index');
    }
}
