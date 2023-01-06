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
                                <span style= "font-weight: bold;"> Name:</span>
                                <li>{{ $post -> user -> name }}</li>
                                <span style= "font-weight: bold;"> Title:</span>
                                <li>{{ $post -> title }}</li>
                                <span style= "font-weight: bold;"> Post:</span>
                                <li>{{ $post -> content }}</li>
                                <span style= "font-weight: bold;"> Comments:</span>
                                @foreach($comments as $comment)
                                    @if(($comment->post_id) === ($post->id))
                                        <li>{{$comment -> post -> user -> name }}</li>
                                        <li>{{ $comment -> reply }}</li>
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
