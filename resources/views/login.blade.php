<x-layout>
    <form method="POST" action="{{ route('addUser') }}"
        class="mt-[120px] rounded-md flex justify-center w-[420px] px-4 py-8 flex-col mx-auto bg-sky-900">
        @csrf
        <div class="mb-3 flex flex-col gap-2">
            <label for="name" class="font-bold">Name :</label>
            <input type="text" id="name" name="name"
                class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
            @error('name')
                <div class="px-3 rounded-md text-red-500 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 flex flex-col gap-2">
            <label for="name" class="font-bold">Email :</label>
            <input type="email" id="name" name="email"
                class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
            @error('email')
                <div class="px-3 rounded-md text-red-500 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3 flex flex-col gap-2">
            <label for="name" class="font-bold">Password :</label>
            <input type="password" id="name" name="password"
                class="rounded-md px-2 bg-gray-900 text-white py-1 outline-none ">
            @error('password')
                <div class="px-3 rounded-md text-red-500 font-bold">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit"
            class="bg-sky-800 py-3 rounded-sm shadow-lg hover:border border-slate-900 duration-200 hover:font-bold">Login</button>
        <a href="#"
            class="bg-sky-800 my-3 py-3 text-center rounded-sm shadow-lg hover:border border-yellow-600 duration-200 hover:font-bold text-yellow-600">Dont
            have account</a>
    </form>
</x-layout>
