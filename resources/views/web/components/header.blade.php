<header>
  <div class="container">
    <h1 class="logo">TemanNgobrol</h1>

    <nav>
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Layanan</a></li>
        <li><a href="#">Psikolog</a></li>
        <li><a href="#">Tentang Kami</a></li>
      </ul>
    </nav>
  </div>
</header>

<style>
  @import url('https://fonts.googleapis.com/css?family=Work+Sans:400,600');

  * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }


  .container {
    width: 100%;
    font-family: 'Work Sans', sans-serif;
    font-weight: 800;
    display: flex;
    align-items: center;
    padding: 0 20px;
  }

  header {
    background: #55d6aa;
    width: 100%;
  }

  .logo {

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
  }

  nav a {
    color: #444;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 14px;
    padding: 25px 0;
    display: inline-block;
  }

  nav a:hover {
    color: #000;
  }

  nav a::before {
    content: '';
    display: block;
    height: 5px;
    background-color: #444;
    position: absolute;
    top: 0;
    width: 0%;
    transition: all ease-in-out 250ms;
  }

  nav a:hover::before {
    width: 100%;
  }
</style>
