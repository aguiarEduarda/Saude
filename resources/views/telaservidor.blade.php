<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Servidor</title>

    <style>
        body 
        {
            font-family: 'Comfortaa', Comfortaa, 'Open Sans', Arial, Helvetica;
            color: #999999;
            background-color: #334437;
            background-size: 100%;

        }

        #menu
        {
            width: 100%;
            height: 50px;
            background: url('https://img.freepik.com/free-photo/green-leaves-pattern-background-flat-lay-nature-dark-green-tone-background_9635-1310.jpg?size=626&ext=jpg');
            background-size: 100%;
        }

        #menu ul
        {
            list-style: none;
            position: relative;
        }

        .home
        {
            position: absolute;
            left: -1px;
            font-size: 17px;
        }

        .home img
        {
            width: 15px;
            height: 15px; 
        }

        #menu ul li
        {
            width: 150px;
            float: right;
        }

        #menu a
        { 
            padding: 15px; 
            display: block;
            font-size: 15px;
            text-decoration: none;
            text-align: center;
            color: #999999;
        }

        #menu a:hover{
            background-color: #415846;
            color: #999999;
        }
        #divBusca
        {
            background-color:transparent;
            border:solid 1px;
            border-radius:15px;
            width:150px;
        }

        #txtBusca
        {
            float:left;
            background-color:transparent;
            padding-left:10px;
            font-style:italic;
            font-size: 13px;
            border:none;
            height:32px;
            width:60px;
            margin: auto;
        }
        .btnBusca 
        {
            position: relative;
            left: 15%;
            width: 15px;
            height: 15px;
        }
    </style>  

</head>
<body>
    <div class="row mt-2" id="menu">
        <ul>              
            <li><a href="public" class="home"><img src="https://image.flaticon.com/icons/png/128/846/846398.png"/></a></li>
            <li><a href="">
              <div id="divBusca">
                  <input type="text" id="txtBusca" placeholder="Buscar..."/>
                  <img src="https://www.pngkey.com/png/full/87-872187_lupa-search-icon-white-png.png" class="btnBusca"/>
              </div>
            </a></li>
            <li><a href="login">login</a></li>
            <li><a href="sobre">sobre</a></li>
        </ul>
      </div>
    <div class="container">  
            <form method="GET" class="form" action="{{route('telaServidor')}}">
                @csrf
                    
            </form>
    </div>
</body>
</html> 