@extends('web.components.app')
@section('content')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <div class='container p-5 my-5 overflow-x: hidden;'>
        <h2 class="text-center fw-bold">Tentang Kami "Teman Bicara"</h2>
        <main class="pb-5">
            <p>
                TemanNgobrol hadir sebagai ruang aman dan nyaman bagi siapa pun yang ingin merawat kesehatan mentalnya.
                Kami percaya bahwa setiap orang berhak untuk didengar, dimengerti, dan didampingi—tanpa stigma dan tanpa
                harus merasa sendirian.
            </p>

            <p>
                Melalui layanan konseling online bersama psikolog profesional dan berlisensi, kami berkomitmen untuk
                memberikan dukungan yang mudah diakses, terjangkau, dan penuh empati. Baik itu untuk mengatasi stres,
                kecemasan, konflik, atau sekadar butuh teman cerita, TemanNgobrol siap menemani setiap langkahmu.
            </p>

            <p>
                Kami menggabungkan pendekatan ilmiah dengan sentuhan manusiawi, karena kami tahu bahwa berbicara dengan
                seseorang yang peduli bisa menjadi awal dari perubahan besar.
            </p>

            <p>
                Di TemanNgobrol, kamu tidak hanya bicara—kamu dipahami.
            </p>
        </main>
        {{-- Box Visi and Misi --}}

        <div>
            <h2 class="text-center pb-3 fw-bold">Visi dan Misi "Teman Bicara"</h2>
            {{-- box area --}}
            <div class="container text-center row">
                {{-- left (Visi) --}}
                <div class="col border bg-light py-2 mx-4 shadow-sm">
                    <p>Visi</p>
                    <p>Menjadi platform terpercaya dan inklusif dalam
                        mendampingi perjalanan kesehatan mental setiap individu,
                        dengan menyediakan ruang aman untuk bercerita, bertumbuh, dan pulih.
                    </p>
                </div>
                {{-- right (Misi) --}}
                <div class="col border bg-light py-2 mx-4 shadow-sm">
                    <p>Misi</p>
                    <p>Menyediakan akses mudah dan aman ke
                        layanan konseling profesional, mendampingi individu dalam menghadapi
                        tantangan psikologis, serta membangun kesadaran dan menghapus stigma 
                        seputar kesehatan mental di masyarakat.
                    </p>
                </div>
            </div>
        </div>

        {{-- Rating --}}
        <div class="pt-5 fs-4">
            <p>Terimakasih sudah mempercayai kami</p>
            <p>kami saat ini</p>
            <p>karena dukungan anda</p>
        </div>

        {{-- box survey --}}
        <div class="container row text-center mb-0">
            <div class="col border bg-light py-2 mx-4 shadow-sm">
                <p>Jumlah Psikolog</p>
                <p><strong>23</strong></p>
            </div>
            <div class="col border bg-light py-2 mx-4 shadow-sm">
                <p>Pengunjung</p>
                <p><strong>1.000+</strong></p>
            </div>
            <div class="col border bg-light py-2 mx-4 shadow-sm">
                <p>Jumlah Orang Terbantu</p>
                <p><strong>2.432+</strong></p>
            </div>
        </div>

    </div>
@endsection
