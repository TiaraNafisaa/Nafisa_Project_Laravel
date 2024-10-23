<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Delivery Service</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white text-gray-900">

    <!-- Header -->
    <header class="bg-orange-500 py-4">
        <nav class="container mx-auto flex justify-between items-center">
            <div class="logo flex items-center">
                <img src="ASSETS/Logo.png" alt="Logo" class="h-10 mr-2">
            </div>
            <ul class="nav-links flex space-x-6 text-white font-semibold">
                <li><a href="#" class="hover:text-gray-300">About Us</a></li>
                <li><a href="#" class="hover:text-gray-300">Services</a></li>
                <li><a href="#" class="hover:text-gray-300">Menu</a></li>
                <li><a href="#" class="hover:text-gray-300">Contact</a></li>
                <li><a href="#" class="hover:text-gray-300">Rating</a></li>
            </ul>
            <div class="user-icon">
                <img src="user-icon.png" alt="User" class="h-8">
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero flex flex-col md:flex-row items-center justify-between py-12 px-8 bg-white">
        <!-- Hero Content -->
        <div class="hero-content max-w-lg text-center md:text-left md:ml-10"> 
            <h1 class="text-4xl font-bold text-black mb-4">Be The Fastest In Delivering Your Food</h1>
            <p class="text-lg text-gray-700 mb-8">Pesan dan gunakan fitur kami sekarang juga !!</p> 

            <!-- Button Positioned Centrally -->
            <div class="flex justify-center md:justify-start mb-10">
                <a href="#" class="bg-orange-500 hover:bg-yellow-600 text-white font-bold py-3 px-8 rounded-full">Get Started</a>
            </div>

            <!-- Customer Review Moved Below -->
            <div class="customer-review flex items-center justify-center md:justify-start mt-10">
                <img src="ASSETS/Customer.png" alt="Customer" class="w-12 h-12 rounded-full">
                <div class="ml-4">
                    <p class="text-black font-bold">Our Happy Customers</p>
                    <span class="text-orange-500 flex items-center">5.0 <img src="ASSETS/Bintang.png" alt="Rating" class="ml-2 h-5"></span>
                </div>
            </div>
        </div>

        <!-- Hero Image -->
        <div class="hero-image mt-6 md:mt-0 md:ml-10"> 
            <img src="ASSETS/Main.png" alt="Model" class="w-full h-auto max-w-xs md:max-w-sm"> 
        </div>
    </section>

</body>
</html>