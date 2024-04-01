<x-layout />
<div class="p-9 rounded-md bg-sky-900 mt-5 container mx-auto">
    <div class="text-2xl font-bold py-3">{{ $record->title }}</div>
    <div class="mb-3 pb-2">{{ $record->body }}</div>
    <div class="mt-5">
        <a href="{{ route('show') }}"
            class="bg-emerald-500 px-5 py-2 rounded-md  hover:border border-black duration-200 hover:font-bold">Go
            Home</a>
    </div>
</div>
