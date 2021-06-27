<?php

namespace App\Http\Controllers;
use App\Models\Absensi;
use App\Models\Karyawan;
use App\Models\Mode;
use App\Models\RfidTemp;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function dashboard(){

    	return view('Dashboard.index');
    }

    public function absensi(){
    	return view('rekap.index');
    }

    public function scan(){
    	return view('scan.index');
    }

    // relatime
    public function nokartu(){
        $data = RfidTemp::all();
        $cek = RfidTemp::all()->toArray();

        return view('Karyawan.nokartu',compact('data','cek'));

    }

    public function scan_absen(){

        return view('scan.index');

    }

    public function reader(){
        $data = RfidTemp::find(1);
        $cek =  RfidTemp::all()->toArray();
        $mode = Mode::first();
        $mode_absen = $mode->mode;

        $text_mode = "";
        if($mode_absen == 1){
            $text_mode = "Jam Masuk";
        }else{
            $text_mode = "Jam Pulang";
        }
        
        // cek tabel temp rfid
        if(empty($cek)){
            $hasil = 1;

        }else{
            $rfid_masuk = $data->uid;
            // cek rfid apakah sudah terdaftar di tabel karyawan
            $karyawan = Karyawan::where('no_kartu', $rfid_masuk)->count();
            if($karyawan > 0){

                // ambil nama karyawan
                $data = Karyawan::where('no_kartu', $rfid_masuk)->first();
                $nama = $data->nama;
                // -----------------------------------
                date_default_timezone_set('Asia/Jakarta');
                $tanggal = date('Y-m-d');
                $jam = date("H:i:s");
                // cek data absensi
                $absensi = Absensi::where('uid',$rfid_masuk)->where('tanggal', $tanggal)->count();

                if($absensi < 1){
                    $hasil = 0;
                    $insert_absen = Absensi::create([
                        'uid' => $rfid_masuk,
                        'tanggal' => $tanggal,
                        'jam_masuk' => $jam,
                        'jam_pulang' => "-",
                    ]);

                }else{
                    if($mode_absen != 2){
                     $hasil = 4;
                 }else{
                   $hasil = 2;
                   $update_absensi = Absensi::where('uid',$rfid_masuk)->where('tanggal', $tanggal)->update([
                    'jam_pulang' => $jam,
                ]);
               }         
           }

       }else{
       // else cek data karyawan
        $hasil = 3;

    }
}
        // delete temprfid
RfidTemp::truncate();

return view('scan.reader', compact('hasil','text_mode'));

}

    // method ari arduino
public function temp($id){

    $delete = RfidTemp::truncate();

    $insert = RfidTemp::create([
        'uid' => $id,
    ]);

    return 'success';
}
}