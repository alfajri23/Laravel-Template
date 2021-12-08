<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    function index(){
    	$data = Barang::all();

    	return view('barang',compact('data'));
    }

    function store(Request $request){

    	$data = Barang::all();

    	Barang::updateOrCreate(['id' => $request->id],[
            'nama' => $request->nama,
            'keterangan' => $request->keterangan,   
        ]);

    	return redirect()->route('barangAll');
    }

    function delete($id){
    	$data = Barang::find($id);
    	$data->delete();

    	return redirect()->back();
    }

    function edit($id){
    	$data = Barang::find($id);
    	

    	return view('barang-edit',compact('data'));
    }
}
