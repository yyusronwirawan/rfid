<?php

namespace App\Http\Controllers;
use App\Models\RfidTemp;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
     
        $data = Karyawan::All();
        return view('karyawan.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $delete = \DB::table('temp_rfid')->delete();
        return view('karyawan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $karyawan = Karyawan::create([
            'uid' => $request->input('kartu'),
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jabatan' => $request->input('jabatan'),

        ]);
         $delete = \DB::table('temp_rfid')->delete();

        return redirect('/karyawan')->with('success', 'Data Berhasil Ditambahkan !!');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Karyawan::where('id', $id)->get();
        return view('Karyawan.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $data = Karyawan::where('id', $id)->update([
          'nama' => $request->input('nama'),
          'email' => $request->input('email'),
          'jabatan' => $request->input('jabatan'),
      ]);

        return redirect('/karyawan')->with('success', 'Data Berhasil Diedit !!');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Karyawan  $karyawan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $data = Karyawan::where('id', $id)->delete();
      return redirect('/karyawan')->with('success', 'Data Berhasil Dihapus !!');  
    }
}
