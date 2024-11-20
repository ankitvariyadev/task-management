<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gradient-to-r from-teal-600 to-blue-800 h-screen flex items-center justify-center">

    <div class="bg-white w-full max-w-md rounded-lg shadow-lg p-8 space-y-6">
        <!-- Logo Section -->
        <div class="text-center mb-6">
            <img src="https://via.placeholder.com/50/00bcd4/ffffff?text=TM" alt="Logo" class="mx-auto rounded-full mb-4 w-16 h-16">
            <h2 class="text-3xl font-bold text-teal-600">Admin Panel Login</h2>
        </div>

        <!-- Login Form -->
        <form action="#" method="POST">
            <div class="space-y-4">
                <!-- Email Input -->
                <div>
                    <label for="email" class="block text-gray-700 font-medium">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Enter your email" required>
                </div>
                
                <!-- Password Input -->
                <div>
                    <label for="password" class="block text-gray-700 font-medium">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-teal-500 focus:border-transparent" placeholder="Enter your password" required>
                </div>

                <!-- Forgot Password Link -->
                <div class="text-right">
                    <a href="#" class="text-teal-500 hover:text-teal-600 text-sm">Forgot Password?</a>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full bg-teal-600 text-white py-2 rounded-md hover:bg-teal-700 transition duration-300">
                    <i class="fas fa-sign-in-alt mr-2"></i> Login
                </button>
            </div>
        </form>

        <!-- Footer -->
        <div class="text-center mt-6">
            <p class="text-gray-600 text-sm">Don't have an account? <a href="#" class="text-teal-500 hover:text-teal-600">Sign up</a></p>
        </div>
    </div>

</body>

</html>
