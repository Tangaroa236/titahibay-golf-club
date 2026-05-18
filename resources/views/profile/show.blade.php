<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}'s Profile</h2>
            <p class="text-sm text-gray-500 mt-1">Titahi Bay Golf Club — Member Profile</p>
        </div>
    </x-slot>

    <div class="max-w-4xl mx-auto px-6 py-8">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="flex items-center gap-3 bg-green-50 border border-green-200 text-green-700 px-4 py-3 rounded-xl mb-6">
                <svg class="w-5 h-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                </svg>
                {{ session('success') }}
            </div>
        @endif

        {{-- Profile Hero Card --}}
        <div class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden mb-6">

            {{-- Green Banner --}}
            <div class="h-24 bg-gradient-to-r from-green-800 to-green-600"></div>

            {{-- Profile Info --}}
            <div class="px-6 pb-6">
                <div class="flex items-end justify-between -mt-12 mb-4">

                    {{-- Avatar --}}
                    <div class="w-24 h-24 rounded-2xl overflow-hidden border-4 border-white shadow-md bg-green-100 flex items-center justify-center flex-shrink-0">
                        @if($user->profile_photo)
                            <img src="{{ Storage::url($user->profile_photo) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                        @else
                            <span class="text-3xl font-bold text-green-700">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                        @endif
                    </div>

                    {{-- Edit Button --}}
                    @if(auth()->id() === $user->id)
                        <a href="{{ route('profile.edit') }}" class="flex items-center gap-2 bg-white border border-gray-200 hover:border-green-500 hover:text-green-600 text-gray-600 text-sm font-semibold py-2 px-4 rounded-xl transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                            </svg>
                            Edit Profile
                        </a>
                    @endif
                </div>

                {{-- Name & Role --}}
                <h3 class="text-2xl font-bold text-gray-900">{{ $user->name }}</h3>
                <span class="inline-block mt-1 px-3 py-1 bg-green-100 text-green-700 text-xs font-semibold rounded-full capitalize">
                    {{ str_replace('_', ' ', $user->role) }}
                </span>

                {{-- Bio --}}
                @if($user->bio)
                    <p class="text-gray-500 mt-3 text-sm leading-relaxed">{{ $user->bio }}</p>
                @else
                    <p class="text-gray-400 mt-3 text-sm italic">No bio added yet.</p>
                @endif

                {{-- Divider --}}
                <div class="border-t border-gray-100 mt-6 pt-6">
                    <p class="text-xs font-semibold text-gray-400 uppercase tracking-wider mb-4">Golf Stats</p>
                    <div class="grid grid-cols-3 gap-4">
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-2xl font-bold text-green-600">{{ $user->handicap ?? '-' }}</p>
                            <p class="text-xs text-gray-400 mt-1 font-medium">Handicap</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-2xl font-bold text-green-600">{{ $user->best_score ?? '-' }}</p>
                            <p class="text-xs text-gray-400 mt-1 font-medium">Best Score</p>
                        </div>
                        <div class="bg-gray-50 rounded-xl p-4 text-center">
                            <p class="text-2xl font-bold text-green-600">{{ $user->games_played ?? '0' }}</p>
                            <p class="text-xs text-gray-400 mt-1 font-medium">Games Played</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- New Post Form (only on your own profile) --}}
        @if(auth()->id() === $user->id)
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 mb-6">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-10 h-10 rounded-xl bg-green-100 flex items-center justify-center flex-shrink-0">
                        <span class="font-bold text-green-700">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                    </div>
                    <p class="font-semibold text-gray-700">Share an Update</p>
                </div>
                <form action="{{ route('member-posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <textarea name="body" rows="3" placeholder="What's on your mind?" required
                        class="w-full px-4 py-3 bg-gray-50 border border-gray-200 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none text-sm text-gray-700 placeholder-gray-400">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-between mt-3">
                        <label class="flex items-center gap-2 text-sm text-gray-400 cursor-pointer hover:text-green-600 transition">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                            Add Photo
                            <input type="file" name="image" accept="image/*" class="hidden">
                        </label>
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm font-bold py-2 px-6 rounded-xl transition">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        @endif

        {{-- Posts Feed --}}
        <div class="space-y-4">
            @forelse($posts as $post)
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6">

                    {{-- Post Header --}}
                    <div class="flex items-center justify-between mb-4">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-xl overflow-hidden bg-green-100 flex items-center justify-center flex-shrink-0">
                                @if($post->user->profile_photo)
                                    <img src="{{ Storage::url($post->user->profile_photo) }}" class="w-full h-full object-cover">
                                @else
                                    <span class="font-bold text-green-700 text-sm">{{ strtoupper(substr($post->user->name, 0, 1)) }}</span>
                                @endif
                            </div>
                            <div>
                                <p class="font-semibold text-gray-800 text-sm">{{ $post->user->name }}</p>
                                <p class="text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                            </div>
                        </div>

                        {{-- Delete post button --}}
                        @if(auth()->id() === $post->user_id)
                            <form action="{{ route('member-posts.destroy', $post) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-xs text-gray-300 hover:text-red-500 transition font-medium">
                                    Delete
                                </button>
                            </form>
                        @endif
                    </div>

                    {{-- Post Body --}}
                    <p class="text-gray-700 text-sm leading-relaxed mb-3">{{ $post->body }}</p>

                    {{-- Post Image --}}
                    @if($post->image)
                        <img src="{{ Storage::url($post->image) }}" class="rounded-xl w-full object-cover max-h-72 mb-4">
                    @endif

                    {{-- Like & Comment Count --}}
                    <div class="flex items-center gap-5 pt-4 border-t border-gray-50">
                        <form action="{{ route('member-posts.like', $post) }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center gap-1.5 text-sm font-medium transition {{ $post->isLikedBy(auth()->user()) ? 'text-green-600' : 'text-gray-400 hover:text-green-600' }}">
                                <svg class="w-4 h-4" fill="{{ $post->isLikedBy(auth()->user()) ? 'currentColor' : 'none' }}" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                                </svg>
                                {{ $post->likes->count() }} {{ $post->likes->count() === 1 ? 'Like' : 'Likes' }}
                            </button>
                        </form>
                        <span class="flex items-center gap-1.5 text-sm text-gray-400 font-medium">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                            </svg>
                            {{ $post->comments->count() }} {{ $post->comments->count() === 1 ? 'Comment' : 'Comments' }}
                        </span>
                    </div>

                    {{-- Comments --}}
                    <div class="mt-4 space-y-3">
                        @foreach($post->comments as $comment)
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-green-100 flex items-center justify-center flex-shrink-0">
                                    <span class="text-xs font-bold text-green-700">{{ strtoupper(substr($comment->user->name, 0, 1)) }}</span>
                                </div>
                                <div class="flex-1 bg-gray-50 rounded-xl px-4 py-2.5">
                                    <p class="text-xs font-semibold text-gray-700">{{ $comment->user->name }}</p>
                                    <p class="text-sm text-gray-500 mt-0.5">{{ $comment->body }}</p>
                                </div>
                                @if(auth()->id() === $comment->user_id)
                                    <form action="{{ route('member-post-comments.destroy', $comment) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-gray-300 hover:text-red-500 text-xs mt-2 transition">✕</button>
                                    </form>
                                @endif
                            </div>
                        @endforeach

                        {{-- Add Comment --}}
                        <form action="{{ route('member-posts.comment', $post) }}" method="POST" class="flex gap-2 mt-3">
                            @csrf
                            <input type="text" name="body" placeholder="Write a comment..." required
                                class="flex-1 px-4 py-2 bg-gray-50 border border-gray-200 rounded-xl text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent placeholder-gray-400">
                            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 rounded-xl transition">
                                Post
                            </button>
                        </form>
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-10 text-center">
                    <div class="w-16 h-16 bg-gray-100 rounded-2xl flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-gray-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path>
                        </svg>
                    </div>
                    <p class="text-gray-400 font-medium">No posts yet</p>
                    <p class="text-gray-300 text-sm mt-1">Share your first update above!</p>
                </div>
            @endforelse
        </div>
    </div>
</x-app-layout>