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

    @section('')


    @section('contenido')
        <div class="grid grid-cols-2 p-4 w-1/2">
            <div class="h-screen flex flex-col ml-8 py-4 gap-8 items-center" >
                <h2 class="text-2xl">Historial de Consumo</h2>
                <button class="bg-verdeBotones w-1/3 rounded-lg h-8" type="">Mensual</button>
                <button class="bg-verdeBotones w-1/3 rounded-lg h-8" type="">Anual</button>

            </div>
            <div class="w-screen">
                <h2 class="p-8">grafica</h2>
            </div>
        </div>
    @endsection
</body>

</html>
