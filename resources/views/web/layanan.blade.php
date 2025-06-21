@extends('web.components.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
@section('content')
<div class="container" style="padding-top: 120px;">
    <h2 class="text-center mb-5 fw-bold" style="color: #294587">Layanan</h2>
    <div class="row justify-content-center">
        @foreach ($layanan as $item)
            <div class="col-md-3 mb-4 d-flex justify-content-center">
                <div class="card text-center" style="width: 16rem;">
                    <div class="card-img-top" style="height: 150px; background-color: #e0e0e0;">

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
