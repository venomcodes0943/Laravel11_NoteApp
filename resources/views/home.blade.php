<x-layout />
<div class="container mx-auto p-4">{{ $notes->links() }}</div>
@if ($notes->count())
    <div class="grid grid-cols-3 gap-2 m-2">
        @foreach ($notes as $note)
            <div class="px-4 py-2 bg-[#C08B5C] hover:border m-2  duration-200 rounded-md shadow-md">
                <a href="{{ route('singleNote', $note->slug) }}">
                    <div class="text-2xl py-2">{{ $note->title }}</div>
                </a>
                <div class="mb-2">
                    {{ $note->body }}
                </div>
                <div class="font-bold text-[14px]">
                    {{ $note->user->name }}
                </div>
                <div class="flex mt-1 justify-between items-center">
                    <a href="{{ route('singleNote', $note->slug) }}">
                        <div class="bg-[#F2613F] px-2 py-1 rounded-md w-max">
                            {{ $note->created_at->diffForHumans() }}
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@else
    <div class="text-6xl pt-5 text-center text-white">No Notes Yet 😴</div>
@endif
