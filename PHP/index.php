<?php
session_start();

?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>

<body>
 <!--<div class="jumbotron">
  <h1 class="display-4">Hello, world!</h1>
  <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
  <hr class="my-4">
  <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
  <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
</div>!-->
        <div class="card text-center" style="margin-left: 10vw; margin-right: 20vw;">
            <div class="col-sm-auto">
                <h3>Sistema de Login</h3>
                <?php
                            if(isset($_SESSION['nao_autenticado'])):
                            ?>
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Ops!</h4>
                    <p>Vc errou a sua autenticação e não poderá prosseguir ("-")</p>
                    <hr>
                    <p class="mb-0">Tente novamente e veja se está tudo correto (' 3 ')!</p>
                </div>
                <?php
                            endif;
                            unset($_SESSION['nao_autenticado']);
                            ?>
                <form>
                    <div class="form-group">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Digite sua senha">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <div style="margin-bottom: 2vw;"><button type="submit" class="">Entrar</button></div>
                </form>
            </div>
        </div>
</body>

</html>
