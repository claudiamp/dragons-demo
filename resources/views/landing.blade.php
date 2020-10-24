<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Imagine Dragons 🐉</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    </head>
    <body class="bg-green-100">
        <div class="mx-auto max-w-6xl p-12">
            <div class="flex flex-col md:flex-row justify-center">
                <div class="md:w-1/2 max-w-md flex flex-col justify-center">
                    <div class="md:text-3xl text-xl font-black uppercase">🐉 Consigue tu dragón</div>
                    <div class="text-xl mt-4">Deja tu información y te contactaremos pronto</div>
                </div>
                <div class="md:w-1/2 flex justify-start mt-5 md:justify-end w-full md:w-1/2 ">
                    <div class="shadow-md flex-auto max-w-sm p-10 pb-20 bg-white">
                        <div class="w-full">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"><span class="text-red-400 mr-1">*</span> Nombre</div>
                        <div class="my-2 bg-white p-1 flex border border-gray-200 rounded">  <input placeholder="Jhon" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">  </div>
                        </div>
                        <div class="w-full">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"><span class="text-red-400 mr-1">*</span> Apellido</div>
                        <div class="my-2 bg-white p-1 flex border border-gray-200 rounded">  <input placeholder="Doe" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">  </div>
                        </div>
                        <div class="w-full">
                        <div class="font-bold h-6 mt-3 text-gray-600 text-xs leading-8 uppercase"><span class="text-red-400 mr-1">*</span> Correo</div>
                        <div class="my-2 bg-white p-1 flex border border-gray-200 rounded">  <input placeholder="jhon@doe.com" class="p-1 px-2 appearance-none outline-none w-full text-gray-800">  </div>
                        </div>
                        <div class="mt-6 relative">
                        <div class="shadow-md font-medium py-2 px-4 text-green-100
                            cursor-pointer bg-green-600 rounded text-lg tr-mt  absolute text-center w-full">Enviar</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
