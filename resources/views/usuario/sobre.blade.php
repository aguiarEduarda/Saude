<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

    <title>Sobre</title>

    <style>
        body 
        {
            margin: auto;
            font-family: 'Comfortaa', Comfortaa, 'Open Sans', Arial, Helvetica;
            color: black;
            background-color: #334437;
        }
        .home
        {
            list-style: none;
            align-items: right;
            position: absolute;
            left: 5px;
        }
        .home img
        {
            width: 30px;
            height: 30px; 
        }
        .img img
        {
            height: 1080px;
            width: 540px;
        }
        .corpo
        {
            color: rgb(216, 216, 216);
        }
    </style>  

</head>
<body>
    <a href="public" class="home"><img src="https://image.flaticon.com/icons/png/128/846/846398.png"/></a></li>
    <div class="container">
        <form method="GET" class="form" action="{{route('sobre')}}">
            @csrf
            <div class="row">
                <div class="col">
                    <div class="img">
                        <img src="https://i.pinimg.com/originals/74/4f/18/744f18682850a5d9b07fb481ed0f799a.jpg">  
                    </div>
                </div>
                <div class="col">
                    <div class="corpo">
                        <h1>Sobre</h1><br>
                        <p>
                            Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui Digite seu texto aqui 
                        </p>
                    </div>
                </div>
              </div>
        </form>
    </div>
</body>
</html> 