<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
     public function index()
    {
         $layanan = [
        [
            'judul' => 'Konseling Individu',
            'deskripsi' => 'Sesi privat bersama psikolog profesional untuk membahas masalah pribadi seperti kecemasan, stres, depresi, atau krisis diri.'
        ],
        [
            'judul' => 'Manajemen Emosi',
            'deskripsi' => 'Sesi khusus untuk membantu klien mengenali, mengelola, dan mengekspresikan emosi dengan cara yang sehat.'
        ],
        [
            'judul' => 'Tes Psikologi Online',
            'deskripsi' => 'Tes kepribadian, tes minat bakat, atau tes kesehatan mental yang bisa diakses secara daring dengan hasil interpretasi profesional.'
        ],
        [
            'judul' => 'Chat Konseling',
            'deskripsi' => 'Alternatif sesi real-time, klien bisa curhat lewat chat dan mendapat tanggapan dari psikolog dalam waktu tertentu.'
        ]
    ];

    return view('web.layanan', compact('layanan'));
    }
}
