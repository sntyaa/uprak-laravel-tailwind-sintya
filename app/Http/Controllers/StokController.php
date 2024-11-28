<?php


namespace App\Http\Controllers;


use App\Models\Stok;
use Illuminate\Http\Request;


class StokController extends Controller {
   //Menampilkan semua data Stok
   public function index()
   {
       $Stoks = Stok::all();
       return view('Stok.index', compact('Stoks'));
   }


   //Menampilkan form untuk membuat Stok baru
   public function create()
   {
       return view('Stok.create');
   }


   // Menyimpan data Stok ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'jml_masuk' => 'required|integer|max:11',
           'jml_keluar' => 'required|integer|max:11',
           'total_barang' => 'required|integer|max:11',
       ]);


       Stok::create($validated);


       return redirect()->route('Stok.index')->with('success', 'Stok berhasil ditambahkan.');
   }


   // Menghapus data Stok dari database
   public function destroy(Stok $Stok)
   {
       $Stok->delete();


       return redirect()->route('Stok.index')->with('success', 'Data Stok berhasil dihapus.');
   }


   // Show the edit form for a specific Stok
   public function edit($id)
   {
       $Stok = Stok::find($id);


       // Check if the Stok exists
       if (!$Stok) {
           return redirect()->route('Stok.index')->with('error', 'Stok not found.');
       }
       return view('Stok.edit', compact('Stok'));
   }


   public function update(Stok $Stok, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id_barang' => 'required|integer',
        'nama_barang' => 'required|string|max:255',
        'jml_masuk' => 'required|integer|max:11',
        'jml_keluar' => 'required|integer|max:11',
        'total_barang' => 'required|integer|max:11',
       ]);


       // Update data Stok
       $Stok->update($validatedData);


       return redirect()->route('Stok.index')->with('success', 'Stok data successfully updated.');
   }
}
