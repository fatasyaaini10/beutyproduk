<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-image: url('https://i.pinimg.com/originals/e6/1a/48/e61a48109a5139ffb9b4c5bc7c01bb9b.jpg');
            background-position: center;
        }

        @media (min-width: 1024px) {
            body {
                background-size: 100% 100vh;
            }
        }

        .judul-login {
            color: aliceblue;
        }
    </style>
</head>

<body class="flex items-center justify-center h-screen">
    <div class="p-12 bg-black mx-auto rounded-3xl w-96 shadow-lg">
        <div class="mb-7 text-center">
            <h2 class="text-2xl font-bold mb-4 text-center judul-login">LOGIN</h2>
            <form>
                <div class="mb-5">
                    <label for="NamaPengguna" class="block text-gray-600 mb-1">
                    <input type="text" id="NamaPengguna" name="NamaPengguna" class="w-full px-4 py-2 rounded border 
                    focus:outline-none focus:border-blue-400" placeholder="Nama Pengguna">
                </div>
                <div class="mb-5 relative">
                    <label for="KataSandi" class="block text-gray-600 mb-1">
                    <input type="password" id="KataSandi" name="KataSandi" class="w-full px-4 py-2 rounded border 
                    focus:outline-none focus:border-blue-400" placeholder="Kata Sandi">
                    <span class="absolute inset-y-0 right-3 flex items-center cursor-pointer">
                        <i class="fas fa-eye text-gray-500" id="togglePassword"></i>
                    </span>
                </div>
                <div class="flex items-center justify-between mb-5">
                    <div class="text-xs ml-auto">
                        <a href="lupa-kata-sandi" class="text-blue-500 hover:text-blue-500">Lupa Kata Sandi?</a>
                    </div>
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-200">Masuk</button>
            </form>
            <p class="text-center mt-4 text-white">Belum Punya akun? <a href="/DaftarAkun" class="text-blue-500 hover:underline">Daftar</a></p>
        </div>
    </div>
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#KataSandi');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
