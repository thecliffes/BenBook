<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('New Post') }}
        </h2>
    </x-slot>


    <form method="POST">
        @csrf
        <p>Title: <input type="text" name="name" 
            value="{{ old('name') }}"></p>
        <p>Content: <input type="text" name="email"
            value="{{ old('email') }}"></p>
        <input type="submit" value="Submit">
        
    </form>

</x-app-layout>