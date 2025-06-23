   <head>
       <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <title>Login</title>
       <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
   </head>

   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
       integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
       crossorigin="anonymous" referrerpolicy="no-referrer" />
   <section class="vh-100">
       <div class="container-fluid h-custom">
           <div class="row d-flex justify-content-center align-items-center h-100">
               <div class="col-md-9 col-lg-6 col-xl-5">
                   <img src="/assets/login.svg"
                       class="img-fluid" alt="Sample image">
               </div>
               <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                   <form>
                       <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                           <h2 class="lead fw-bold mb-0 me-3">Selamat Datang Kembali!</h2>
                       </div>

                       <div class="divider d-flex align-items-center">
                           <p class="fw-normal my-3 me-3">Masuk untuk melanjutkan</p>

                       </div>

                       <!-- Email input -->
                       <div data-mdb-input-init class="form-outline mb-4">
                           <label class="form-label" for="email" autocorrect="off">Email</label>
                           <input type="email" id="email" class="form-control form-control-lg"
                               placeholder="Masukkan Email" autocorrect="off" autocomplete="off"/>
                       </div>

                       <!-- Password input -->
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


                       <div class="d-flex justify-content-between align-items-center">
                           <!-- Checkbox -->
                           <div class="form-check mb-0">
                               <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                               <label class="form-check-label" for="form2Example3">
                                   Remember me
                               </label>
                           </div>
                           <a href="#!" class="text-body">Lupa Password?</a>
                       </div>

                       <div class="text-center text-lg-start mt-4 pt-2">

                           <a class="btn mt-2 w-100" href="/"
                               style="color: white; background-color: #294587; border: 1px solid #294587;"
                               onmouseover="this.style.backgroundColor='transparent'; this.style.color='#294587';"
                               onmouseout="this.style.backgroundColor='#294587'; this.style.color='white';">
                               Login
                           </a>

                           <p class="small fw-bold mt-2 pt-1 mb-0">Belum memiliki akun? <a href="/register"
                                   class="link" style="color:#294587">Daftar</a></p>
                       </div>

                   </form>
               </div>
           </div>
       </div>
   </section>
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
   <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');
    * {
        font-family: 'Poppins', sans-serif;
    }
   </style>
