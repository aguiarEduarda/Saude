<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Cadastro</title>

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
        #opcoes 
        {
            position: absolute;
            bottom: 0;
            color: #999999;
            width: 100%;
            height: 50px;    
            text-align: center;
            line-height: 50px;
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
                <h1>Cadastro</h1>  
            </div> 
            <div class="row">
              <form method="POST" action="{{route('salvarUsuario')}}">
                  @csrf
                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">nome da instituição</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="nome" name="nome">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-date-input" class="col-2 col-form-label">cnpj</label>
                    <div class="col-10">
                      <input type="number" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="cnpj" name="cnpj">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">bairro</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="bairro" name="bairro">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">rua</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="rua" name="rua">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">número</label>
                    <div class="col-10">
                      <input type="number" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="numero" name="numero">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">complemento</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="complemento" name="complemento">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">instagram</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="instagram" name="instagram">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">facebook</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="facebook" name="facebook">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">e-mail</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="email" name="email">
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="example-text-input" class="col-2 col-form-label">twitter</label>
                    <div class="col-10">
                      <input type="text" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="twitter" name="twitter">
                    </div>
                  </div>

                    <div class="form-group row">
                      <label for="example-password-input" class="col-2 col-form-label">senha</label>
                      <div class="col-10">
                        <input type="password" style="background-color: #334437; border-bottom-color: #999999; border-top-width: 0px; border-right-width: 0px; border-left-width: 0px;" class="form-control" id="senha" name="senha">
                      </div>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">salvar</button>
            <div class="row mt-2" id="opcoes">
                <p><a>Já possui uma conta? <a href="login"> entre.</a></a></p>
            </div>
</body>
</html> 