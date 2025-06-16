@extends('web.components.app')

@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class="container p-5 my-5 overflow-x: hidden;">
        <div class="row align-items-center">
            <!-- Text Section -->
            <div class="col-md-8 mb-4 mb-md-0">
                <h2 class="fw-bold">
                    Yuk, Mulai Perjalanan Kesehatan Mental <br> Kamu Bersama TemanNgobrol!
                </h2>
                <p class="mt-3">
                    Kamu nggak harus melalui semuanya sendirian. <br>
                    TemanNgobrol siap menemani dengan layanan konseling online bersama psikolog profesional dan berlisensi.
                </p>
                <a href="#" class="btn btn-outline-dark mt-3"
                    style="color: #294587; border-color: #294587; background-color: transparent;"
                    onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                    onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                    Konsultasi Sekarang
                </a>

            </div>

            <!-- Image Placeholder -->
            <div class="col-md-4 text-center">
                <img class="mx-auto" style="max-width: 100%; width: 600px; height: 300px; "
                    src="{{ asset('assets/homepage.svg') }}" alt="Logo">
            </div>

        </div>
        <!-- Bottom Quote Section -->

        <div class="col-md-6 mx-auto my-5">
            <p class="text-center fst-italic">
                "Rasakan perubahan positif dalam hidupmu! Konseling di sini untuk kamu yang butuh tempat curhat tanpa takut
                dihakimi. Yuk, kita bareng-bareng cari solusi buat masalah yang lagi kamu hadapi, biar hidupmu lebih happy
                dan seimbang. Kamu nggak sendiri, kita ada buat dukung kamu!"
            </p>
        </div>
        < <!-- Section: Apa Yang Sedang Kamu Rasakan -->
            <div class="container my-5">
                <h4>Apa Yang Sedang Kamu Rasakan?</h4>
                <p>Yuk, pilih perasaan yang sedang kamu hadapi dan temukan bantuan yang kamu butuhkan sekarang!</p>
                <style>
                    .nav-tabs .nav-link {
                        color: #000 !important;
                    }

                    .nav-tabs .nav-link.active {
                        color: #fff !important;
                        background-color: #294587 !important;
                        border-color: #294587 !important;
                    }
                </style>
                <!-- Tabs Navigation -->
                <ul class="nav nav-tabs mt-4" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="depresi-tab" data-bs-toggle="tab" data-bs-target="#depresi"
                            type="button" role="tab" aria-controls="depresi" aria-selected="true">Depresi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="kecemasan-tab" data-bs-toggle="tab" data-bs-target="#kecemasan"
                            type="button" role="tab" aria-controls="kecemasan" aria-selected="false">Kecemasan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="stres-tab" data-bs-toggle="tab" data-bs-target="#stres" type="button"
                            role="tab" aria-controls="stres" aria-selected="false">Stres</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="trauma-tab" data-bs-toggle="tab" data-bs-target="#trauma"
                            type="button" role="tab" aria-controls="trauma" aria-selected="false">Trauma</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="burnout-tab" data-bs-toggle="tab" data-bs-target="#burnout"
                            type="button" role="tab" aria-controls="burnout" aria-selected="false">Burnout</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="mood-tab" data-bs-toggle="tab" data-bs-target="#mood" type="button"
                            role="tab" aria-controls="mood" aria-selected="false">Gangguan Mood</button>
                    </li>
                </ul>

                <!-- Tabs Content -->
                <div class="tab-content border p-4 bg-light mt-3" id="myTabContent">
                    <!-- Depresi -->
                    <div class="tab-pane fade show active" id="depresi" role="tabpanel" aria-labelledby="depresi-tab">
                        <h5>Depresi: Lebih dari Sekadar Sedih Biasa</h5>
                        <p>Depresi adalah gangguan kesehatan mental yang umum dan serius yang ditandai dengan suasana hati
                            yang
                            rendah, kehilangan minat atau kesenangan, dan berbagai gejala fisik dan mental lainnya. Meskipun
                            kesedihan adalah emosi yang normal, depresi berbeda karena intensitas dan durasinya yang lebih
                            besar,
                            serta dampaknya yang signifikan pada kehidupan sehari-hari.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>

                    <!-- Kecemasan -->
                    <div class="tab-pane fade" id="kecemasan" role="tabpanel" aria-labelledby="kecemasan-tab">
                        <h5>Kecemasan</h5>
                        <p>Kecemasan adalah perasaan khawatir atau takut yang berlebihan terhadap situasi tertentu. Ini bisa
                            mempengaruhi kehidupan sehari-hari dan kesehatan mental secara keseluruhan.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>

                    <!-- Stres -->
                    <div class="tab-pane fade" id="stres" role="tabpanel" aria-labelledby="stres-tab">
                        <h5>Stres</h5>
                        <p>Stres adalah respon tubuh terhadap tekanan atau tuntutan dari luar. Jika tidak dikelola, stres
                            dapat
                            berdampak negatif pada kesehatan mental dan fisik.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>

                    <!-- Trauma -->
                    <div class="tab-pane fade" id="trauma" role="tabpanel" aria-labelledby="trauma-tab">
                        <h5>Trauma</h5>
                        <p>Trauma adalah respon emosional terhadap peristiwa yang sangat menegangkan atau menyakitkan, yang
                            dapat
                            meninggalkan dampak jangka panjang pada kesehatan mental.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>

                    <!-- Burnout -->
                    <div class="tab-pane fade" id="burnout" role="tabpanel" aria-labelledby="burnout-tab">
                        <h5>Burnout</h5>
                        <p>Burnout adalah kondisi kelelahan fisik, emosional, dan mental akibat stres berkepanjangan,
                            terutama yang
                            berkaitan dengan pekerjaan atau tanggung jawab sehari-hari.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>

                    <!-- Gangguan Mood -->
                    <div class="tab-pane fade" id="mood" role="tabpanel" aria-labelledby="mood-tab">
                        <h5>Gangguan Mood</h5>
                        <p>Gangguan mood adalah kondisi yang mempengaruhi suasana hati secara signifikan, seperti depresi,
                            bipolar,
                            dan gangguan suasana hati lainnya.</p>
                        <a href="#" class="btn btn-outline-dark mt-3"
                            style="color: #294587; border-color: #294587; background-color: transparent;"
                            onmouseover="this.style.backgroundColor='#294587'; this.style.color='white';"
                            onmouseout="this.style.backgroundColor='transparent'; this.style.color='#294587';">
                            Konsultasi Sekarang
                        </a>
                    </div>
                </div>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        @endsection
