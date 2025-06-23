@extends('web.components.app')

@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<div class="container" style="padding-top: 50px;">
    <h2 class="text-center mb-5 fw-bold" style="color: #294587">Layanan</h2>
    <div class="row justify-content-center">
        @foreach ($layanan as $item)
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 16rem;">
                    <div class="card-img-top" style="height: 150px; background-color: #ffffff;border-bottom: 1px solid #000000;">
                        <img src="{{ asset($item['img']) }}" class="img-fluid" alt="{{ $item['judul'] }}" style="max-height: 100%; max-width: 100%; object-fit: cover;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['judul'] }}</h5>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
