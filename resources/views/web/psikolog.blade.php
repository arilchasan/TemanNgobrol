@extends('web.components.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
    <div class="contain" style="padding-top: 100px;">
        <h2 class="text-center mb-5 fw-bold" style="color: #294587">Daftar Psikolog</h2>

        <div id="psikologCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach (array_chunk($psikologs, 3) as $index => $psikologChunk)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <div class="d-flex justify-content-center gap-4">
                            @foreach ($psikologChunk as $psikolog)
                                <div class="card shadow-sm border-0" style="width: 18rem;">
                                    <div class="card-img-top bg-light d-flex align-items-center justify-content-center"
                                        style="height: 190px;">
                                        <span class="text-muted">Foto Psikolog</span>
                                    </div>
                                    <div class="card-body text-center">
                                        <h5 class="card-title fw-semibold">{{ $psikolog['nama'] }}</h5>
                                        <p class="card-text text-muted">{{ $psikolog['role'] }}</p>
                                        <a href="#" class="btn btn-outline-primary w-100 mb-2">Lihat Profil</a>
                                        <a href="#" class="btn btn-outline-dark w-100"
                                            style="color: #294587; border-color: #294587; background-color: transparent;"
                                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                                            Konsultasi
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

            </div>


            <button class="carousel-control-prev" type="button" data-bs-target="#psikologCarousel" data-bs-slide="prev" style="color: #294587">
                <span class="carousel-control-prev-icon"  style="background-color: #294587"></span>
                <span class="visually-hidden">Previous</span>
            </button>


            <button class="carousel-control-next" type="button" data-bs-target="#psikologCarousel" data-bs-slide="next" style="color: #294587">
                <span class="carousel-control-next-icon "  style="background-color: #294587" ></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Bootstrap JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@endsection
