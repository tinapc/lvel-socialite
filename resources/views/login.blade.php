<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="flex flex-col items-center h-screen justify-center">
        <div class="flex flex-col space-y-3">
            <a class="w-full md:w-[300px] bg-violet-500 rounded-full px-5 py-4 flex justify-center space-x-4 text-white items-center" href="/auth/facebook/redirect">
                <span>Login with Facebook</span>
            </a>
            <a class="w-full md:w-[300px] bg-gray-950 rounded-full px-5 py-4 flex justify-center text-white items-center" href="/auth/github/redirect">Login with Github</a>
            <a class="w-full md:w-[300px] bg-[#eb4034] rounded-full px-5 py-4 flex justify-center text-white items-center" href="/auth/google/redirect">Login with Google</a>
        </div>
    </div>
</body>
</html>
