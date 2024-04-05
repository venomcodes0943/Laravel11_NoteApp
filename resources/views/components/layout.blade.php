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
        <div class="flex bg-[#453F78] text-[#FFC94A] py-3 items-center">
            <div class="px-4 me-5">
                <div class="text-3xl"><a href="{{ route('homepage') }}">MyNotes</a></div>
            </div>
            <ul class="flex items-center items-none">
                <li class="px-2 font-bold"><a href="{{ route('addNote') }}">Add Note</a></li>
                <li class="px-2 font-bold"><a href="{{ route('addUser') }}">Add User</a></li>
            </ul>
        </div>
    </div>
    {{ $slot }}
</body>

</html>
