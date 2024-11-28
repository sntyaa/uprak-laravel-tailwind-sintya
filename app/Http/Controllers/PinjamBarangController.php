<?php


namespace App\Http\Controllers;


use App\Models\PinjamBarang;
use Illuminate\Http\Request;


class PinjamBarangController extends Controller {
   //Menampilkan semua data PinjamBarang
   public function index()
   {
       $PinjamBarangs = PinjamBarang::all();
       return view('PinjamBarang.index', compact('PinjamBarangs'));
   }


   //Menampilkan form untuk membuat PinjamBarang baru
   public function create()
   {
       return view('PinjamBarang.create');
   }


   // Menyimpan data PinjamBarang ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_pinjam' => 'required|integer',
           'peminjam' => 'required|string|max:255',
           'tgl_pinjam' => 'required|date',
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'jml_barang' => 'required|string|max:255',
           'tgl_kembali' => 'required|date',
           'kondisi' => 'required|string|max:255',
       ]);


       PinjamBarang::create($validated);


       return redirect()->route('PinjamBarang.index')->with('success', 'PinjamBarang berhasil ditambahkan.');
   }


   // Menghapus data PinjamBarang dari database
   public function destroy(PinjamBarang $PinjamBarang)
   {
       $PinjamBarang->delete();


       return redirect()->route('PinjamBarang.index')->with('success', 'Data PinjamBarang berhasil dihapus.');
   }


   // Show the edit form for a specific PinjamBarang
   public function edit($id)
   {
       $PinjamBarang = PinjamBarang::find($id);


       // Check if the PinjamBarang exists
       if (!$PinjamBarang) {
           return redirect()->route('PinjamBarang.index')->with('error', 'PinjamBarang not found.');
       }
       return view('PinjamBarang.edit', compact('PinjamBarang'));
   }


   public function update(PinjamBarang $PinjamBarang, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id_pinjam' => 'required|integer',
        'peminjam' => 'required|string|max:255',
        'tgl_pinjam' => 'required|date',
        'id_barang' => 'required|integer',
        'nama_barang' => 'required|string|max:255',
        'jml_barang' => 'required|string|max:255',
        'tgl_kembali' => 'required|date',
        'kondisi' => 'required|string|max:255',
       ]);


       // Update data PinjamBarang
       $PinjamBarang->update($validatedData);


       return redirect()->route('PinjamBarang.index')->with('success', 'PinjamBarang data successfully updated.');
   }
}
