<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\renungan_harian;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RenunganController extends Controller
{
    public function index()
    {
        return view('isirenunganharian');
    }

    public function store(request $request)
    {
        //return $request-> file('image')->store('surat-pengantar');
        // $user = User.objects.get(id = id);

        $validatedData = $request->validate([
            // $auth= User::find($id),
            'tanggal_renungan'=> 'required',
            'ayat_renungan'=> 'required|max:255',
            'judul_renungan'=> 'required|max:255',
            'isi_renungan'=> 'required',
            // 'user_id' => auth()->id()
        ]);
        renungan_harian::create($validatedData);

        // $renungan=renungan_harian::create ('id', $request->id)->store([
        //     'tanggal_renungan'=> 'required',
        //     'ayat_renungan'=> 'required|max:255',
        //     'judul_renungan'=> 'required|max:255',
        //     'isi_renungan'=> 'required',
        // ]);


        // $request->session()->flash('succes', 'Task was successful!');
        return redirect('/pengurusrenunganharian');
    }

    public function read()
    {
        $renungan_harians = DB::table('renungan_harians')->get();

        return view('pengurusrenunganharian',['renungan_harians' => $renungan_harians]);
    }

    public function view($id)
    {
        $renungan_harians = DB::table('renungan_harians')->where('id',$id)->get();

        return view('ubahrenunganharian',['renungan_harians' => $renungan_harians]);
    }

    public function update(request $request)
    {
        	// update data pegawai
	DB::table('renungan_harians')->where('id',$request->id)->update([
		'tanggal_renungan' => $request->tanggal_renungan,
		'ayat_renungan' => $request->ayat_renungan,
		'judul_renungan' => $request->judul_renungan,
		'isi_renungan' => $request->isi_renungan
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pengurusrenunganharian');
        // $renungan_harians = DB::table('renungan_harians')->where('id',$id)->get();

        // return view('pengurusrenunganharian',['renungan_harians' => $renungan_harians]);
    }
            
}
