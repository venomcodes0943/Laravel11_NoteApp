<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="shortcut icon"
        href="https://th.bing.com/th/id/R.b3b644aa4995aee815fb831d715c4c68?rik=xmFh2anLSp0SDQ&pid=ImgRaw&r=0"
        type="image/x-icon">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="hide.js"></script>

</head>

<body class="bg-[#0C0C0C] font-mono">
    <div class="container-fluid">
        <div class="flex bg-[#453F78] text-[#FFC94A] py-3 items-center justify-between">
            <div class="px-4">
                <div class="text-3xl"><a href="{{ route('homepage') }}">MyNotes</a></div>
            </div>
            <ul class="flex items-center items-none basis-[55%]">
                <li class="px-2 font-bold"><a href="{{ route('addNote') }}">Add Note</a></li>
                <li class="px-2 font-bold"><a href="{{ route('addUser') }}">Add User</a></li>
                <li class="px-2 font-bold"><a href="{{ route('show') }}">Details</a></li>
            </ul>
            <form action="#" class="px-3">
                <input type="text" class="px-3 bg-[#FFC94A] text-black rounded-md shadow outline-none py-1 mx-3">
                <button type="submit"
                    class="px-2 py-1 hover:border border-[#FFC94A] text-white outline-none bg-[#C08B5C] rounded-md">Search</button>
            </form>
        </div>
    </div>
    {{ $slot }}
</body>

</html>
