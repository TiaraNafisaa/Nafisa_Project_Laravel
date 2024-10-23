<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Pattaya&display=swap');
        .font-pattaya {
            font-family: 'Pattaya', sans-serif;
        }
    </style>
</head>
<body class="bg-cover bg-center h-screen" style="background-image: url('ASSETS/Cooking.jpg');">
    <!-- Container Login -->
    <div class="flex items-center justify-center h-full">
        <!-- Kotak Login -->
        <div class="bg-black bg-opacity-80 text-center rounded-lg p-10 shadow-lg max-w-md w-full mx-4">
            <!-- Teks Login -->
            <h1 class="text-4xl font-bold text-orange-500 mb-8 font-pattaya">Login</h1>

            <!-- Form Login -->
            <form id="loginForm" class="space-y-6">
                <div>
                    <label for="username" class="block text-lg text-orange-500 mb-2">Username :</label>
                    <input type="text" name="username" id="username" class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <div>
                    <label for="password" class="block text-lg text-orange-500 mb-2">Password :</label>
                    <input type="password" name="password" id="password" class="w-full p-3 text-black rounded-lg focus:outline-none focus:ring-2 focus:ring-yellow-400">
                </div>
                <button type="submit" class="w-full bg-orange-500 hover:bg-orange-500 text-black font-bold py-3 px-6 rounded-lg transition duration-300">
                    LOGIN
                </button>
            </form>
        </div>
    </div>

    <script src="ASSETS/js/script.js"></script>
</body>
</html>
