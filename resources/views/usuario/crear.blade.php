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
        <form action="api/crearusuario" method="post"
            class="flex flex-col gap-y-5 h-[400px] w-[600px] bg-white items-center rounded-md pt-6">
                <div class="flex flex-row gap-x-40">
                    <h1>Agregar Usuarios</h1> 
                    <button class="w-[100px] h-[30px] bg-blue-700 rounded-md text-xs text-white"><a href="/readUser">Volver al listado</a></button>
                </div>
            
            <div class="flex gap-3 ">
                <div class="flex flex-col">Nombre <input type="text" placeholder="ingrese el nombre" name="nombre" class="border-[2px] border-gray-300 pl-[5px] text-sm h-9 w-60">
                </div>
                <div class="flex flex-col"> Apellido <input type="text" placeholder="ingrese el apellido" name="apellido" class="border-[2px] border-gray-300 pl-[5px] text-sm h-9 w-60">
                </div>
               
            </div>
            Email <input type="text" placeholder="ingrese el E-mail" name="email" class="border-[2px] border-gray-300 pl-[5px] w-[400px] text-sm h-9">
            Contraseña <input type="text" placeholder="ingrese el Contraseña" name="contrasena" class="border-[2px] border-gray-300 pl-[5px] w-[250px] text-sm h-9">
            <input type="submit" class="w-[80px] h-[25px] bg-blue-500 text-white   rounded-md  ">
        </form>
    </div>
</body>

</html>

<div>

</div>
