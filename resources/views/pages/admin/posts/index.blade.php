<x-admin.layout>
    <section>
        <h3 class="text-center text-[32px] font-semibold">All Posts</h3>
        <div class="flex justify-end pb-5">
            <a href="{{ route('admin.posts.create') }}" class="bg-blue-500 text-white px-4 py-2 hover:bg-blue-600 active:bg-blue-700 rounded-sm">
                Create New
            </a>
        </div>
        <div class="w-full overflow-x-auto">
            <table class="w-full border border-collapse border-gray-400">
                <thead>
                    <tr>
                        <th class="border border-gray-400">SI</th>
                        <th class="border border-gray-400">ID</th>
                        <th class="border border-gray-400">Title</th>
                        <th class="border border-gray-400">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody class="border border-gray-400 text-center">
                   <tr>
                    <td class="border border-gray-400">1</td>
                    <td class="border border-gray-400">
                        1
                    </td>
                    <td>
                        Lorem ipsum dolor sit amet.
                    </td>
                    <td class="border border-gray-400">
                        <div class="flex justify-center items-center space-x-4 m-1">
                            <a href="#" class="bg-green-500 text-white px-4 py-1 hover:bg-green-600 active:bg-green-700 rounded-sm">Edit</a>
                            <a href="#" class="bg-red-500 text-white px-4 py-1 hover:bg-red-600 active:bg-red-700 rounded-sm">Delete</a>
                        </div>
                    </td>
                   </tr>
                </tbody>
            </table>
        </div>
    </section>
</x-admin.layout>