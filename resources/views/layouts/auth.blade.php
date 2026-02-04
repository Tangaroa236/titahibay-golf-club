<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Titahi Bay Golf Club</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }
        .sidebar-link {
            transition: all 0.2s ease;
        }
        .sidebar-link:hover {
            background-color: rgba(45, 95, 63, 0.1);
            border-left: 3px solid #2d5f3f;
        }
        .sidebar-link.active {
            background-color: #2d5f3f;
            color: white;
            border-left: 3px solid #1a4d2e;
        }
    </style>
</head>
<body class="bg-gray-50">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <aside class="w-64 bg-gray-900 text-gray-100 flex flex-col">
            <!-- Logo/Header -->
            <div class="p-6 border-b border-gray-800">
                <h1 class="text-2xl font-bold text-white">Admin Panel</h1>
                <p class="text-sm text-gray-400 mt-1">{{ Auth::user()->name }}</p>
                <span class="inline-block mt-2 px-2 py-1 bg-green-600 text-white text-xs rounded">{{ ucfirst(Auth::user()->role) }}</span>
            </div>

            <!-- Navigation -->
            <nav class="flex-1 overflow-y-auto py-4">
                <div class="px-4 mb-4">
                    <a href="{{ route('dashboard') }}" class="sidebar-link flex items-center px-4 py-3 rounded {{ request()->routeIs('dashboard') ? 'active' : 'text-gray-300' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                        Dashboard
                    </a>
                </div>

                <!-- Content Section -->
                <div class="px-4 mb-2">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Content</p>
                    
                    <a href="{{ route('admin.posts.index') }}" class="sidebar-link flex items-center px-4 py-3 rounded mb-1 {{ request()->routeIs('admin.posts.*') ? 'active' : 'text-gray-300' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"></path>
                        </svg>
                        News Posts
                    </a>

                    <a href="{{ route('admin.users.index') }}" class="sidebar-link flex items-center px-4 py-3 rounded mb-1 {{ request()->routeIs('admin.users.*') ? 'active' : 'text-gray-300' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Users
                    </a>

                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded mb-1 text-gray-300">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        Events
                        <span class="ml-auto text-xs bg-gray-700 px-2 py-1 rounded">Soon</span>
                    </a>

                    <a href="#" class="sidebar-link flex items-center px-4 py-3 rounded mb-1 text-gray-300">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                        Members
                        <span class="ml-auto text-xs bg-gray-700 px-2 py-1 rounded">Soon</span>
                    </a>
                </div>

                <!-- Settings Section -->
                <div class="px-4 mb-2 mt-6">
                    <p class="text-xs font-semibold text-gray-500 uppercase tracking-wider mb-2">Settings</p>
                    
                    <a href="{{ route('profile.edit') }}" class="sidebar-link flex items-center px-4 py-3 rounded mb-1 {{ request()->routeIs('profile.*') ? 'active' : 'text-gray-300' }}">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                        </svg>
                        Profile
                    </a>
                </div>
            </nav>

            <!-- Bottom Actions -->
            <div class="p-4 border-t border-gray-800">
                <a href="/" target="_blank" class="flex items-center px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-800 rounded mb-2">
                    <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
                    </svg>
                    View Site
                </a>
                
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="flex items-center w-full px-4 py-2 text-gray-300 hover:text-white hover:bg-gray-800 rounded">
                        <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
                        </svg>
                        Logout
                    </button>
                </form>
            </div>
        </aside>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Top Bar -->
            <header class="bg-white shadow-sm border-b">
                <div class="flex items-center justify-between px-6 py-4">
                    <div>
                        @isset($header)
                            {{ $header }}
                        @endisset
                    </div>
                    <div class="flex items-center space-x-4">
                        <span class="text-sm text-gray-600">{{ now()->format('l, F j, Y') }}</span>
                    </div>
                </div>
            </header>

            <!-- Main Content Area -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>