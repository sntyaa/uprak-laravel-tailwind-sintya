<?php


namespace App\Http\Controllers;


use App\Models\Supplier;
use Illuminate\Http\Request;


class SupplierController extends Controller {
   //Menampilkan semua data Supplier
   public function index()
   {
       $Suppliers = Supplier::all();
       return view('Supplier.index', compact('Suppliers'));
   }


   //Menampilkan form untuk membuat Supplier baru
   public function create()
   {
       return view('Supplier.create');
   }


   // Menyimpan data Supplier ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_supplier' => 'required|integer',
           'nama_supplier' => 'required|string|max:255',
           'alamat_supplier' => 'nullable|string',
           'telepon_supplier' => 'nullable|integer',
       ]);


       Supplier::create($validated);


       return redirect()->route('Supplier.index')->with('success', 'Supplier berhasil ditambahkan.');
   }


   // Menghapus data Supplier dari database
   public function destroy(Supplier $Supplier)
   {
       $Supplier->delete();


       return redirect()->route('Supplier.index')->with('success', 'Data Supplier berhasil dihapus.');
   }


   // Show the edit form for a specific supplier
   public function edit($id)
   {
       $Supplier = Supplier::find($id);


       // Check if the supplier exists
       if (!$Supplier) {
           return redirect()->route('Supplier.index')->with('error', 'Supplier not found.');
       }
       return view('Supplier.edit', compact('Supplier'));
   }


   public function update(Supplier $Supplier, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id_supplier' => 'required|integer',
        'nama_supplier' => 'required|string|max:255',
        'alamat_supplier' => 'nullable|string',
        'telepon_supplier' => 'nullable|integer',   
       ]);


       // Update data Supplier
       $Supplier->update($validatedData);


       return redirect()->route('Supplier.index')->with('success', 'Supplier data successfully updated.');
   }
}
