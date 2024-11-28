<?php


namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller {
   //Menampilkan semua data User
   public function index()
   {
       $Users = User::all();
       return view('User.index', compact('Users'));
   }


   //Menampilkan form untuk membuat User baru
   public function create()
   {
       return view('User.create');
   }


   // Menyimpan data User ke database
   public function store(Request $request)
   {
       $validated = $request->validate([
           'id_user' => 'required|integer',
           'nama' => 'required|string|max:255',
           'username' => 'required|string|max:255',
           'password' => 'required|string|max:255',
           'level' => 'nullable|integer',
       ]);


       User::create($validated);


       return redirect()->route('User.index')->with('success', 'User berhasil ditambahkan.');
   }


   // Menghapus data User dari database
   public function destroy(User $User)
   {
       $User->delete();


       return redirect()->route('User.index')->with('success', 'Data User berhasil dihapus.');
   }


   // Show the edit form for a specific User
   public function edit($id)
   {
       $User = User::find($id);


       // Check if the User exists
       if (!$User) {
           return redirect()->route('User.index')->with('error', 'User not found.');
       }
       return view('User.edit', compact('User'));
   }


   public function update(User $User, Request $request)
   {
       // Validasi data request jika diperlukan
       $validatedData = $request->validate([
        'id_user' => 'required|integer',
        'nama' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'password' => 'required|string|max:255',
        'level' => 'nullable|integer',
       ]);


       // Update data User
       $User->update($validatedData);


       return redirect()->route('User.index')->with('success', 'User data successfully updated.');
   }
}
