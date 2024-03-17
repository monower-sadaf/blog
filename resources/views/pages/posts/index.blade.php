<x-layout>
    <section class="pb-5">
        <h3 class="text-center text-4xl font-bold underline pb-5">All posts</h3>
        <div class="flex flex-wrap justify-center">
            @foreach ($posts as $post)
                <x-post id="{{ $post->id }}" title="{{ $post->title }}" description="{{ $post->description }}"/>
            @endforeach
        </div>
    </section>
</x-layout>
