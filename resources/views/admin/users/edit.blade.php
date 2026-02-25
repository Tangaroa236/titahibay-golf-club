<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Edit User</h2>
            <p class="text-sm text-gray-600 mt-1">Update user information and role</p>
        </div>
    </x-slot>

    <div class="p-6">
        <div class="max-w-2xl bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <form action="{{ route('admin.users.update', $user) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name', $user->name) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('name') border-red-500 @enderror" 
                        required>
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email Address</label>
                    <input type="email" name="email" id="email" value="{{ old('email', $user->email) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('email') border-red-500 @enderror" 
                        required>
                    @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">New Password</label>
                    <input type="password" name="password" id="password" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('password') border-red-500 @enderror">
                    @error('password')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <p class="text-xs text-gray-500 mt-1">Leave blank to keep current password</p>
                </div>

                <div class="mb-6">
                    <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Role & Permissions</label>
                    <select name="role" id="role" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('role') border-red-500 @enderror" 
                        required>
                        <option value="admin" {{ old('role', $user->role) == 'admin' ? 'selected' : '' }}>Admin - Full System Access</option>
                        <option value="board" {{ old('role', $user->role) == 'board' ? 'selected' : '' }}>Board Member - Strategic & Financial Oversight</option>
                        <option value="administrator" {{ old('role', $user->role) == 'administrator' ? 'selected' : '' }}>Administrator - Financial Planning & Budgets</option>
                        <option value="course_management" {{ old('role', $user->role) == 'course_management' ? 'selected' : '' }}>Course Management - Maintenance & Updates</option>
                        <option value="catering" {{ old('role', $user->role) == 'catering' ? 'selected' : '' }}>Catering - Event & Menu Management</option>
                        <option value="member" {{ old('role', $user->role) == 'member' ? 'selected' : '' }}>Member - Tee Times & Benefits</option>
                        <option value="guest" {{ old('role', $user->role) == 'guest' ? 'selected' : '' }}>Guest - View Only Access</option>
                    </select>
                    @error('role')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex items-center justify-between pt-4 border-t">
                    <a href="{{ route('admin.users.index') }}" class="text-gray-600 hover:text-gray-800 font-medium">Cancel</a>
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-6 rounded-lg">
                        Update User
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>