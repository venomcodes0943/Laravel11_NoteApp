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
                    @if ($note->user != null)
                        {{ $note->user->name }}
                    @else
                        Unknow User
                    @endif

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
    @if (session()->has('success'))
        <div class="bg-red-500 fixed bottom-2 left-3 p-2 rounded-md" id="message">
            {{ session('success') }}
        </div>
    @endif
@else
    <div class="text-6xl pt-5 text-center text-white">No Notes Yet 😴</div>
@endif
