<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ in_array(Auth::user()->role, ['admin', 'board', 'administrator']) ? 'Manage Posts' : 'News Posts' }}
            </h2>
            @if(in_array(Auth::user()->role, ['admin', 'board', 'administrator']))
                <a href="{{ route('admin.posts.create') }}" class="bg-green-600 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">
                    Create New Post
                </a>
            @endif
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    @if($posts->count() > 0)
                        <table class="min-w-full">
                            <thead>
                                <tr class="border-b">
                                    <th class="px-6 py-3 text-left">Title</th>
                                    <th class="px-6 py-3 text-left">Status</th>
                                    <th class="px-6 py-3 text-left">Created</th>
                                    @if(in_array(Auth::user()->role, ['admin', 'board', 'administrator']))
                                        <th class="px-6 py-3 text-left">Actions</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr class="border-b">
                                        <td class="px-6 py-4">{{ $post->title }}</td>
                                        <td class="px-6 py-4">
                                            <span class="px-2 py-1 text-xs rounded {{ $post->status == 'published' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                                {{ ucfirst($post->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4">{{ $post->created_at->format('M d, Y') }}</td>
                                        @if(in_array(Auth::user()->role, ['admin', 'board', 'administrator']))
                                            <td class="px-6 py-4">
                                                <a href="{{ route('admin.posts.edit', $post) }}" class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                                                <form action="{{ route('admin.posts.destroy', $post) }}" method="POST" class="inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                                                </form>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="mt-4">
                            {{ $posts->links() }}
                        </div>
                    @else
                        <p class="text-gray-500 text-center py-8">
                            @if(in_array(Auth::user()->role, ['admin', 'board', 'administrator']))
                                No posts yet. Create your first post!
                            @else
                                No posts available.
                            @endif
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>