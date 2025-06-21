<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
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

    public function psikolog()
    {
        $psikolog = Psikolog::all();

        return view('admin.psikolog.index', compact('psikolog'));
    }

    public function create()
    {
        return view('admin.psikolog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'tentang' => 'required|string',
            'kasus' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('psikolog_images', 'public');
            $data['image'] = $image;
        }

        Psikolog::create($data);

        return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil ditambahkan.');
    }

    public function show($id)
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('admin.psikolog.detail', compact('psikolog'));
    }


}
