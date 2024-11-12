<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMPLEADOS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <img src="https://placehold.co/100" alt="Logo">
            <ul>
                <li><a href="/home">INICIO</a></li>
                <li><a href="/empleados">EMPLEADOS</a></li>
                <li><a href="#redes-sociales">REDES SOCIALES</a></li>
            </ul>
        </nav>
        <marquee behavior="" direction="right"><h1>CLIENTES</h1></marquee>
    </header>
    <main>
        <h1>EDITAR</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#CLIENTE</th>
                    <th scope="col">NOMBRE</th>
                    <th scope="col">APELLIDO</th>
                    <th scope="col">ACCIONES</th>
                </tr>
            </thead>
            <tbody>
                @foreach($getClientes as $Clientes)
                <tr>
                    <th scope="row">{{$Clientes->id}}</th>
                    <td>{{$Clientes->nombre}}</td>
                    <td>{{$Clientes->apellido}}</td>
                    <td>
                        <a href="/edit/{{$Clientes->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>