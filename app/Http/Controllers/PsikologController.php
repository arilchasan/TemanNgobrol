<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PsikologController extends Controller
{
    public function index()
    {
        $psikologs = [
            ['nama' => 'Fa’iz Maulana Habibi', 'role' => 'Konselor'],
            ['nama' => 'Anwaril Chasan Qodli', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Raihan Zul Hilmi', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Naufal Rifki Erlang P.', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Derren', 'role' => 'Psikolog Klinis'],
        ];

        return view('web.psikolog', compact('psikologs'));
    }
}
