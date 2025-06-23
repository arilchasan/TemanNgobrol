<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Dashboard TemanNgobrol</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="icon" type="image/x-icon" href="/assets/logo.png" />
</head>

<body class="bg-gray-50 min-h-screen flex items-center justify-center">

    <div class="w-full max-w-md space-y-8 p-6 bg-white rounded-lg shadow-lg">
        <div class="text-center">
            <img src="/assets/logo-admin.png" alt="Logo" class="mx-auto h-20 mb-4">
            <h2 class="text-2xl font-bold text-gray-900">Login Dashboard TemanNgobrol</h2>
        </div>

        @if (session()->has('error'))
        <div class="w-1/1 relative py-3 pl-4 pr-10 leading-normal text-red-700 bg-red-100 rounded-lg mt-5 mb-2 mr-3"
            style="height: 50px;" role="alert" id="error-alert">
            <p>{{ session('error') }}</p>
            <span class="absolute inset-y-0 right-0 flex items-center mr-4" onclick="closeAlert('error-alert')">
                <svg class="w-4 h-4 fill-current" role="button" viewBox="0 0 20 20">
                    <path
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd" fill-rule="evenodd"></path>
                </svg>
            </span>
        </div>
    @endif

        <form action="/auth/login-load" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input id="username" name="username" type="text" required autocomplete="on"
                    class="mt-1 block w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200 text-sm">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <div class="relative mt-1">
                    <input id="password" name="password" type="password" required
                        class="block w-full rounded-md border border-gray-300 p-2 focus:border-blue-500 focus:ring focus:ring-blue-200 text-sm">
                    <span id="password-toggle" class="absolute inset-y-0 right-3 flex items-center cursor-pointer"
                        onclick="togglePasswordVisibility()">
                        <i id="password-icon" class="far fa-eye text-gray-500"></i>
                    </span>
                </div>
            </div>

            <button type="submit"
                class="w-full flex justify-center border font-semibold py-2 rounded-md transition
           text-white bg-[#294587] border-[#294587]
           hover:bg-transparent hover:text-[#294587]">
                Login
            </button>

        </form>
    </div>

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

</body>

</html>
