@extends('Layouts.Plantilla')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @section('contenido')

    <div class="w-full h-screen p-8">
        <div class="grid grid-cols-2 gap-4">
            <button class="h-56 bg-red-700 z-0">1</button>
            <button class="h-56 bg-green-700 z-0">2</button>
            <button class="h-56 bg-blue-600 z-0">3</button>
            <button class="h-56 bg-yellow-400 z-0">4</button>
        </div>

    </div>





    @endsection
</body>
</html>









