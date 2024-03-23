<x-admin.layout>
    <style>
        .ck-editor__editable {
            min-height: 200px;
        }



    </style>
    <section>
        <h3 class="text-center text-[32px] font-semibold">Create New Post</h3>
        <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data" class="max-w-2xl mx-auto flex flex-col gap-4">
            @csrf
            <fieldset class="flex flex-col space-y-1 border border-gray-400 px-2 rounded-sm">
                <legend>
                    <label for="title">Title</label>
                </legend>
                <input type="text" name="title" id="title" placeholder="Enter title of the post..."
                    class="w-full pb-2 focus:outline-none focus:ring-0" spellcheck="false">
            </fieldset>
            <fieldset class="flex flex-col space-y-1 border border-gray-400 px-2 rounded-sm">
                <legend>
                    <label for="editor">Description</label>
                </legend>
                <div class="w-60 md:w-full overflow-hidden">
                    <textarea name="description" id="editor" rows="10" cols="80" placeholder="What is on your mind?">
                    </textarea>
                </div>
            </fieldset>
            <fieldset class="flex flex-col space-y-1 border border-gray-400 px-2 rounded-sm">
                <legend>
                    <label for="image">Image</label>
                </legend>
                <input type="file" name="image" id="image" class="w-full pb-2 focus:outline-none focus:ring-0"
                    accept=".png, .jpg, .jpeg">
            </fieldset>
            {{-- <fieldset>
                <legend>
                    <label for="tags">Tags</label>
                </legend>
                <input type="text" name="tags" id="tags" placeholder="Enter tags..."
                    class="w-full pb-2 focus:outline-none focus:ring-0">
            </fieldset> --}}
            <fieldset class="flex flex-col space-y-1 border border-gray-400 px-2 rounded-sm">
                <legend>
                    <label for="category">Category</label>
                </legend>
                <select name="category_id" id="category" class="w-full p-2 focus:outline-none focus:ring-0 bg-white">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                </select>
            </fieldset>
            <fieldset class="flex flex-col space-y-1 border border-gray-400 px-2 rounded-sm">
                <legend>
                    <label for="status">Status</label>
                </legend>
                <select name="status" id="status" class="w-full p-2 focus:outline-none focus:ring-0 bg-white uppercase">
                    <option value="0">
                        unpublish
                    </option>
                    <option value="1">
                        publish
                    </option>
                    <option value="2">
                        archive
                    </option>
                </select>
            </fieldset>


            <div class="flex justify-end">
                <button type="submit"
                    class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 active:bg-blue-700 rounded-sm">
                    Create
                </button>
            </div>


            <script>
                ClassicEditor
                    .create(document.querySelector('#editor'), {
                        ckfinder: {
                            uploadUrl: "{{ route('admin.ck.upload', ['_token'=> csrf_token()]) }}"
                        },
                        heading: {
                            options: [{
                                    model: 'paragraph',
                                    title: 'Paragraph',
                                    class: 'ck-heading_paragraph'
                                },
                                {
                                    model: 'heading1',
                                    view: 'h1',
                                    title: 'Heading 1',
                                    class: 'ck-heading_heading1'
                                },
                                {
                                    model: 'heading2',
                                    view: 'h2',
                                    title: 'Heading 2',
                                    class: 'ck-heading_heading2'
                                },
                                {
                                    model: 'heading3',
                                    view: 'h3',
                                    title: 'Heading 3',
                                    class: 'ck-heading_heading3'
                                },
                            ]
                        },
                    })
                    .catch(error => {
                        console.error(error);
                    });
            </script>
        </form>
    </section>
</x-admin.layout>
