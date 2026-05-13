<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">{{ $user->name }}'s Profile</h2>
            <p class="text-sm text-gray-600 mt-1">Member Profile</p>
        </div>
    </x-slot>

    <div class="p-6 max-w-3xl mx-auto">

        {{-- Success Message --}}
        @if(session('success'))
            <div class="bg-green-100 text-green-700 px-4 py-3 rounded-lg mb-6">
                {{ session('success') }}
            </div>
        @endif

        {{-- Profile Card --}}
        <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
            <div class="flex items-center gap-6">

                {{-- Profile Photo --}}
                <div class="w-24 h-24 rounded-full overflow-hidden bg-green-100 flex items-center justify-center flex-shrink-0">
                    @if($user->profile_photo)
                        <img src="{{ Storage::url($user->profile_photo) }}" alt="{{ $user->name }}" class="w-full h-full object-cover">
                    @else
                        <span class="text-4xl font-bold text-green-600">{{ strtoupper(substr($user->name, 0, 1)) }}</span>
                    @endif
                </div>

                {{-- Profile Info --}}
                <div class="flex-1">
                    <h3 class="text-xl font-bold text-gray-800">{{ $user->name }}</h3>
                    <p class="text-sm text-green-600 font-medium capitalize">{{ str_replace('_', ' ', $user->role) }}</p>
                    @if($user->bio)
                        <p class="text-gray-600 mt-2 text-sm">{{ $user->bio }}</p>
                    @endif
                </div>

                {{-- Edit button if viewing own profile --}}
                @if(auth()->id() === $user->id)
                    <a href="{{ route('profile.edit') }}" class="bg-green-600 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 rounded-lg">
                        Edit Profile
                    </a>
                @endif
            </div>

            {{-- Golf Stats --}}
            <div class="grid grid-cols-3 gap-4 mt-6 pt-6 border-t border-gray-100">
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600">{{ $user->handicap ?? '-' }}</p>
                    <p class="text-xs text-gray-500 mt-1">Handicap</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600">{{ $user->best_score ?? '-' }}</p>
                    <p class="text-xs text-gray-500 mt-1">Best Score</p>
                </div>
                <div class="text-center">
                    <p class="text-2xl font-bold text-green-600">{{ $user->games_played ?? '0' }}</p>
                    <p class="text-xs text-gray-500 mt-1">Games Played</p>
                </div>
            </div>
        </div>

        {{-- New Post Form (only on your own profile) --}}
        @if(auth()->id() === $user->id)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-6">
                <h4 class="font-semibold text-gray-700 mb-3">Share an Update</h4>
                <form action="{{ route('member-posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <textarea name="body" rows="3" placeholder="What's on your mind?" required
                        class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-transparent resize-none">{{ old('body') }}</textarea>
                    @error('body')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                    <div class="flex items-center justify-between mt-3">
                        <input type="file" name="image" accept="image/*" class="text-sm text-gray-500">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-6 rounded-lg">
                            Post
                        </button>
                    </div>
                </form>
            </div>
        @endif

        {{-- Posts Feed --}}
        @forelse($posts as $post)
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 mb-4">

                {{-- Post Header --}}
                <div class="flex items-center justify-between mb-3">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full overflow-hidden bg-green-100 flex items-center justify-center">
                            @if($post->user->profile_photo)
                                <img src="{{ Storage::url($post->user->profile_photo) }}" class="w-full h-full object-cover">
                            @else
                                <span class="font-bold text-green-600">{{ strtoupper(substr($post->user->name, 0, 1)) }}</span>
                            @endif
                        </div>
                        <div>
                            <p class="font-semibold text-gray-800 text-sm">{{ $post->user->name }}</p>
                            <p class="text-xs text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    {{-- Delete post button (own posts only) --}}
                    @if(auth()->id() === $post->user_id)
                        <form action="{{ route('member-posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-400 hover:text-red-600 text-xs">Delete</button>
                        </form>
                    @endif
                </div>

                {{-- Post Body --}}
                <p class="text-gray-700 mb-3">{{ $post->body }}</p>

                {{-- Post Image --}}
                @if($post->image)
                    <img src="{{ Storage::url($post->image) }}" class="rounded-lg w-full object-cover max-h-64 mb-3">
                @endif

                {{-- Like Button --}}
                <div class="flex items-center gap-4 pt-3 border-t border-gray-100">
                    <form action="{{ route('member-posts.like', $post) }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-1 text-sm {{ $post->isLikedBy(auth()->user()) ? 'text-green-600 font-semibold' : 'text-gray-400 hover:text-green-600' }}">
                            ❤️ {{ $post->likes->count() }} {{ $post->likes->count() === 1 ? 'Like' : 'Likes' }}
                        </button>
                    </form>
                    <span class="text-sm text-gray-400">💬 {{ $post->comments->count() }} {{ $post->comments->count() === 1 ? 'Comment' : 'Comments' }}</span>
                </div>

                {{-- Comments --}}
                <div class="mt-4 space-y-3">
                    @foreach($post->comments as $comment)
                        <div class="flex items-start gap-3">
                            <div class="w-8 h-8 rounded-full bg-green-100 flex items-center justify-center flex-shrink-0">
                                <span class="text-xs font-bold text-green-600">{{ strtoupper(substr($comment->user->name, 0, 1)) }}</span>
                            </div>
                            <div class="flex-1 bg-gray-50 rounded-lg px-3 py-2">
                                <p class="text-xs font-semibold text-gray-700">{{ $comment->user->name }}</p>
                                <p class="text-sm text-gray-600">{{ $comment->body }}</p>
                            </div>
                            @if(auth()->id() === $comment->user_id)
                                <form action="{{ route('member-post-comments.destroy', $comment) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-600 text-xs mt-2">✕</button>
                                </form>
                            @endif
                        </div>
                    @endforeach

                    {{-- Add Comment --}}
                    <form action="{{ route('member-posts.comment', $post) }}" method="POST" class="flex gap-2 mt-2">
                        @csrf
                        <input type="text" name="body" placeholder="Write a comment..." required
                            class="flex-1 px-3 py-2 border border-gray-300 rounded-lg text-sm focus:ring-2 focus:ring-green-500 focus:border-transparent">
                        <button type="submit" class="bg-green-600 hover:bg-green-700 text-white text-sm font-bold py-2 px-4 rounded-lg">
                            Post
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow-sm border border-gray-200 p-6 text-center text-gray-400">
                No posts yet.
            </div>
        @endforelse
    </div>
</x-app-layout>