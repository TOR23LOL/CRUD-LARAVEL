<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/style.css')}}">
    <title>INICIO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav>
            <img src="https://placehold.co/100" alt="Logo">
            <ul>
                <li><a href="/clientes">CLIENTES</a></li>
                <li><a href="/empleados">EMPLEADOS</a></li>
                <li><a href="#contactos">REDES SOCIALES</a></li>
            </ul>
        </nav>
        <marquee behavior="" direction="right"><h1>INICIO</h1></marquee>
    </header>
    <main>
        <h2>TABLAS DE INFORMACIÓN</h2>
        <section class="table-clientes">
            <h3>CLIENTES</h3>
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
                            <a href="/editCL/{{$Clientes->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            <form action="/deleteCL/{{$Clientes->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
        <section class="table-empleados">
            <h3>EMPLEADOS</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#EMPLEADO</th>
                        <th scope="col">NOMBRE</th>
                        <th scope="col">APELLIDO</th>
                        <th scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getEmpleados as $Empleados)
                    <tr>
                        <th scope="row">{{$Empleados->id}}</th>
                        <td>{{$Empleados->nombre}}</td>
                        <td>{{$Empleados->apellido}}</td>
                        <td>
                            <a href="/editEM/{{$Empleados->id}}"><button type="button" class="btn btn-primary">Editar</button></a>
                            <form action="/deleteEM/{{$Empleados->id}}" method="post">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </main>
    <footer id="contactos">
        <h3>CONTACTOS</h3>
        <div>
            <h4>TATIANA</h4>
            <ul>
                <li><a href="https://www.facebook.com/tatiana.lizbeth.505">FACEBOOK</a></li>
            </ul>    
        </div>
        <div>
            <h4>TOR23</h4>
            <ul>
                <li><a href="https://www.youtube.com/@TOR23">YOUTUBE</a></li>
                <li><a href="https://www.facebook.com/TOR23LOL">FACEBOOK</a></li>
                <li><a href="https://www.instagram.com/tor23lol/">INSTAGRAM</a></li>
                <li><a href="https://www.tiktok.com/@tor23lol">TIKTOK</a></li>
            </ul>
        </div>
        <div>
            <h4>MARJORIE</h4>
            <ul>
                <li><a href="https://www.facebook.com/marjorie.simbana.50">FACEBOOK</a></li>
            </ul>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>