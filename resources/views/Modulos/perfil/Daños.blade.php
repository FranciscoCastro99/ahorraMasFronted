@extends('Layouts.Plantilla')
@section('contenido')
    <div class="flex">
        <div class="w-1/2 h-screen p-8">
            <div class="flex my-8 w-full">
                <div class="flex flex-col items-center w-1/2">
                    <h1 class="text-2xl mb-4">DAÑOS</h1>
                    <svg width="150" height="115" viewBox="0 0 200 185" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_488_11129)">
                            <path
                                d="M35.7348 75.7508C29.7399 73.4013 26.164 66.8543 27.5393 60.8984C28.7772 55.5261 27.151 50.8048 23.4457 46.6371C18.1465 40.6812 18.3326 37.3441 24.3032 31.8147C28.0167 28.3728 31.7058 24.916 35.4597 21.5115C40.0712 17.3289 44.5856 17.0671 49.3993 20.9504C55.3052 25.7166 61.8098 27.2954 69.1962 24.5643C76.7202 21.7809 80.3527 16.4011 81.089 9.04603C81.7362 2.61124 84.8348 0.127117 91.9219 0.0448112C97.31 -0.0150472 102.706 -0.0225296 108.094 0.0448112C115.149 0.127117 118.215 2.61872 118.879 9.08344C119.631 16.446 123.288 21.8034 130.82 24.5718C138.223 27.2954 144.719 25.6792 150.617 20.913C155.277 17.1494 159.896 17.3364 164.265 21.2721C168.61 25.1854 172.906 29.1435 177.129 33.169C181.206 37.0598 181.133 41.175 177.63 45.5821C175.608 48.1336 173.917 51.0068 172.647 53.9473C171.627 56.3118 170.333 57.4715 167.598 57.1124C167.064 57.045 166.522 57.0226 165.988 56.9777C161.943 56.6634 159.279 58.4941 157.995 62.4697C162.825 59.9482 167.162 62.4248 171.611 63.1581C172.542 63.3152 173.504 64.4974 174.03 65.4102C177.42 71.3063 182.719 74.3067 189.839 74.9801C197.395 75.6984 199.903 78.3696 199.968 85.4104C200.016 90.2739 200.032 95.1374 199.968 99.9934C199.871 106.518 197.168 109.354 190.186 109.96C182.226 110.648 176.433 114.038 173.44 121.004C170.495 127.85 172.25 133.851 177.404 139.305C181.465 143.608 181.271 147.888 177.015 151.928C172.784 155.946 168.505 159.919 164.152 163.825C159.945 167.596 155.487 167.521 150.73 164.289C147.971 162.418 144.865 160.855 141.685 159.68C139.129 158.737 137.867 157.547 138.271 155.011C138.352 154.517 138.36 154.016 138.409 153.522C138.748 149.786 136.764 147.317 132.454 146.114C135.205 150.589 132.519 154.599 131.726 158.715C131.556 159.575 130.278 160.465 129.291 160.952C122.916 164.087 119.672 168.988 118.935 175.565C118.159 182.561 115.262 184.888 107.674 184.948C102.415 184.985 97.1644 185.007 91.9057 184.948C84.8428 184.858 81.7766 182.366 81.1213 175.909C80.377 168.554 76.7445 163.182 69.2043 160.406C61.8017 157.682 55.3133 159.298 49.4074 164.057C44.5937 167.94 40.0955 167.678 35.4678 163.481C31.5279 159.897 27.6364 156.268 23.745 152.646C18.4944 147.753 18.365 144.012 23.2191 138.632C31.9405 128.972 27.863 114.764 15.2017 110.963C13.0577 110.319 10.7196 110.184 8.46245 109.9C3.78626 109.294 0.525879 106.757 0.299351 102.47C-0.0485319 95.8857 -0.0566221 89.2638 0.27508 82.6719C0.501608 78.205 3.79435 75.8705 8.69707 75.0175C12.4671 74.3591 16.0592 72.8925 19.8131 72.1293C21.2532 71.8375 23.0007 72.279 24.4408 72.7953C25.3388 73.117 25.9051 74.2094 26.6332 74.9427C30.5085 78.8784 30.646 78.8934 35.7753 75.7433L35.7348 75.7508ZM21.8033 77.9581C17.4346 78.8559 13.9477 79.9109 10.3879 80.2102C6.86866 80.5095 5.72793 82.0135 5.78456 85.0139C5.87356 89.8774 5.9221 94.7409 5.76838 99.6044C5.66321 102.949 6.88484 104.55 10.7844 104.812C20.8163 105.485 28.0571 110.259 31.811 118.886C35.5649 127.521 33.8821 135.519 27.1267 142.478C24.9747 144.7 25.0961 146.578 27.3937 148.591C30.1363 150.993 32.7495 153.507 35.4193 155.976C39.7071 159.947 44.297 160.45 49.189 157.487C63.9133 148.569 83.7588 156.769 86.38 172.864C87.1081 177.353 89.9236 179.598 94.8263 179.598C98.8714 179.598 102.925 179.433 106.962 179.643C111.063 179.852 113.126 178.707 113.377 174.517C113.806 167.379 117.584 161.767 123.959 157.697C127.535 155.415 128.644 151.255 126.556 147.723C125.391 145.755 123.984 143.9 123.045 141.849C122.544 140.75 122.236 138.655 122.835 138.25C123.862 137.547 125.885 137.308 127.098 137.757C132.082 139.612 136.977 141.707 141.782 143.937C142.915 144.461 144.509 146.04 144.323 146.803C142.785 152.968 146.111 156.126 151.782 158.131C152.494 158.385 153.101 158.999 153.651 159.538C156.321 162.164 158.659 161.7 161.142 159.178C163.772 156.507 166.644 154.046 169.411 151.487C173.262 147.925 173.639 144.057 170.543 139.882C169.864 138.961 169.281 137.966 168.739 136.971C161.668 124.086 170.551 105.934 189.191 104.79C193.091 104.55 194.321 102.949 194.215 99.5969C194.07 94.8606 194.062 90.1168 194.215 85.3805C194.321 82.0284 193.099 80.3898 189.191 80.1803C181.336 79.7613 175.074 76.4167 170.559 70.3935C167.946 66.9067 163.529 65.9564 159.451 68.044C157.566 69.0092 155.787 70.2214 153.796 70.9023C152.356 71.3961 150.649 71.2015 149.055 71.3063C149.096 69.8024 148.716 68.1637 149.25 66.8319C150.544 63.5696 152.243 60.4495 153.813 57.2845C157.13 50.5878 156.037 51.1265 163.893 51.5306C166.328 51.6578 167.388 50.9694 168.367 48.9043C169.483 46.5548 171.231 44.4149 172.987 42.3947C174.863 40.2398 174.88 38.4739 172.72 36.536C168.763 32.967 164.783 29.4129 161.013 25.6717C158.408 23.0903 156.215 23.1352 153.489 25.5146C149.428 29.0537 144.452 30.9168 138.87 31.1039C125.456 31.5603 114.955 23.2325 113.402 10.4452C112.9 6.31498 111.072 5.14026 106.962 5.32732C102.253 5.53682 97.5203 5.50689 92.8118 5.3348C88.9204 5.19264 86.9382 6.21771 86.6227 10.2582C85.9027 19.3866 80.7006 25.9635 71.5505 29.3979C62.2305 32.8996 53.5577 31.4032 46.0257 25.1554C43.4287 23.0005 41.3818 23.3447 39.1085 25.5445C35.484 29.0612 31.811 32.5554 27.9439 35.8476C25.0394 38.3168 24.9585 40.3595 27.6445 43.0905C32.6443 48.171 34.5051 54.314 33.3644 61.1004C32.4421 66.5999 34.2624 69.518 39.9498 71.0145C42.1504 71.5906 44.4157 72.0171 46.4949 72.8551C47.5304 73.2741 48.833 74.4414 48.8653 75.3018C48.8977 76.2147 47.7812 77.5765 46.7861 78.0254C44.1406 79.2226 41.1229 79.7463 38.5502 81.0408C31.8191 84.4452 25.986 84.7071 21.6011 77.8608C21.5444 77.7785 21.3665 77.7635 21.8033 77.9281V77.9581Z"
                                fill="#585353" />
                            <path
                                d="M149.404 92.4064C149.436 117.884 127.43 138.236 99.8829 138.206C72.5539 138.176 50.5968 117.869 50.5645 92.5935C50.5402 67.1088 72.5215 46.7719 100.085 46.8018C127.422 46.8242 149.371 67.1312 149.404 92.4139V92.4064ZM143.7 92.6534C143.732 70.2214 124.356 52.1217 100.255 52.0768C75.9599 52.0319 56.349 69.8997 56.2762 92.1595C56.2034 114.808 75.5877 132.916 99.9152 132.931C124.129 132.946 143.659 114.973 143.692 92.6608L143.7 92.6534Z"
                                fill="#585353" />
                            <path
                                d="M99.616 111.89C92.4804 111.89 85.3367 111.958 78.2011 111.875C70.9764 111.793 67.9426 107.049 71.4942 101.288C78.7512 89.5108 86.081 77.771 93.4674 66.0612C96.9463 60.5468 102.99 60.5093 106.452 65.9939C113.92 77.801 121.322 89.6454 128.628 101.535C131.912 106.87 128.887 111.733 122.245 111.853C114.704 111.988 107.164 111.883 99.616 111.883V111.89ZM99.972 66.2183C91.3559 80.0232 83.4031 92.773 75.0944 106.092H124.882C116.484 92.6533 108.523 79.911 99.9639 66.2183H99.972Z"
                                fill="#585353" />
                            <path
                                d="M97.1559 85.4703C97.1559 83.0984 96.8808 80.6891 97.2853 78.3845C97.4633 77.3669 99.0167 76.5514 99.939 75.646C100.894 76.5289 102.617 77.3669 102.673 78.2872C102.957 83.1358 102.957 88.0068 102.69 92.8553C102.641 93.7831 100.958 94.6286 100.036 95.5115C99.0733 94.5313 97.4714 93.6559 97.2692 92.5485C96.8404 90.2515 97.1397 87.8347 97.1397 85.4628C97.1478 85.4628 97.1559 85.4628 97.164 85.4628L97.1559 85.4703Z"
                                fill="#585353" />
                            <path
                                d="M104.688 100.151C102.471 101.55 101.136 103.031 100.157 102.852C98.8791 102.62 97.884 101.056 96.7676 100.068C97.787 99.0882 98.7982 97.3523 99.8419 97.3298C101.104 97.2999 102.407 98.729 104.688 100.143V100.151Z"
                                fill="#585353" />
                        </g>
                        <defs>
                            <clipPath id="clip0_488_11129">
                                <rect width="200" height="185" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <div class="w-1/2 place-content-center">
                    <div class="flex flex-col pt-4 items-center gap-6">
                        <button data-modal-target="historial-modal" data-modal-toggle="historial-modal"
                            class="bg-verdeBotones text-center hover:bg-green-700 text-white h-auto w-1/2 py-2 rounded-xl"
                            type="button">
                            Historial de Daños
                        </button>
                    </div>
                    <div class="flex flex-col pt-4 items-center gap-6">
                        <button data-modal-target="medium-modal" data-modal-toggle="medium-modal"
                            class="bg-verdeBotones text-center hover:bg-green-700 text-white h-auto w-1/2 py-2 rounded-xl"
                            type="button">
                            Llamar
                        </button>
                    </div>

                </div>
            </div>
            <div class="flex flex-col gap-8">
                <span class="px-4">
                    La sección de reporte de daños es un espacio destinado a informar sobre cualquier tipo de desperfecto o
                    deterioro de la tuberìa o el contador.
                </span>
                <span class="px-4">
                    Es importante llenar este reporte de manera detallada y precisa, incluyendo información como la
                    ubicación del
                    daño, asunto y su descripción.
                </span>
            </div>
        </div>
        <div class="w-1/2">
            <div class="flex place-content-center py-4 h-4/5 w-full">
                <form
                    class="flex flex-col h-full rounded-2xl border-solid border-2 border-black-300 shadow-2xl p-4 gap-8 w-1/2 place-content-center text-sm">
                    <select id="small"
                        class="text-sm h-8 pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Asunto</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                    </select>

                    <select id="default"
                        class="text-sm h-8 pl-4 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Elegir Contador</option>
                        <option value="anologo">Principal</option>
                        <option value="digital">Secundario</option>
                    </select>
                    <input type="text" class="h-24 rounded-xl" name="" id="">

                    <div class="gap-4 mt-4 w-full text-center">
                        <button type="submit"
                            class="p-2 w-24 rounded-2xl text-white bg-verdeBotones hover:bg-green-700">Calcular</button>
                    </div>
                </form>


            </div>
        </div>
    </div>

    {{-- Modal historial --}}

    <div id="historial-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-lg max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        Historial de Daños
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="medium-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <div class="flex justify-center">
                        <div class="relative overflow-x-auto">
                            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                                <thead
                                    class="text-xs text-gray-700 uppercase bg-gray-100 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 rounded-s-lg">
                                            Fecha
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Daño
                                        </th>
                                        <th scope="col" class="px-6 py-3 rounded-e-lg">
                                            Detalles
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2/08/2024
                                        </th>
                                        <td class="px-6 py-4">
                                            Tuberia
                                        </td>
                                        <td class="px-6 py-4">
                                            <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                                                class="block w-full md:w-auto text-white bg-verdeBotones hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                type="button">
                                                Detalles
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2/08/2024
                                        </th>
                                        <td class="px-6 py-4">
                                            Tuberia
                                        </td>
                                        <td class="px-6 py-4">
                                            <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                                                class="block w-full md:w-auto text-white bg-verdeBotones hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                type="button">
                                                Detalles
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="bg-white dark:bg-gray-800">
                                        <th scope="row"
                                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                            2/08/2024
                                        </th>
                                        <td class="px-6 py-4">
                                            Tuberia
                                        </td>
                                        <td class="px-6 py-4">
                                            <button data-modal-target="small-modal" data-modal-toggle="small-modal"
                                                class="block w-full md:w-auto text-white bg-verdeBotones hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
                                                type="button">
                                                Detalles
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="historial-modal" type="button"
                        class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>

    {{-- modal detalle --}}
    <div id="small-modal" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                        11/11/2024 - Daño Tubería
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="small-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <span class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                        Asunto : Reporte de daño: La tubería de mi hogar
                        locación : Calle 65 Condominio Ceres <br>
                        Acción : Resuelto
                    </span>
                </div>
                <!-- Modal footer -->
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button data-modal-hide="small-modal" type="button"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Ok</button>
                </div>
            </div>
        </div>
    </div>
@endsection
