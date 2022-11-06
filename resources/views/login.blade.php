<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css')}}">
    <title>Libreria</title>
</head>
<body>
    <h1>Bienvenidos a mi biblioteca</h1>

    <main class='base'>
            <form class='form' method='POST'>
                @csrf
                <label for="user">Correo</label>
                <input name='email' type="text">
                <label for="password">Contraseña</label>
                <input name='password' type="password">
                <button>Entrar</button>
            </form>
            <button class='create-acount'>Crear cuenta</button>
    </main>
</body>
</html>