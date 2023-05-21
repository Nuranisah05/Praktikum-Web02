<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index1()
    {
        return view('skill');
    }

    // Buat Fungsi hasil untuk menampilkan data inputan
    public function skillhasil(Request $request)
    {
       $this->validate($request,[
        'nama' => 'required',
        'email' => 'required',
        'lokasi' => 'required',
        'jenis_kelamin' => 'required',
        'skill' => 'required',
       ]);
       //udah diisi 4 inputan 
       return view('skillhasil', ['data' => $request]);
    }
}
