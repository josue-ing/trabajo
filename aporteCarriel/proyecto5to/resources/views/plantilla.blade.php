<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link  href="{{ asset('/css/app.css')}}" rel="stylesheet" >






    <title>Mi primera aplicaccion en Laravel</title>
</head>
<body>
    <h1>Aplicacion en Laravel</h1>
    @section('contenido')
    @show
    <script src={{ url('/js/app.js')}}></script>

</body>
</html>
