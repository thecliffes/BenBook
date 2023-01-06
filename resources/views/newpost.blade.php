<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-6 text-gray-900">
                <form method="POST" action="{{ route('store') }}">
                    @csrf
                    <p>Title:</p> 
                    <input type="text" name="title" value="{{ old('title') }}">
                    <p>Content:</p>
                    <input type="text" name="content" value="{{ old('content') }}">
                    <input type="submit" value="Submit">                   
                </form>
            </div>
        </div>
    </div>

</x-app-layout>