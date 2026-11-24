<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data['dataPelanggan'] = User::all();
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'role'     => 'required', // <-- Tambahkan validasi role
        ]);
        $data['name']                  = $request->name;
        $data['email']                 = $request->email;
        $data['password']              = $request->password;
        $data['password_confirmation'] = $request->password_confirmation;
        $data['role']                  = $request->role;

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Penambahan Data Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['dataPelanggan'] = User::findOrFail($id);
        return view('admin.user.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'role'  => 'required', // <-- Tambahkan validasi role
        ]);
        $user_id = $id;
        $user    = User::findOrFail($user_id);

        $user->name                  = $request->name;
        $user->email                 = $request->email;
        $user->password              = $request->password;
        $user->password_confirmation = $request->password_confirmation;
        $user->role                  = $request->role;

        $user->save();
        return redirect()->route('user.index')->with('success', 'Perubahan Data Berhasil!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data berhasil dihapus');
    }
}
