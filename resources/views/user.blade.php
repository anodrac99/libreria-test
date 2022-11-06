<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/user.css')}}">
    <title>User info</title>
</head>
<body>
    <p>
        
    </p>
    <h1>Hola desde User</h1>
    <main>
        <section class='info-user'>
            <div class='user-data'>
                <p>Hola! usurio</p>
                <p>Reservas totales: 0</p>
            </div>
            <div>
                <img src="{{ asset('images/user-image.jpg')}}" alt="">
            </div>
        </section>
        <div class='reserve-button-container'>
            <a class='reserve-button' href="/user/reserve">Realizar nueva reserva</a>
        </div>
        <section class='user-reserves'>
            <div>
                <h4>Mis reservas</h4>
            </div>
            <div>
                datos
            </div>
        </section>
    </main>
</body>
</html>