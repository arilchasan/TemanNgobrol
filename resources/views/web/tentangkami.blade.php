@extends('web.components.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="content py-5">
    <!-- Tentang Kami -->
    <h1 class="text-center mb-4 fw-bold" style="color: #294587;">Tentang Kami "Teman Ngobrol"</h1>
    <main class="mb-5">
        <p>
            TemanNgobrol hadir sebagai ruang aman dan nyaman bagi siapa pun yang ingin merawat kesehatan mentalnya.
            Kami percaya bahwa setiap orang berhak untuk didengar, dimengerti, dan didampingi—tanpa stigma dan
            tanpa harus merasa sendirian.
        </p>
        <br>
        <p>
            Melalui layanan konseling online bersama psikolog profesional dan berlisensi,
            kami berkomitmen untuk memberikan dukungan yang mudah diakses, terjangkau, dan penuh empati.
            Baik itu untuk mengatasi stres, kecemasan, konflik, atau sekadar butuh teman cerita,
            TemanNgobrol siap menemani setiap langkahmu.
        </p>
        <br>
        <p>
            Kami menggabungkan pendekatan ilmiah dengan sentuhan manusiawi, karena kami tahu bahwa
            berbicara dengan seseorang yang peduli bisa menjadi awal dari perubahan besar.
        </p>
    </main>

    <!-- Visi Misi -->
    <h1 class="text-center mb-4 fw-bold" style="color: #294587;">Visi dan Misi "Teman Ngobrol"</h1>
    <section class="d-flex justify-content-center gap-4 flex-wrap">
        <div class="box p-4 shadow-sm rounded" style="border: 1px solid #294587; width: 400px;">
            <h3 class="text-center mb-3" style="color: #294587;">Visi</h3>
            <p class="text-justify">
                Menjadi platform terpercaya dan inklusif dalam mendampingi perjalanan kesehatan mental
                setiap individu, dengan menyediakan ruang aman untuk bercerita, bertumbuh, dan pulih.
            </p>
        </div>

        <div class="box p-4 shadow-sm rounded" style="border: 1px solid #294587; width: 400px;">
            <h3 class="text-center mb-3" style="color: #294587;">Misi</h3>
            <p class="text-justify">
                Menyediakan akses mudah dan aman ke layanan konseling profesional, mendampingi individu dalam menghadapi
                tantangan psikologis, serta membangun kesadaran dan menghapus stigma seputar kesehatan mental di masyarakat.
            </p>
        </div>
    </section>
</div>

<!-- Styling -->
<style>
    .content {
        max-width: 1000px;
        margin: 0 auto;
    }

    main p {
        text-align: justify;
    }

    .box p {
        text-align: justify;
    }

    @media (max-width: 768px) {
        .box {
            width: 100% !important;
        }
    }
</style>
@endsection
