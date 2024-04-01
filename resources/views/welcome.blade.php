<x-layout />
<form method="POST" action="{{ route('create') }}"
    class="mt-[120px] rounded-md flex justify-center w-[420px] px-4 py-8 flex-col mx-auto bg-sky-900">
    @csrf
    <div class="text-3xl text-center underline pb-2">My Notes</div>
    <div class="mb-3 flex flex-col gap-2">
        <label for="name" class="font-bold">Title:</label>
        <input type="text" id="name" name="title"
            class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
    </div>
    <div class="mb-3 flex flex-col gap-2">
        <label for="email" class="font-bold">Note :</label>
        <textarea id="email" cols="30" rows="5" name="body"
            class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none "></textarea>
    </div>
    <button type="submit"
        class="bg-sky-800 py-3 rounded-sm shadow-lg hover:border border-slate-900 duration-200 hover:font-bold">Add
        Note</button>
</form>
