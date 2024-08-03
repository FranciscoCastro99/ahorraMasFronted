@extends('Layouts.Plantilla')
    @section('contenido')
    <div class="w-screen h-screen flex">
        <div class="w-1/2 text-center text-xl">
            <h1 class="my-6 font-semibold">Agregar Contador</h1>
            @csrf
            <form class="max-w-full px-8 flex flex-col text-sm">
                <div class="flex justify-center gap-4">
                    <input type="text" class="w-full rounded-xl" name="num_contador" placeholder="Número de Contador">
                    <input type="text" class="w-full rounded-xl" name="nombre_contador" placeholder="Nombre del Contador">
                </div>
                <div class="flex justify-center gap-4 my-4">
                    <input type="text" class="rounded-xl w-1/2" name="barrio" placeholder="Barrio">
                    <input type="text" class="rounded-xl w-1/2" name="direccion" placeholder="Dirección">
                </div>

                <div class="flex justify-center gap-4">
                    <select id="estrato" name="estrato" class="h-10 w-1/2 text-sm pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Estrato</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                      </select>

                      <select id="categoria" name="categoria" class="h-10 w-1/2 text-sm pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Categoria</option>
                        <option value="anologo">Analógico</option>
                        <option value="digital">Digital</option>

                      </select>
                </div>

                <div class="flex justify-center gap-4 my-4">
                    <input type="text" class="rounded-xl w-1/2" name="tarifa_agua" placeholder="Tarifa Agua">
                    <input type="text" class="rounded-xl w-1/2" name="tarifa_alcantarillado" placeholder="Tarifa Alcantarillado">
                </div>
                <div class="flex justify-center gap-4 mb-4">
                    <input type="text" class="rounded-xl w-1/2" name="ultimo_consumo" placeholder="Último Consumo">
                    <input type="text" class="rounded-xl w-1/2" name="fecha_proximo_pago" placeholder="Fecha Próximo Pago">
                </div>

                <div class="justify-center gap-4 mt-4">
                    <button type="submit" class="p-2 w-24 rounded-2xl text-white bg-azulBotones hover:bg-cyan-700">Guardar</button>
                </div>
              </form>
        </div>

        {{-- parte de eleccion de color --}}
        <div class="w-1/2 text-center px-8 text-xl">

            <h1 class="my-6 font-semibold">Datos Adicionales</h1>

            <div class="flex justify-center gap-6 my-4">
                <h2>Estado:</h2>
                <label class="inline-flex items-center cursor-pointer">
                    <input type="checkbox" value="" class="sr-only peer">
                    <div class="relative w-9 h-5 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-4 after:w-4 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                    <span class="ms-3 text-sm font-medium text-gray-900 dark:text-gray-300">Activo</span>
                </label>
            </div>
            <div class="flex gap-8 justify-center my-8">
                <div class="flex items-center">
                    <input id="default-radio-1" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Principal</label>
                </div>
                <div class="flex items-center">
                    <input checked id="default-radio-2" type="radio" value="" name="default-radio" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                    <label for="default-radio-2" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Secundario</label>
                </div>
            </div>
            <h2 class="font-semibold mt-8">Elige un color para tu contador</h2>
            <div class="flex pt-20 justify-center gap-8">
                <div>
                    <button>grafica</button>
                </div>
                <div>
                    <button>color</button>
                </div>
            </div>

        </div>

    </div>


    @endsection

