@extends('web.components.app')
 @section('content')
    <div class="contain">
        <h1>Selamat Datang di TemanNgobrol</h1>
        <p>Platform untuk berbagi cerita dan pengalaman.</p>

        <div class="features">
            <h2>Fitur Unggulan</h2>
            <ul>
                <li>Berbagi cerita dengan mudah</li>
                <li>Interaksi dengan pengguna lain</li>
                <li>Komunitas yang ramah dan suportif</li>
            </ul>
        </div>

        <div class="cta">
            <a href="" class="btn btn-primary">Bergabung Sekarang</a>
        </div>
    </div>
    <style>
        .contain {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            text-align: center;
        }

        .features {
            margin-top: 20px;
        }

        .features ul {
            list-style-type: none;
            padding: 0;
        }

        .features li {
            margin: 10px 0;
        }

        .cta {
            margin-top: 30px;
        }

        .btn-primary {
            background-color: #55d6aa;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn-primary:hover {
            background-color: #45c69a;
        }
    </style>
@endsection

