<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    public function Fasilitas()
    {
        $fasilitas = \App\Models\Fasilitas::all();
        return view('Fasilitas', ['fasilitas' => $fasilitas]);
    }

    public function create(Request $request)
	{
        \App\Models\Fasilitas::create($request->all());
        return redirect('/Fasilitas')->with('berhasil', 'Berhasil menambahkan data fasilitas.');
    }
    
    public function edit($id)
    {
        $fasilitas = \App\Models\Fasilitas::find($id);
        return view('edit',['fasilitas' => $fasilitas]);
    }

    public function update(Request $request, $id)
    {
        $fasilitas = \App\Models\Fasilitas::find($id); 
        $fasilitas->update($request->all());
        return redirect('/Fasilitas')->with('berhasil', 'Berhasil mengubah data fasilitas.');
    }

    public function delete($id)
    {
        $fasilitas = \App\Models\Fasilitas::find($id);
        $fasilitas->delete();
        return redirect('/Fasilitas')->with('berhasil', 'Berhasil menghapus data fasilitas.');
    }
}