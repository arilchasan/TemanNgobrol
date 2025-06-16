@extends('web.components.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
    <div class="contain" style="padding-top: 100px;">
        <h2 class="text-center mb-5 fw-bold" style="color: #294587">Daftar Psikolog</h2>
        <div class="row justify-content-center">
            @foreach ($psikologs as $psikolog)
                <div class="col-md-4 col-sm-6 mb-4 d-flex justify-content-center">
                    <div class="card shadow-sm border-0" style="width: 18rem;">
                        <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                            style="height: 150px;">
                            <span class="text-muted">Foto Psikolog</span>
                        </div>
                        <div class="card-body text-center">
                            <h5 class="card-title fw-semibold">{{ $psikolog['nama'] }}</h5>
                            <p class="card-text text-muted">{{ $psikolog['role'] }}</p>
                            <a href="#" class="btn btn-outline-primary w-100 mb-2">Lihat Profil</a>
                            <a href="#" class="btn btn-outline-dark w-100 "
                                style="color: #294587; border-color: #294587; background-color: transparent;"
                                onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                                onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                                Konsultasi
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
