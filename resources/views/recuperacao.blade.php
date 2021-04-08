<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Recuperar senha</title>

    <style>
        body 
        {
            margin: auto;
            font-family: 'Comfortaa', Comfortaa, 'Open Sans', Arial, Helvetica;
            color: #999999;
            background-color: #334437;
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
    </style>  

</head>
<body>

    <div class="container">
       <div class="row mt-2" id="menu">
          <ul>              
              <li><a href="public" class="home"><img src="https://image.flaticon.com/icons/png/128/846/846398.png"/></a></li>
              <li><a href="cadastro">cadastre-se</a></li>
              <li><a href="login">login</a></li>
              <li><a>sobre</a></li>
          </ul>
        </div>
        <div class="row mt-2">
            <div class="row">
                <h1>Recuperação de senha</h1> 
                <p><a>Por favor informe o e-mail de cadastro, um código será enviado para que a senha possa ser redefinida.</a></p> 
            </div> 
            <div class="row">
              <form method="POST" action="{{route('recuperarSenha')}}">
                  @csrf
                  <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">e-mail</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="cnpj" name="cnpj">
                    </div>
                  </div>

                  <button type="submit" class="btn btn-outline-dark">enviar</button>

</body>
</html> 