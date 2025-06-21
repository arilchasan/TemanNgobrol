<header>
  <div class="header">
    <h2 class="logo">TemanNgobrol</h2>

    <nav>
      <ul>

        <li><a href="/">Home</a></li>
        <li><a href="/layanan">Layanan</a></li>
        <li><a href="/psikolog">Psikolog</a></li>
        <li><a href="#">Tentang Kami</a></li>

      </ul>
    </nav>
  </div>
</header>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  .header {
    width: 100%;
    font-family: 'Poppins', sans-serif;
    font-weight: 800;
    display: flex;
    align-items: center;
  }

  header {
    background: #294587;
    width: 100%;
    position: fixed;
    top: 0;
    height: 70px;
    z-index: 999;
  }

  .logo {
    color: #ffffff;

    padding: 10px 20px;
  }

  nav ul {
    display: flex;
    float: left;
    list-style: none;
  }

  nav li {
    margin-left: 50px;
    position: relative;
    float: left;
    display: block;
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
</style>
