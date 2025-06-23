<?php

namespace App\Http\Controllers;

use App\Models\Psikolog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PsikologController extends Controller
{
    public function index()
    {
        /* $psikologs = [
            ['nama' => 'Fa’iz Maulana Habibi', 'role' => 'Konselor'],
            ['nama' => 'Anwaril Chasan Qodli', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Raihan Zul Hilmi', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Naufal Rifki Erlang P.', 'role' => 'Psikolog Klinis'],
            ['nama' => 'Derren', 'role' => 'Psikolog Klinis'],
        ]; */
        $psikologs = Psikolog::all();

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
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
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

    public function tentang($id)
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('web.tentang-psikolog', compact('psikolog'));
    }


    public function edit($id)
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('admin.psikolog.update', compact('psikolog'));
    }

    public function update(Request $request, $id)
    {
        $psikolog = Psikolog::findOrFail($id);

        $request->validate([
            'nama' => 'required|string|max:255',
            'role' => 'required|string|max:255',
            'tentang' => 'required|string',
            'kasus' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($psikolog->image) {
                Storage::disk('public')->delete($psikolog->image);
            }
            $image = $request->file('image')->store('psikolog_images', 'public');
            $data['image'] = $image;
        }

        $psikolog->update($data);

        return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $psikolog = Psikolog::findOrFail($id);

        if ($psikolog->image) {
            Storage::disk('public')->delete($psikolog->image);
        }

        $psikolog->delete();

        return redirect()->route('psikolog.index')->with('success', 'Data psikolog berhasil dihapus.');
    }

    public function jadwalPsikolog($id)
    {
        $psikolog = Psikolog::findOrFail($id);

        return view('web.jadwal-psikolog', compact('psikolog'));
    }
}
