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
</head>

<body class="bg-slate-900 font-mono">
    <div class="container-fluid">
        <div class="flex bg-gray-500 py-3 items-center justify-between">
            <div class="px-4">
                <div class="text-3xl"><a href="#">MyNotes</a></div>
            </div>
            <ul class="flex items-center items-none basis-[55%]">
                <li class="px-2 font-bold"><a href="#">Add Note</a></li>
                <li class="px-2 font-bold"><a href="#">Details</a></li>
            </ul>
            <form action="#" class="px-3">
                <input type="text" class="px-3 bg-gray-100 rounded-md shadow outline-none py-1 mx-3">
                <button type="submit"
                    class="px-2 py-1 hover:border border-sky-500 text-white outline-none bg-sky-800 rounded-md">Search</button>
            </form>
        </div>
    </div>
    {{ $slot }}
</body>

</html>
