<header>
    <div class="header">
        <h2 class="logo">TemanNgobrol</h2>

        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/layanan">Layanan</a></li>
                <li><a href="/psikolog">Psikolog</a></li>
                <li><a href="/tentangkami">Tentang Kami</a></li>
            </ul>
        </nav>

        <div class="auth-buttons">
            <a href="/login" class="btn-login">Masuk</a>
            <a href="/register" class="btn-register">Daftar</a>
        </div>
    </div>
</header>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        padding-top: 70px; /* agar konten tidak ketutupan header */
        font-family: 'Poppins', sans-serif;
    }

    header {
        background: #294587;
        width: 100%;
        position: fixed;
        top: 0;
        height: 70px;
        z-index: 999;
        display: flex;
        align-items: center;
    }

    .header {
        width: 100%;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 30px;
    }

    .logo {
        color: #ffffff;
        font-weight: 700;
    }

    nav ul {
        display: flex;
        list-style: none;
        align-items: center; 
        height: 70px;
        padding-right: 100px;
    }

    nav li {
        margin-left: 30px;
        position: relative;
    }

    nav a {
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 14px;
        padding: 10px 0;
        display: inline-block;
        line-height: 1;
    }

    nav a:hover {
        color: #c8c5c5;
    }

    nav a::before {
        content: '';
        display: block;
        height: 5px;
        background-color: #ffffff;
        position: absolute;
        top: 0;
        width: 0%;
        transition: all ease-in-out 250ms;
    }

    nav a:hover::before {
        width: 100%;
    }

    .auth-buttons {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .btn-login,
    .btn-register {
        text-decoration: none;
        padding: 6px 16px;
        border-radius: 4px;
        font-size: 14px;
        font-weight: 600;
        transition: 0.3s;
    }

    .btn-login {
        background-color: white;
        color: #294587;
        border: 1px solid white;
    }

    .btn-login:hover {
        background-color: #294587;
        color: white;
        border: 1px solid white;
    }

    .btn-register {
        background-color: transparent;
        color: white;
        border: 1px solid white;
    }

    .btn-register:hover {
        background-color: white;
        color: #294587;
    }
</style>
