<a href="{{ route('posts.show', $id) }}" class="border border-puce rounded-md w-full lg:w-[30%] m-2">
    <img class="w-full h-40 rounded-md" src="{{ asset('logo.jpg') }}" alt="post image">
    <div class="p-5">
        <h3>{{ $title }}</h3>
        <p>{{ $description }}</p>
    </div>
</a>
