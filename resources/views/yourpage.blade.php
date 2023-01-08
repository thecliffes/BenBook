<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Your Page') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
            @foreach ($posts as $post)
                <ul>
                    <div class="py-2">
                        @if(($post->user_id) === $user->id)
                            <b> Title:</b>
                            <li>{{ $post -> title }}</li>
                            <b> Post:</b>
                            <li>{{ $post -> content }}</li>
                        @endif
                    </div>
                </ul>
            @endforeach
            </div>
        </div>
    </div>

</x-app-layout>