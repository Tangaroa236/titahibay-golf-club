<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Edit My Profile</h2>
            <p class="text-sm text-gray-600 mt-1">Update your profile information</p>
        </div>
    </x-slot>

    <div class="p-6 max-w-2xl mx-auto">
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6">
            <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Profile Photo --}}
                <div class="mb-6 text-center">
                    <div class="w-24 h-24 rounded-full overflow-hidden bg-green-100 flex items-center justify-center mx-auto mb-3">
                        @if(auth()->user()->profile_photo)
                            <img src="{{ Storage::url(auth()->user()->profile_photo) }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-4xl font-bold text-green-600">{{ strtoupper(substr(auth()->user()->name, 0, 1)) }}</span>
                        @endif
                    </div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Profile Photo</label>
                    <input type="file" name="profile_photo" accept="image/*" class="text-sm text-gray-500">
                    @error('profile_photo')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Name --}}
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Full Name</label>
                    <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('name') border-red-500 @enderror">
                    @error('name')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Bio --}}
                <div class="mb-4">
                    <label class="block text-sm font-semibold text-gray-700 mb-2">Bio</label>
                    <textarea name="bio" rows="3" placeholder="Tell other members about yourself..."
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none @error('bio') border-red-500 @enderror">{{ old('bio', auth()->user()->bio) }}</textarea>
                    @error('bio')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Golf Stats --}}
                <div class="grid grid-cols-3 gap-4 mb-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Handicap</label>
                        <input type="number" name="handicap" step="0.1" min="0" max="54"
                            value="{{ old('handicap', auth()->user()->handicap) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('handicap') border-red-500 @enderror">
                        @error('handicap')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Best Score</label>
                        <input type="number" name="best_score" min="1"
                            value="{{ old('best_score', auth()->user()->best_score) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('best_score') border-red-500 @enderror">
                        @error('best_score')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Games Played</label>
                        <input type="number" name="games_played" min="0"
                            value="{{ old('games_played', auth()->user()->games_played) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent @error('games_played') border-red-500 @enderror">
                        @error('games_played')
                            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                {{-- Buttons --}}
                <div class="flex items-center justify-between pt-4 border-t">
                    <a href="{{ route('profile.show', auth()->user()) }}" class="text-gray-600 hover:text-gray-800 font-medium">Cancel</a>
                    <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
                        Save Changes
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>