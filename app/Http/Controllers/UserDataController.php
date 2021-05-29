<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserData;

class UserDataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userdata = UserData::paginate(10);
        return view('UserData.index', ['userdata' => $userdata]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('UserData.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //melakukan validasi data
        $request->validate([
        'email' => 'required',
        'username' => 'required',
        'password' => 'required'
         ]);
        //fungsi eloquent untuk menambah data
        UserData::create($request->all());
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect()->route('userdata.index')
        ->with('success', 'Akun Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_user)
    {
        $userdata = UserData::find($id_user);
        return view('userdata.detail', compact('userdata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_user)
    {
        $userdata = UserData::where('id',$id_user)->first();
        return view('userdata.edit', compact('userdata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_user)
    {
         //melakukan validasi data
         $request->validate([
            'email' => 'required',
            'username' => 'required',
            'password' => 'required'
             ]);
            //fungsi eloquent untuk menngupdate data
            UserData::where('id',$id_user)->update($request->except(['_token', '_method' ]));
            //jika data berhasil diupdate, akan kembali ke halaman utama
            return redirect()->route('userdata.index')
            ->with('success', 'Akun Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_user)
    {
        UserData::where('id',$id_user)->delete();
        return redirect()->route('userdata.index')
            ->with('success', 'Akun Berhasil Dihapus');
    }
}
