<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>
<body>
    
    <div class="w-full h-screen">
        
        <div class="md:container px-4 mx-auto">
            <div class="flex items-center justify-between py-4 shadow-sm">
                <h1 class="text-3xl text-black font-bold">Laravel Socialite</h1>
                <a class="bg-blue-500 text-white rounded-full px-6 py-2" href="{!! route('logout') !!}">Log Out</a>
            </div>

            <main class="mt-8">
                <h2 class="text-2xl text-blue-500">Hello {{ auth()->user()->name }}</h2>
                <p>welcome to Dashboard</p>
            </main>
        </div>
    </div>

</body>
</html>
