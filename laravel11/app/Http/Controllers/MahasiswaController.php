<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class MahasiswaController extends Controller
{
    public function index()
    {
        $data = ['nama' => 'isan', 'foto' =>'baru.jpeg'];
        $mahasiswa = DB::table('mahasiswa')->get();
        return view('mahasiswa', compact ('data', 'mahasiswa')); 
}

}