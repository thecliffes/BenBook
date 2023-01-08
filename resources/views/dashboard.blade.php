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
                                <b> Name:</b>
                                <li>{{ $post -> user -> name }}</li>
                                <b> Title:</b>
                                <li>{{ $post -> title }}</li>
                                <b> Post:</b>
                                <li>{{ $post -> content }}</li>
                                <b> Comments:</b>
                                <form method="POST" action="{{ route('store') }}">
                                    @csrf
                                    <input type="text" name="reply" value="{{ old('reply') }}">
                                    <input type="submit" value="Submit">
                                </form>
                                @foreach($comments as $comment)
                                    @if(($comment->post_id) === ($post->id))
                                        <li><u> {{ $comment -> user -> name }}</u></li>
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
