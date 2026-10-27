<?php

namespace App\Http\Controllers;

use App\Models\PortofolioDian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortofolioDianController
{
    public function index()
    {
        $portofolio = PortofolioDian::first();
        return view('cv', compact('portofolio'));
    }

    public function admin()
    {
        $portofolio = PortofolioDian::first();
        return view('admin', compact('portofolio'));
    }

    public function storeOrUpdate(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
            'deskripsi' => 'required',
            'email' => 'required|email',
            'telepon' => 'required',
            'alamat' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->only(['nama', 'jabatan', 'deskripsi', 'email', 'telepon', 'alamat']);

        if ($request->hasFile('foto')) {
            $data['foto'] = $request->file('foto')->store('uploads', 'public');
        }

        $portofolio = PortofolioDian::first();

        if ($portofolio) {
            $portofolio->update($data);
        } else {
            PortofolioDian::create($data);
        }

        return redirect()->back()->with('success', 'Data Portofolio Berhasil Disimpan!');
    }

    public function destroy($id)
    {
        $portofolio = PortofolioDian::findOrFail($id);
        if ($portofolio->foto) {
            Storage::disk('public')->delete($portofolio->foto);
        }
        $portofolio->delete();

        return redirect()->back()->with('success', 'Data Berhasil Dihapus!');
    }
}