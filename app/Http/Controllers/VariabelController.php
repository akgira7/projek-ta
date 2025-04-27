<?php

namespace App\Http\Controllers;

use App\Models\Variabel;
use Illuminate\Http\Request;

class VariabelController extends Controller
{
    public function index()
    {
        $data = Variabel::all();
        return view('dataVariabel/variabel', compact('data'));
    }

    public function tambahvariabel()
    {
        return view('dataVariabel/tambahvariabel'); 
    }

    public function insertvariabel(Request $request)
    {
        // Validasi dan simpan data
        Variabel::create($request->all());
        // dd($request->all());
        return redirect()->route('variabel')->with('success', 'Data Variabel Berhasil Ditambahkan!'); 
    }

    public function editvariabel($id){
        
        $data = Variabel::find($id);
        //dd($data);
        return view('dataVariabel/editvariabel', compact('data'));
    }

    public function updatevariabel(Request $request, $id)
    {
        // Validasi dan update data
        $data = Variabel::find($id);
        $data->update($request->all());
        return redirect()->route('variabel')->with('success', 'Data Variabel Berhasil Di Update!'); 
    }

    public function deletevariabel($id)
    {
        $data = Variabel::find($id);
        $data->delete();
        return redirect()->route('variabel')->with('success', 'Data Variabel Berhasil Di Hapus!'); 
    }
}