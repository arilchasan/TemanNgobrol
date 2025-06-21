@extends('web.components.app')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
    .panduan-container {
        padding: 40px 20px 0% 20px;
    }

    .panduan-title {
        text-align: center;
        margin-bottom: 40px;
        font-weight: bold;
        color: #294587;
    }

    .panduan-content {
        display: flex;
        justify-content: center;
        align-items: flex-start;
        gap: 50px;
        position: relative;
    }

    .panduan-content::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        width: 2px;
        background-color: black;
        left: 50%;
        transform: translateX(-50%);
    }

    .panduan-column {
        flex: 1;
        max-width: 400px;
    }

    .panduan-list {
        padding-left: 20px;
    }

    .panduan-list li {
        margin-bottom: 50px;
        text-align: justify;
    }

    .right-column {
        margin-top: 60px;
    }

    @media (max-width: 768px) {
        .panduan-content {
            flex-direction: column;
        }

        .panduan-content::before {
            display: none;
        }
    }
</style>

<div class="container panduan-container">
    <h2 class="panduan-title">Panduan Konseling TemanNgobrol</h2>

    <div class="panduan-content">
        <div class="panduan-column">
            <ol class="panduan-list" start="1">
                <li>
                    Jangan takut untuk <strong>#AngkatBicara</strong>.<br>
                    Semua konselor kita menyediakan safe space atau ruang yang aman untuk kamu bisa bicara dari hati — tanpa judgment, tanpa dipotong, dan tanpa tekanan.
                </li>
                <li>
                    Tulis semua masalah, ketakutan, dan kekhawatiran.<br>
                    Tuliskan semua hal yang ingin kamu ceritakan ke Konselor sebelum mulai konseling. Dengan begitu, sesi konseling bisa lebih efektif.
                </li>
            </ol>
        </div>
        <div class="panduan-column">
            <ol class="panduan-list right-column" start="3">
                <li>
                    Hindari sikap denial.<br>
                    Selalu sadari bahwa meskipun Konselor tidak selalu benar, mereka kemungkinan besar tahu sesuatu yang kamu nggak tau — sesuatu yang bisa membantumu.
                </li>
                <li>
                    Catat semua tugas, saran, dan latihan-latihan yang diberikan.<br>
                    Pastikan kamu berkomitmen untuk mengerjakan itu semua supaya proses konseling kamu benar-benar bermanfaat.
                </li>
            </ol>
        </div>
    </div>
</div>
@endsection
