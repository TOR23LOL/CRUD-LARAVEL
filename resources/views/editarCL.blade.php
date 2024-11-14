<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR CLIENTE</title>
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
        <a href="/home"><button>REGRESAR A CLIENTES</button></a>
    </header>
    <main>
        <h2>EDITAR CLIENTES</h2>
        <form action="/updateCL/{{$editCliente->id}}" method="post">
            @csrf
            @method('put')
            <label for="nombre">Nombre</label><br>
            <input value="{{$editCliente->nombre}}" type="text" name="nombre" id="nombre"><br>
            <label for="apellido">Apellido</label><br>
            <input value="{{$editCliente->apellido}}" type="text" name="apellido" id="apellido"><br>
            <hr>
            <button type="submit">Actualizar</button>
        </form>
    </main>
    <footer>
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