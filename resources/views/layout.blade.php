<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
   @include('partials.nav')

    <div class="grid grid-rows-5 gap-4 justify-around my-5">
        <div>
            @yield('create')
        </div>

        <div class="row-span-4">
            @yield('content')
        </div>

    </div>


</body>
</html>
