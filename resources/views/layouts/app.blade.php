<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management - Laravel CRUD</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">
                <a href="/">Simple Inventory CRUD</a>
            </h1>
            
            <div class="flex items-center gap-4">
                @if (Auth::check())
                    <a href="{{ route('inventories.index') }}" class="text-gray-600 hover:text-gray-800">Inventory</a>
                    <span class="text-gray-600">Hi, {{ Auth::user()->name }}</span>
                    <form action="{{ route('logout') }}" method="POST" class="inline">
                        @csrf
                        <button 
                            type="submit"
                            class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 transition"
                        >
                            Logout
                        </button>
                    </form>
                @else
                    <a 
                        href="{{ route('login') }}" 
                        class="text-blue-500 hover:text-blue-700 font-bold"
                    >
                        Login
                    </a>
                    <a 
                        href="{{ route('register') }}" 
                        class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition"
                    >
                        Sign Up
                    </a>
                @endif
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2026 Inventory Management System. All rights reserved.</p>
    </footer>
</body>
</html>
