<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management System</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex flex-col min-h-screen">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-xl font-bold text-gray-800">
                Simple Inventory CRUD
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
        <div class="container mx-auto px-4 py-16">
            <div class="text-center mb-16">
                <h2 class="text-4xl font-bold text-gray-800 mb-4">Welcome to Inventory Management</h2>
                <p class="text-xl text-gray-600">Manage your inventory efficiently and effectively</p>
            </div>

            @if (Auth::check())
                <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Ready to manage your inventory?</h3>
                    <a 
                        href="{{ route('inventories.index') }}"
                        class="inline-block w-full text-center bg-blue-500 text-white font-bold py-3 rounded-lg hover:bg-blue-600 transition"
                    >
                        Go to Inventory
                    </a>
                </div>
            @else
                <div class="max-w-md mx-auto bg-white shadow-md rounded-lg p-8 text-center">
                    <h3 class="text-2xl font-bold mb-4 text-gray-800">Create an account to get started</h3>
                    <p class="text-gray-600 mb-6">Sign up now and start managing your inventory</p>
                    <a 
                        href="{{ route('register') }}"
                        class="inline-block w-full bg-green-500 text-white font-bold py-2 rounded-lg hover:bg-green-600 transition"
                    >
                        Sign Up
                    </a>
                </div>
            @endif
        </div>
    </main>

    <footer class="bg-gray-800 text-white text-center py-4 mt-auto">
        <p>&copy; 2026 Inventory Management System. All rights reserved.</p>
    </footer>
</body>
</html>
