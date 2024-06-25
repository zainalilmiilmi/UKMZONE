<?php

namespace App\Http\Controllers;

use App\Models\ukm;
use App\Models\pengurus;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class pengurusController extends Controller
{
    public function index()
    {
        $pengurus = pengurus::all();
        return view('pengurus.index', compact('pengurus'));

    //     $id=1;
    //     $pengurus = pengurus::where('id',$id)->get();
    //     return view('pengurus.index', compact('pengurus'));
    }

    public function create()
    {
        $ukm = ukm::all();
        return view('pengurus.create', compact('ukm'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'prodi' => 'required',
            'position' => 'required',
            'organization_id' => 'required|exists:ukm,id',
            'image' => 'nullable|image'
        ]);

        $path = $request->file('image') ? $request->file('image')->store('public/images') : null;

        pengurus::create([
            'name' => $request->name,
            'prodi' => $request->prodi,
            'position' => $request->position,
            'image_path' => $path,
            'organization_id' => $request->organization_id
        ]);

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pengurus = pengurus::findOrFail($id);
        $ukm = ukm::all();
        return view('pengurus.edit', compact('pengurus', 'ukm'));
    }

    public function update(Request $request, $id)
    {
        \Log::info("Mengupdate pengurus dengan ID: $id");
        $pengurus = pengurus::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'prodi' => 'required',
            'position' => 'required',
            'organization_id' => 'required|exists:ukm,id',
            'image' => 'nullable|image'
        ]);

        if ($request->hasFile('image')) {
            if ($pengurus->image_path) {
                Storage::delete($pengurus->image_path);
            }
            $path = $request->file('image')->store('public/images');
        } else {
            $path = $pengurus->image_path;
        }

        $pengurus->update([
            'name' => $request->name,
            'prodi' => $request->prodi,
            'position' => $request->position,
            'image_path' => $path,
            'organization_id' => $request->organization_id
        ]);

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil diupdate.');
    }

    public function destroy($id)
    {
        $pengurus = pengurus::findOrFail($id);

        // Hapus gambar terkait jika ada
        if ($pengurus->image_path) {
            // Hapus file dari storage dengan menggunakan path yang benar
            Storage::delete(str_replace('storage', 'public', $pengurus->image_path));
        }

        // Hapus record dari database
        $pengurus->delete();

        return redirect()->route('pengurus.index')->with('success', 'Pengurus berhasil dihapus.');
    }
}
