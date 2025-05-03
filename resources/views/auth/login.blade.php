<!-- resources/views/auth/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Web Ticketing</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        /* Background gambar untuk seluruh halaman */
        body {
            background-image: url('{{ asset('images/bg-web.png') }}');
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>
<body>

    <!-- Form Login -->
    <div class="w-full max-w-sm p-8 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        <form method="POST" action="/login" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 text-gray-600">Email</label>
                <input type="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan email kamu" required>
            </div>
            <div>
                <label class="block mb-1 text-gray-600">Password</label>
                <input type="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Masukkan password kamu" required>
            </div>
            <div>
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded py-2 transition duration-200">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>
