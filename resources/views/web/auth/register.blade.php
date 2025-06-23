<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">

    <!-- Bootstrap & Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<section class="vh-100">
    <div class="container-fluid h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">

            <!-- Form Register - Kiri -->
            <div class="col-md-6 px-5">
                <form>
                    <h2 class="mb-3 fw-bold text-dark">Bergabunglah dengan TemanNgobrol dan mulai perjalananmu!</h2>

                    <!-- Username -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerUsername">Username</label>
                        <input type="text" id="registerUsername" class="form-control form-control-lg"
                            placeholder="Masukkan Username" />
                    </div>

                    <!-- Email -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="registerEmail">Email</label>
                        <input type="email" id="registerEmail" class="form-control form-control-lg"
                            placeholder="Masukkan Email" />
                    </div>

                    <!-- Password -->
                   <div class="form-outline mb-3 position-relative">
                           <label class="form-label" for="password">Password</label>
                           <input type="password" id="password" class="form-control form-control-lg pr-5"
                               placeholder="Masukkan Password" autocorrect="new-password" autocomplete="off"/>

                           <!-- Icon -->
                           <span id="password-toggle" onclick="togglePasswordVisibility()"
                               style="position: absolute; top: 70%; right: 15px; transform: translateY(-50%); cursor: pointer;">
                               <i id="password-icon" class="far fa-eye text-muted"></i>
                           </span>
                       </div>

                    <!-- Tombol -->
                    <a  class="btn w-100 mb-3" href="/"
                        style="color: white; background-color: #294587; border: 1px solid #294587;"
                        onmouseover="this.style.backgroundColor='transparent'; this.style.color='#294587';"
                        onmouseout="this.style.backgroundColor='#294587'; this.style.color='white';">
                        Daftar
                    </a>

                    <p class="text-center">Sudah punya akun? <a href="/login" style="color: #294587;">Masuk di sini</a></p>
                </form>
            </div>

            <!-- Gambar - Kanan -->
            <div class="col-md-6 d-none d-md-block">
                <img src="/assets/daftar.svg" style="width: 80%"
                    class="img-fluid" alt="Gambar Register">
            </div>
        </div>
    </div>
</section>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    * {
        font-family: 'Poppins', sans-serif;
    }
   </style>
    <script>
       function togglePasswordVisibility() {
           const passwordField = document.getElementById("password");
           const passwordIcon = document.getElementById("password-icon");

           if (passwordField.type === "password") {
               passwordField.type = "text";
               passwordIcon.className = "far fa-eye-slash text-gray-500";
           } else {
               passwordField.type = "password";
               passwordIcon.className = "far fa-eye text-gray-500";
           }
       }

       function closeAlert(alertId) {
           var alert = document.getElementById(alertId);
           if (alert) {
               alert.style.display = 'none';
           }
       }
   </script>
