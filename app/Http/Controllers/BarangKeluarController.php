<?php


namespace App\Http\Controllers;


use App\Models\BarangKeluar;
use Illuminate\Http\Request;


class BarangKeluarController extends Controller {
   //Menampilkan semua data BarangKeluar
   public function index()
   {
       $BarangKeluars = BarangKeluar::all();
       return view('BarangKeluar.index', compact('BarangKeluars'));
   }


   //Menampilkan form untuk membuat BarangKeluar baru
   public function create()
   {
       return view('BarangKeluar.create');
   }


   // Menyimpan data BarangKeluar ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_barang' => 'required|integer',
           'nama_barang' => 'required|string|max:255',
           'tgl_keluar' => 'required|date',
           'jml_keluar' => 'required|integer|max:11',
           'lokasi' => 'required|string|max:255',
           'penerima' => 'required|string|max:255',
       ]);


       BarangKeluar::create($validated);


       return redirect()->route('BarangKeluar.index')->with('success', 'BarangKeluar berhasil ditambahkan.');
   }


   // Menghapus data BarangKeluar dari database
   public function destroy(BarangKeluar $BarangKeluar)
   {
       $BarangKeluar->delete();


       return redirect()->route('BarangKeluar.index')->with('success', 'Data BarangKeluar berhasil dihapus.');
   }


   // Show the edit form for a specific BarangKeluar
   public function edit($id)
   {
       $BarangKeluar = BarangKeluar::find($id);


       // Check if the BarangKeluar exists
       if (!$BarangKeluar) {
           return redirect()->route('BarangKeluar.index')->with('error', 'BarangKeluar not found.');
       }
       return view('BarangKeluar.edit', compact('BarangKeluar'));
   }


   public function update(BarangKeluar $BarangKeluar, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id_barang' => 'required|integer',
        'nama_barang' => 'required|string|max:255',
        'tgl_keluar' => 'required|date',
        'jml_keluar' => 'required|integer|max:11',
        'lokasi' => 'required|string|max:255',
        'penerima' => 'required|string|max:255',
       ]);


       // Update data BarangKeluar
       $BarangKeluar->update($validatedData);


       return redirect()->route('BarangKeluar.index')->with('success', 'BarangKeluar data successfully updated.');
   }
}
