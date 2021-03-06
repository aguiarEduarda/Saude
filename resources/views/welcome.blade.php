<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Página Inicial</title>

    <style>
        body 
        {
            margin: auto;
            font-family: 'Comfortaa', Comfortaa, 'Open Sans', Arial, Helvetica;
            color: black;
            background: url('https://i.pinimg.com/originals/9b/8a/57/9b8a572e969692171da600fc5c1aac94.png');
            background-size: 100%;
        }
        *{
            margin: 0;
            padding: 0;
        }
        #menu
        {
            width: 100%;
            height: 50px;
            background-color: #334437;
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
            padding: 14px; 
            display: block;
            font-size: 15px;
            text-decoration: none;
            text-align: center;
            background-color:#334437;
            color: #999999;
        }
        #menu a:hover{
            background-color: #415846;
            color: #999999;
        }
        #header
        {
          position: absolute;  
          top: 50%;
          left: 50%;
          transform: translate(-50%,-50%);
          text-align: center;
        }
        #header span
        {
            font-size: 52px;
            color: #999999;   
            font-weight: bold;
        }
        footer {
            position: absolute;
            bottom: 0;
            color: #999999;
            width: 100%;
            height: 50px;    
            text-align: center;
            line-height: 50px;
            font-size: 15px;
        }
    </style>  

</head>
<body>

    <div class="container">
       <div class="row mt-2" id="menu">
          <ul>              
              <li><a href="public" class="home"><img src="https://image.flaticon.com/icons/png/128/846/846398.png"/></a></li>
              <li><a href="cadastro">cadastre-se</a></li>
              <li><a href="login">login</a></li>
              <li><a href="sobre">sobre</a></li>
          </ul>
        </div>

        <div class="row mt-2" id="header">
            <span class="title" style="color: #eceaea;">Sistema da Saúde</span>
            <button type="submit" class="btn btn-outline-dark">navegar</button>
        </div> 
        <footer>
            Atencão! O cadastro é apenas para intituições de saúde pública.
        </footer>

    </div> 
</body>
</html> 