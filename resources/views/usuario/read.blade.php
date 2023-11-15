<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="h-screen flex flex-col items-center bg-gray-300 pt-[100px] ">

        <div class="flex flex-row gap-x-40 pb-10">
            <h1>Gestion de Usuarios</h1> 
            <button class="w-[100px] h-[30px] bg-blue-700 rounded-md text-xs text-white"><a href="/crearusuario">Agregar</a></button>
        </div>
        <div class="flex justify-center w-[700px] border-b-2 border-gray-500 gap-x-60">
            <h2>Usuario</h2>   
            <h2>E-mail</h2> 
        </div>

        <?php 
        
        ?>
        {{-- @foreach ($usuario as $item)
         {{$item}}->nombre
            
        @endforeach --}}

    </div>
    
</body>
</html>
