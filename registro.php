<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon/pw3.ico">

    <title>Criar conta - PW3</title>

    <!-- Principal CSS do Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Estilos customizados para esse template -->
    <link href="css/starter-template.css" rel="stylesheet">

    <!-- FONTAWESOME -->
    <script src="https://kit.fontawesome.com/77f3dd62a7.js" crossorigin="anonymous"></script>

</head>

<body cz-shortcut-listen="true" class="bg-secondary">

    <main role="main" class="container">

        <div class="row">
            <div class="col-sm-4 offset-sm-4 bg-white mt-5 border rounded bg-white">
                <h1 class="h4 text-center">
                    <a href="index.php">PW III</a>
                </h1>
                <p class="login-box-msg text-center">Crie sua conta gratuita</p>

                <form action="" method="post" id="formCriaConta">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                        </div>
                        <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome completo" aria-label="nome" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                        </div>
                        <input type="text" name="email" id="email" class="form-control" placeholder="E-mail" aria-label="E-mail" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" aria-label="Senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span>
                        </div>
                        <input type="password" name="confirmaSenha" id="confirmaSenha" class="form-control" placeholder="Repita a senha" aria-label="Repita a senha" aria-describedby="basic-addon1">
                    </div>

                    <div class="form-group form-check">
                        <input type="checkbox" name="termos" class="form-check-input" id="termos">
                        <label class="form-check-label" for="exampleCheck1">
                            Aceitar os <a href="#" data-toggle="modal" data-target="#modalTermos">termos</a>
                        </label>
                    </div>

                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                </form>

                <p class="mb-1">
                    <a href="login.php">Já tenho uma conta</a>
                </p>

            </div>
        </div>

    </main><!-- /.container -->

<!-- Modal -->
<div class="modal fade" id="modalTermos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Termos PW3</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem quasi at magnam mollitia cupiditate assumenda, error quod ut doloribus ex ea nemo accusantium necessitatibus? Enim ipsa reiciendis cumque accusantium necessitatibus.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem beatae pariatur corrupti nostrum alias recusandae? Porro, magnam a deserunt natus illo cupiditate aut cumque nam earum minima voluptas accusamus iste.</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>

    <!-- Principal JavaScript do Bootstrap
    ================================================== -->
    <!-- Foi colocado no final para a página carregar mais rápido -->
    <script src="js/jquery-3.js"></script>
    <script src="js/bootstrap.js"></script>

</body>

</html>