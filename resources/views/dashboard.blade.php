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
                                <b> Comment:</b>
                                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                                                    <!-- Status message -->
                                    <div class="statusMsg"></div>

                                    <!-- File upload form -->
                                    <div class="col-lg-12">
                                        <form id="fupForm" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="name">Name:</label>
                                                <input type="text" class="form-control" name="comment" placeholder="Enter comment" required />
                                            </div>
                                            
                                            <input type="submit" name="submit" class="btn btn-primary submitBtn" value="SUBMIT"/>
                                        </form>
                                    </div>
                                @foreach($comments as $comment)
                                    @if(($comment->post_id) === ($post->id))
                                        <li><u> {{ $comment -> user -> name }}</u></li>
                                        <li>{{ $comment -> reply }}</li>
                                    @endif
                                @endforeach
                            </div>
                        </ul>
                    @endforeach
                    {{ $posts->links() }}
                </ul>
                
            </div>
        </div>
    </div>
        

</x-app-layout>
