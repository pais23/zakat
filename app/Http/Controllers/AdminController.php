<?php

namespace App\Http\Controllers;

use App\Models\Zakat;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function tampil()
    {
        return view('admin.index');
    }
    
    public function tambah()
    {
        return view('admin.tambah');
    }
    
    public function show()
    {
        $data_admin = Zakat::all();
        return view('admin.daftar', ['data_admin' => $data_admin]);
    }

    public function index()
    {
        $data_admin = Zakat::all();
        return view('admin.daftar', ['data_admin' => $data_admin]);
    }

    public function create(Request $request)
    {
        Zakat::create([
            'nama' => $request['nama'],
            'jenis' => $request['jenis'],
            'jumlah' => $request['jumlah'],
        ]);
        return redirect('/daftar');
    }

    public function edit($id)
    {
        $admin = Zakat::find($id);
        return view('admin.edit', ['admin' => $admin]);
    }

    public function update(Request $request,$id)
    {
        $admin = Zakat::find($id);
        $admin->update($request->all());
        return redirect('/daftar');
    }

    public function delete($id)
    {
        $admin = zakat::find($id);
        $admin->delete();
        return redirect('/daftar');
    }
    

}