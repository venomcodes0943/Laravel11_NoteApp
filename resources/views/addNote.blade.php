<x-layout />
<form method="POST" action="{{ route('create') }}"
    class="mt-[120px] rounded-md flex justify-center w-[420px] px-4 py-8 flex-col mx-auto bg-sky-900">
    @csrf
    <div class="mb-3 flex flex-col gap-2">
        <label for="name" class="font-bold">Title:</label>
        <input type="text" id="name" name="title" value="{{ old('title') }}"
            class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
        @error('title')
            <div class="px-3 rounded-md text-red-500 font-bold">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3 flex flex-col gap-2">
        <label for="name" class="font-bold">Slug:</label>
        <input type="text" id="name" name="slug" value="{{ old('slug') }}"
            class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
        @error('slug')
            <div class="px-3 rounded-md text-red-500 font-bold">
                {{ $message }}
            </div>
        @enderror
    </div>
    <div class="mb-3 flex flex-col gap-2">
        <label for="body" class="font-bold">Note :</label>
        <textarea id="body" cols="30" rows="5" name="body"
            class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">{{ old('body') }}</textarea>
        @error('body')
            <div class="px-3 rounded-md text-red-500 font-bold">
                {{ $message }}
            </div>
        @enderror
    </div>
    <button type="submit"
        class="bg-sky-800 py-3 rounded-sm shadow-lg hover:border border-slate-900 duration-200 hover:font-bold">Add
        Note</button>
</form>
