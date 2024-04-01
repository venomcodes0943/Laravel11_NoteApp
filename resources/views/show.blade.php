<x-layout />
<div class="p-9 rounded-md bg-sky-900 mt-5 container mx-auto">
    <div class="relative overflow-x-auto shadow-lg sm:rounded-lg">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Note
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Show
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Change
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Delete
                    </th>
                </tr>
            </thead>
            <tbody>
                @if ($data->count() == 0)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <td colspan="5">
                            <div class="text-3xl text-center py-4">No Notes</div>
                        </td>

                    </tr>
                @endif
                @foreach ($data as $record)
                    <tr
                        class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $record->title }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $record->body }}
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('singleNote', $record->slug) }}"
                                class="font-medium text-blue-600 dark:text-yellow-500 hover:underline">Show</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="#"
                                class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ route('deleteNote', $record->title) }}"
                                class="font-medium text-red-500 dark:text-red-500 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <div class="mt-5">
        <a href="{{ route('homepage') }}"
            class="bg-emerald-500 px-5 py-2 rounded-md  hover:border border-black duration-200 hover:font-bold">Go
            Home</a>
    </div>
</div>
