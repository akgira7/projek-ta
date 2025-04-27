<?php

namespace App\Http\Controllers;

use App\Models\Alternatif;
use Illuminate\Http\Request;

class AlternatifController extends Controller
{
    public function index()
    {
        $data = Alternatif::all();
        return view('dataAlternatif/alternatif', compact('data'));
    }

    public function tambahalternatif()
    {
        return view('dataAlternatif/tambahalternatif'); 
    }

    public function insertalternatif(Request $request)
    {
        // Validasi dan simpan data
        Alternatif::create($request->all());
        // dd($request->all());
        return redirect()->route('alternatif')->with('success', 'Data Alternatif Berhasil Ditambahkan!'); 
    }

    public function editalternatif($id){
        
        $data = Alternatif::find($id);
        //dd($data);
        return view('dataAlternatif/editalternatif', compact('data'));
    }

    public function updatealternatif(Request $request, $id)
    {
        // Validasi dan update data
        $data = Alternatif::find($id);
        $data->update($request->all());
        return redirect()->route('alternatif')->with('success', 'Data Alternatif Berhasil Di Update!'); 
    }

    public function deletealternatif($id)
    {
        $data = Alternatif::find($id);
        $data->delete();
        return redirect()->route('alternatif')->with('success', 'Data Alternatif Berhasil Di Hapus!'); 
    }
}
