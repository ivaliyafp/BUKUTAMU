<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tamu;

class TamuController extends Controller
{
    public function tambahTamu()
    {
        return view('tambah_tamu');
    }
    public function simpanTamu(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'kategori' => 'required',
            'tujuan' => 'required',
        ]);

        Tamu::create($request->all());

        return view('simpan-tamu');

        return redirect()->route('tambah.tamu')->with('success', 'Tamu berhasil ditambahkan!');
    }

    public function daftar_tamu()
    {
        $data_tamu = Tamu::all();
        return view('daftar_tamu', ['data_tamu' => $data_tamu]);
    }
    
    public function welcome()
    {
        return view('welcome');
    }
    public function Dashboard()
    {
        return view('Dashboard');
    }
    public function index()
    {
        $data_tamu = Tamu::all();
        return view('daftar_tamu',compact('data_tamu'));
    }
    public function store(Request $request)
    {
        $tamu = new Tamu();
        $tamu->nama = $request->input('nama');
        $tamu->email = $request->input('email');
        $tamu->alamat = $request->input('alamat');
        $tamu->kategori = $request->input('kategori');
        $tamu->tujuan = $request->input('tujuan');
        $tamu->save();

        return redirect('/daftar_tamu');
    }
    public function edit($id)
    {
        $tamu = Tamu::findOrFail($id);
        return view('edit', compact('tamu'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'alamat' => 'required',
            'kategori' => 'required',
            'tujuan' => 'required',
        ]);

        $tamu = Tamu::findOrFail($id);
        $tamu->update($request->all());

        return redirect('/daftar_tamu')->with('success', 'Data tamu berhasil diperbarui!');
    }
    
    public function destroy($id)
    {
        $tamu = Tamu::findOrFail($id);
        $tamu->delete();
        return redirect('/daftar_tamu')->with('success','Data tamu berhasil di hapus!');
    }
}

