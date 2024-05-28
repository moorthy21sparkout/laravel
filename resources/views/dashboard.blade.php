<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}

                    @can('isAdmin')
                        <h3 class="text-center">this is the Admin...!</h3>
                    @endcan
                    @can('isUser')
                        <h3 class="text-center">this is the user page...!</h3>
                    @endcan
                    @can('isEditor')
                        <h3 class="text-center">this is the Editor page...!</h3>
                    @endcan
                    <h3>Post</h3>
                    <a href="{{ route('post.index') }}"class="btn btn-success">See the Posts</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
