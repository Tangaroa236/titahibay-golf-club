<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <div>
                <h2 class="text-2xl font-bold text-gray-800">User Management</h2>
                <p class="text-sm text-gray-600 mt-1">Manage user accounts and permissions</p>
            </div>
            <a href="{{ route('admin.users.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                Add New User
            </a>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200">
            @if(session('success'))
                <div class="mx-6 mt-6 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mx-6 mt-6 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            <div class="p-6">
                @if($users->count() > 0)
                    <table class="min-w-full">
                        <thead>
                            <tr class="border-b bg-gray-50">
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Role</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Created</th>
                                <th class="px-6 py-3 text-left text-xs font-semibold text-gray-700 uppercase">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200">
                            @foreach($users as $user)
                                <tr class="hover:bg-gray-50">
                                    <td class="px-6 py-4">
                                        <div class="font-medium text-gray-900">{{ $user->name }}</div>
                                    </td>
                                    <td class="px-6 py-4 text-gray-600">{{ $user->email }}</td>
                                    <td class="px-6 py-4">
                                        @if($user->role === 'admin')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-red-100 text-red-800">
                                                Admin
                                            </span>
                                        @elseif($user->role === 'board')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-800">
                                                Board Member
                                            </span>
                                        @elseif($user->role === 'administrator')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-indigo-100 text-indigo-800">
                                                Administrator
                                            </span>
                                        @elseif($user->role === 'course_management')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-800">
                                                Course Management
                                            </span>
                                        @elseif($user->role === 'catering')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-orange-100 text-orange-800">
                                                Catering
                                            </span>
                                        @elseif($user->role === 'member')
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-800">
                                                Member
                                            </span>
                                        @else
                                            <span class="px-3 py-1 text-xs font-semibold rounded-full bg-gray-100 text-gray-800">
                                                Guest
                                            </span>
                                        @endif
                                    </td>
                                    <td class="px-6 py-4 text-gray-600 text-sm">{{ $user->created_at->format('M d, Y') }}</td>
                                    <td class="px-6 py-4 text-sm">
                                        <a href="{{ route('admin.users.edit', $user) }}" class="text-blue-600 hover:text-blue-900 mr-3 font-medium">Edit</a>
                                        @if($user->id !== auth()->id())
                                            <form action="{{ route('admin.users.destroy', $user) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600 hover:text-red-900 font-medium" onclick="return confirm('Are you sure you want to delete this user?')">Delete</button>
                                            </form>
                                        @else
                                            <span class="text-gray-400">Current User</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    
                    <div class="mt-4">
                        {{ $users->links() }}
                    </div>
                @else
                    <p class="text-gray-500 text-center py-8">No users found.</p>
                @endif
            </div>
        </div>

        <!-- Role Descriptions -->
        <div class="mt-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Role Permissions</h3>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Admin -->
                <div class="bg-red-50 border border-red-200 rounded-lg p-4">
                    <h4 class="font-semibold text-red-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-red-500 rounded-full mr-2"></span>
                        Admin
                    </h4>
                    <ul class="text-sm text-red-800 space-y-1">
                        <li>• Full system access</li>
                        <li>• Manage all users</li>
                        <li>• All content control</li>
                        <li>• System settings</li>
                    </ul>
                </div>

                <!-- Board Member -->
                <div class="bg-purple-50 border border-purple-200 rounded-lg p-4">
                    <h4 class="font-semibold text-purple-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-purple-500 rounded-full mr-2"></span>
                        Board Member
                    </h4>
                    <ul class="text-sm text-purple-800 space-y-1">
                        <li>• View all reports</li>
                        <li>• Strategic decisions</li>
                        <li>• Financial oversight</li>
                        <li>• Policy management</li>
                    </ul>
                </div>

                <!-- Administrator -->
                <div class="bg-indigo-50 border border-indigo-200 rounded-lg p-4">
                    <h4 class="font-semibold text-indigo-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-indigo-500 rounded-full mr-2"></span>
                        Administrator
                    </h4>
                    <ul class="text-sm text-indigo-800 space-y-1">
                        <li>• Financial planning</li>
                        <li>• Budget management</li>
                        <li>• Member fees</li>
                        <li>• Financial reports</li>
                    </ul>
                </div>

                <!-- Course Management -->
                <div class="bg-green-50 border border-green-200 rounded-lg p-4">
                    <h4 class="font-semibold text-green-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                        Course Management
                    </h4>
                    <ul class="text-sm text-green-800 space-y-1">
                        <li>• Update course conditions</li>
                        <li>• Maintenance schedules</li>
                        <li>• Green keeping reports</li>
                        <li>• Course notifications</li>
                    </ul>
                </div>

                <!-- Catering -->
                <div class="bg-orange-50 border border-orange-200 rounded-lg p-4">
                    <h4 class="font-semibold text-orange-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-orange-500 rounded-full mr-2"></span>
                        Catering
                    </h4>
                    <ul class="text-sm text-orange-800 space-y-1">
                        <li>• Event catering</li>
                        <li>• Menu management</li>
                        <li>• Booking requests</li>
                        <li>• Food services</li>
                    </ul>
                </div>

                <!-- Member -->
                <div class="bg-blue-50 border border-blue-200 rounded-lg p-4">
                    <h4 class="font-semibold text-blue-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-blue-500 rounded-full mr-2"></span>
                        Member
                    </h4>
                    <ul class="text-sm text-blue-800 space-y-1">
                        <li>• View membership fees</li>
                        <li>• Check credits</li>
                        <li>• Book tee times</li>
                        <li>• Member benefits</li>
                    </ul>
                </div>

                <!-- Guest -->
                <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
                    <h4 class="font-semibold text-gray-900 mb-2 flex items-center">
                        <span class="w-2 h-2 bg-gray-500 rounded-full mr-2"></span>
                        Guest
                    </h4>
                    <ul class="text-sm text-gray-800 space-y-1">
                        <li>• View only access</li>
                        <li>• No editing rights</li>
                        <li>• Read course info</li>
                        <li>• Limited features</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>