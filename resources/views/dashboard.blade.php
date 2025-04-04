<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>

<body>
    <h1 class="text-red-500 text-3xl font-bold"> Custom Authentication </h1>
    @if (Session::has('loginCheck'))
    {{ Session::get('loginCheck') }}
@endif
    <div class="flex flex-col gap-1 p-4">
        <div><span>Username : {{$data->name}}</span></div>
        <div><span>Email: {{$data->email}}</span></div>
        <div><a href="{{route('logout')}}">   <span>Logout </span></a></div>
    </div>
</body>

</html>
