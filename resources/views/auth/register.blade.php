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

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <div class="  flex flex-col gap-2 m-4  border-gray-500">
        <form method="post" action="{{ route('register.user') }} " class="flex flex-col gap-1">
            @csrf
            <label for="" class="font-bold"> Name </label>
            <input type="text" class="w-1/2 border border-gray-500 rounded-md focus:border-amber-300 p-2"
                value="{{ old('name') }}" name="name">
            <span class="text-xs text-red-500">
                @error('name')
                    {{ $message }}
                @enderror
            </span>
            <label for="" class="font-bold"> Email </label>
            <input type="text" class="w-1/2 border border-gray-500 rounded-md focus:border-amber-300 p-2"
                name="email" value="{{ old('email') }}">
            <span class="text-xs text-red-500">
                @error('email')
                    {{ $message }}
                @enderror
            </span>
            <label for="" class="font-bold"> Password </label>
            <input type="password" class="w-1/2 border border-gray-500 rounded-md focus:border-amber-300 p-2"
                name="password" value="{{ old('password') }}">
            <span class="text-xs text-red-500">
                @error('password')
                    {{ $message }}
                @enderror
            </span>
            <button class="p-2 w-fit rounded-md bg-blue-500 text-white" type="submit">Register</button>
        </form>
        <a href="/login">If you registered !! login hear</a>
    </div>

</body>

</html>
