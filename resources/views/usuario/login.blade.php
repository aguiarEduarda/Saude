<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

    <title>Login</title>

    <style>
        body 
        {
            margin: auto;
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

        #opcoes 
        {
            position:;
            bottom: 0;
            color: #999999;
            width: 100%;
            height: 50px;    
            text-align: left;
            line-height: 50px;
        }

        .container
        {   
            width: 100%;    
            padding: 0em 35em;
            border-radius: 5px;
        }

        .form-group
        {
            margin-bottom: 1em;
            transition: all .3s;
        }

        .form-label
        {
            font-size: 1em;
            color: #aaa;
            display: block;
            opacity: 1;
            transform: translateY(-1.25em);
            transform-origin: 0 0;
            transition: all .3s;
        }

        .form-control
        {
            box-shadow: none;
            color:rgb(216, 219, 204);
            background-color: #334437;
            border-width: 1px; 
            border-radius: 0px;
            border-bottom-color: #999999; 
            border-style: none none solid none;
            width: 20%;
            transition: .5s;
            padding: 1px;
        }

        .form-control::placeholder
        {
            color: transparent;
        }

        .form-control:focus
        {
            box-shadow: none;
            outline: none;
            border-color: rgb(86, 88, 80);
        }

        .form-control:focus + .form-label,
        .form-control:not(:placeholder-shown) + .form-label
        {
            transform: translateY(-1.5em) scale(.8);
        }

        .btn {
        box-sizing: border-box;
        background-color: transparent;
        display: flex;
        font-size: 1.2rem;
        font-weight: 200;
        line-height: 1;
        margin: 20px;
        padding: 0.6em 1.4em;
        text-decoration: none;
        text-align: center;
        text-transform: uppercase;
        font-family: 'Montserrat', sans-serif;
        font-weight: 700;
        }

        .sixth
        {
        border-radius: 3em;
        border-color: #2ecc71;
        color: #2ecc71;
        background-image: -webkit-linear-gradient(top, transparent 50%, #2ecc71 50%);
        background-image: linear-gradient(to bottom, transparent 50%, #2ecc71 50%);
        background-position: 0% 0%;
        background-size: 210%;
        -webkit-transition: background 150ms ease-in-out, color 150ms ease-in-out;
        transition: background 150ms ease-in-out, color 150ms ease-in-out;
        }
        .sixth:hover {
        color: #bafac7;
        background-position: 0 100%;
        }
    </style>  

</head>
<body>

       <div class="row mt-2" id="menu">
          <ul>              
              <li><a href="public" class="home"><img src="https://image.flaticon.com/icons/png/128/846/846398.png"/></a></li>
              <li><a href="cadastro">cadastre-se</a></li>
              <li><a href="login">login</a></li>
              <li><a>sobre</a></li>
          </ul>
        </div>   
    <div class="container">
        <h1>Login</h1>  
            <form method="POST" action="{{route('salvarLogin')}}">
                @csrf
                  <br>
                  <div class="form-group">
                      <input type="text" class="form-control"  placeholder="Jane Doe" id="cnpj" name="cnpj">
                      <label for="cnpj" class="form-label">cnpj</label>
                  </div>
                  <br>
                    <div class="form-group">                        
                        <input type="password" class="form-control" placeholder="Jane Doe" id="senha" name="senha">
                        <label for="senha" class="form-label">senha</label>
                      </div>

                    <button type="submit" class="btn sixth">entrar</button>
                <div class="row mt-2" id="opcoes">
                    <p><a>Esqueci minha<a href="recuperacao" style="color: #88b4d8"> senha.</a></a></p> 
                    <p><a>Não possui uma conta?<a href="cadastro" style="color: #88b4d8"> cadastre-se.</a></a></p>
                </div>
          </form>
    </div>
</body>
</html> 