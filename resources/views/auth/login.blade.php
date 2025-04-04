<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body class="w-full p-2">
    <h1 class="text-red-500 text-3xl font-bold"> Custom Authentication </h1>

    <div class="  flex flex-col gap-2 m-4  border-gray-500">
        @if (Session::has('success'))
            {{ Session::get('success') }}
        @endif
        @if (Session::has('error'))
            {{ Session::get('error') }}
        @endif
        <form action="{{ route('login.user') }}" class="flex flex-col gap-2 m-4" method="post">
            @csrf
            <label for="" class="font-bold"> Email </label>
            <input type="text" class="w-1/2 border border-gray-500 rounded-md focus:border-amber-300 p-2"
                name="email" value="{{old('email')}}">
            <span class="text-xs text-red-500">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <label for="" class="font-bold"> Password </label>
            <input type="password" class="w-1/2 border border-gray-500 rounded-md focus:border-amber-300 p-2"
                name="password" value="{{old('password')}}">
            <span class="text-xs text-red-500">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <button class="p-2 w-fit rounded-md bg-blue-500 text-white">Login</button>
        </form>
        <a href="/register">If you Not registered !! Register hear</a>
    </div>
</body>

</html>
