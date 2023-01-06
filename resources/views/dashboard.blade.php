<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <ul>
                    @foreach ($posts as $post)
                        <ul>
                            <div class="py-2">
                                <li>{{ $post -> user -> name }}</li>
                                <li>{{ $post -> title }}</li>
                                <li>{{ $post -> content }}</li>
                                <li>{{ $post -> id }}</li>
                                @foreach($comments as $comment)
                                    @if(($comment->post_id) === ($post->id))
                                        <li>{{ $comment -> post -> reply}}</li>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                    @endforeach
                </ul>
                
            </div>
        </div>
    </div>
        

</x-app-layout>
