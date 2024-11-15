<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('crud/css/style.css')}}">
    <title>INICIO</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body id="body">
    <header class="header">
        <nav class="nav">
            <img id="img" src="https://placehold.co/100" alt="Logo">
        <ul class="ul">
            <li class="li"><a id="a" href="/clientes"><i class="fa-solid fa-users"></i>CLIENTES</a></li>
            <li class="li"><a id="a" href="/empleados"><i class="fa-solid fa-user-tie"></i>EMPLEADOS</a></li>
            <li class="li"><a id="a" href="#contactos"><i class="fa-solid fa-comment"></i>REDES SOCIALES</a></li>
        </ul>
        </nav>
        <marquee id="marquee" behavior="" direction="right"><h1>INICIO</h1></marquee>
    </header>
    <main id="main">
        <h2 id="h2">TABLAS DE INFORMACIÓN</h2>
        <section class="table-clientes">
            <h3>CLIENTES</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th class="th" scope="col">#CLIENTE</th>
                        <th class="th" scope="col">NOMBRE</th>
                        <th class="th" scope="col">APELLIDO</th>
                        <th class="th" scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getClientes as $Clientes)
                    <tr>
                        <th class="th" scope="row">{{$Clientes->id}}</th>
                        <td class="td">{{$Clientes->nombre}}</td>
                        <td class="td">{{$Clientes->apellido}}</td>
                        <td class="td">
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
                        <th class="th" scope="col">#EMPLEADO</th>
                        <th class="th" scope="col">NOMBRE</th>
                        <th class="th" scope="col">APELLIDO</th>
                        <th class="th" scope="col">ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($getEmpleados as $Empleados)
                    <tr>
                        <th class="th" scope="row">{{$Empleados->id}}</th>
                        <td class="td">{{$Empleados->nombre}}</td>
                        <td class="td">{{$Empleados->apellido}}</td>
                        <td class="td">
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
    <footer id="contactos" class="redes-sociales">
    <h3 id="h3">CONTACTOS</h3>
    <div class="contactos-container">
        <div class="contacto">
            <h4><i class="fa-solid fa-heart"></i> TATIANA <i class="fa-solid fa-heart"></i></h4>
            <ul class="ul">
                <li class="li"><a id="a" target="_blank" href="https://www.facebook.com/tatiana.lizbeth.505">FACEBOOK</a></li>
            </ul>
        </div>
        <div class="contacto" id="contacto-2">
            <h4><i class="fa-solid fa-heart"></i> TOR23 <i class="fa-solid fa-heart"></i></h4>
            <div class="div-ul">
                <ul class="ul">
                    <li class="li"><a id="a" target="_blank" href="https://www.youtube.com/@TOR23">YOUTUBE</a></li>
                    <li class="li"><a id="a" target="_blank" href="https://www.facebook.com/TOR23LOL">FACEBOOK</a></li>
                </ul>
                <ul class="ul">
                    <li class="li"><a id="a" target="_blank" href="https://www.instagram.com/tor23lol/">INSTAGRAM</a></li>
                    <li class="li"><a id="a" target="_blank" href="https://www.tiktok.com/@tor23lol">TIKTOK</a></li>
                </ul>
            </div>
        </div>
        <div class="contacto">
            <h4><i class="fa-solid fa-heart"></i> MARJORIE <i class="fa-solid fa-heart"></i></h4>
            <ul class="ul">
                <li class="li"><a id="a" target="_blank" href="https://www.facebook.com/marjorie.simbana.50">FACEBOOK</a></li>
            </ul>
        </div>
    </div>
</footer>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>