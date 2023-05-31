<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class DaftarGerejaController extends Controller
{
    public function index()
    {
        return view('DaftarGereja.index');
    }

    public function store(request $request)
    {
        //return $request-> file('image')->store('surat-pengantar');

        $validatedData = $request->validate([
            'email'=> 'required|email|unique:users',
            'nama_gereja'=> 'required|max:255',
            'nama_pendeta'=> 'required|max:255',
            'alamat_gereja'=> 'required|max:255',
            'username'=> ['required', 'min:3', 'max:255', 'unique:users'],
            'password'=> 'required|min:5|max:255',
        ]);
        // $validatedData['password']=bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);

        // $request->session()->flash('succes', 'Task was successful!');
        return redirect('/login')->with('succes', 'Pendaftaran Gereja Berhasil! Silahkan Login');
    }
}
