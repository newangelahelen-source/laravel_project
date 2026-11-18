<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = [
            'Angela',
            'Budi',
            'Citra'
        ];

        return view('mahasiswa', [
            'mahasiswa' => $mahasiswa
        ]);
    }
}
