<x-layout>
    <div class="pt-5 inline-flex flex-col space-y-3">
        <h1 class="text-md">Welcome to my Blog.</h1>
        <p class="text-2xl">I post on various topics.</p>
        <a href="{{ route('posts') }}" class="w-28 text-center bg-indigo-500 text-white p-2 rounded-md active:bg-indigo-300 basis-0">Go to posts.</a>
    </div>
</x-layout>