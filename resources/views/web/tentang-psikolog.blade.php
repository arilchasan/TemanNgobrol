@extends('web.components.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <div class="container mt-5 mb-5">
        <h2 class="text-center mb-4 fw-bold" style="color: #294587;">Profil Psikolog</h2>

        <div class="d-flex flex-column align-items-center">
            <div class="text-center mb-3">
                <img src="{{ asset('storage/' . $psikolog->image) }}" alt="Foto {{ $psikolog->nama }}"
                    style="width: 150px; height: 150px; object-fit: cover; border: 2px solid black; border-radius: 10px;">
            </div>
            <h4 class="fw-bold">{{ $psikolog->nama }}</h4>
            <p>{{ $psikolog->role }}</p>
            <a href="/psikolog/konsultasi/{{ $psikolog->id }}" class="btn btn-outline-dark mb-4"
                style="color: #294587; border-color: #294587; background-color: transparent;"
                onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">Konsultasi Sekarang</a>
        </div>

        <div class="mt-4">
            <h4 class=" text-center fw-bold mb-3">Tentang Saya</h4>
            <p>{{ $psikolog->tentang }}</p>
        </div>

        <div class="mt-4">
            <h4 class=" text-center fw-bold mb-3">Kasus yang Ditangani</h4>
            <p>{{ $psikolog->kasus }}</p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
