<x-layout />
<div class="container mx-auto p-4">{{ $notes->links() }}</div>
<div class="grid grid-cols-3 gap-2 m-2">
    @foreach ($notes as $note)
        <div class="p-2 bg-[#C08B5C] hover:border m-2  duration-200 rounded-md shadow-md">
            <div class="text-2xl py-2">{{ $note->title }}</div>
            <div class="mb-2">
                {{ $note->body }}
            </div>
            <div class="flex mt-6 justify-between items-center">
                <div class="bg-[#F2613F] px-2 py-1 rounded-md w-max">
                    {{ $note->created_at->diffForHumans() }}
                </div>
                <a href="{{ route('singleNote', $note->slug) }}" class="text-white px-6 rounded-md bg-[#0C0C0C] py-1">
                    Read
                </a>
            </div>
        </div>
    @endforeach
</div>
