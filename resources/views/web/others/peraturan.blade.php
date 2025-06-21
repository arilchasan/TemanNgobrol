@extends('web.components.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container my-3" style="padding-top: 20px;padding-bottom: 5px;">
        <h1 class="text-center mb-4 fw-bold" style="color: #294587;">Peraturan Konseling TemanNgobrol</h1>
        <ol class="ps-3" style="max-width: 700px; margin: 0 auto; text-align: justify;">
            <li class="mb-3">Semua data dan percakapan bersifat rahasia dan dilindungi oleh kebijakan privasi.</li>
            <li class="mb-3">Pengguna wajib bersikap sopan, tidak menyebarkan ujaran kebencian, serta menghormati psikolog
                dan staf.</li>
            <li class="mb-3">Dilarang menggunakan layanan untuk tujuan yang tidak etis, seperti menyamar, iseng, atau
                melecehkan.</li>
            <li class="mb-3">Pembayaran harus dilakukan terlebih dahulu dan pembatalan hanya dapat dilakukan maksimal 24
                jam sebelum sesi.</li>
            <li class="mb-3">TemanNgobrol tidak menangani kasus darurat dan pengguna disarankan menghubungi layanan
                darurat jika dalam krisis.</li>
        </ol>
    </div>
    <style> 
        li {
            font-size: 1.2rem;
        }


    </style>
@endsection
