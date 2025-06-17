@extends('web.components.app')
@section('content')
        <div class="content">
            <h1>Tentang Kami "Teman Ngobrol"</h1>
            <main>
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

            <h1>Visi dan Misi "Teman Ngobrol"</h1>
            <section>
                <div class="box-left">
                    <h3>Visi</h3>
                    <p>
                        Menjadi platform terpercaya dan inklusif dalam mendampingi perjalanan kesehatan mental 
                        setiap individu, dengan menyediakan ruang aman untuk bercerita, bertumbuh, dan pulih.    
                    </p>    
                </div>    

                <div class="box-right">
                    <h3>Misi</h3>
                    <p>
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
                padding: 20px;
                /* text-align: center; */
            }

            h1 {
                margin-bottom: 5px;
            }

            main {
                margin-bottom: 10px;
            }

            section {
                display: grid;
                row-gap: 50px;
            }

            section .box-left {
                border: 1px solid black;
                max-width: 300px;
            }

            section .box-right {
                border: 1px solid black;
                max-width: 300px;
            }
        </style>
@endsection