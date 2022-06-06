<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                 <!-- styles -->
    <link rel="stylesheet" type="text/css" href="styleTemp.css"/>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link href="https://fontawesome.com/v5.15/icons?d=gallery&p=2" rel="stylesheet">
    <title>Cadastro</title>
    <script
    src="https://code.jquery.com/jquery-3.6.0.js"
    integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
</head>

<body>

          <div class="container">
        <div class="screen">
            <div class="screen__content">
                <form action="http://localhost/pfs_3tversionfinal/login/cadastro3t/cadastrar.php" method="post" class="login" 
                autocomplete="off">
                <h2>Cadastre-se</h2>
                <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="nome" placeholder="Nome">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="text" class="login__input" name="cpf" placeholder="Cpf">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="email" class="login__input" name="email" placeholder="E-mail">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-lock"></i>
                        <input type="text" class="login__input" name="celular" placeholder="Celular">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="text" class="login__input" name="login" placeholder="Login">
                    </div>
                    <div class="login__field">
                        <i class="login__icon fas fa-user"></i>
                        <input type="password" class="login__input" name="senha" placeholder="Senha">
                    </div>

                    <!--******************************************************-->
                    <button class="button login__submit">
                        <span class="button__text">Cadastrar</span>
                        <i class="button__icon fas fa-chevron-right"></i>
                    </button>				
                </form>
                <div class="social-login">
                    <h3></h3>
                    <div class="social-icons">

                    </div>
                </div>
            </div>
            <div class="screen__background"> 
                <span class="screen__background__shape screen__background__shape4"></span>
                <span class="screen__background__shape screen__background__shape3"></span>		
                <span class="screen__background__shape screen__background__shape2"></span>
                <span class="screen__background__shape screen__background__shape1"></span> 
            </div>		
        </div>
    </div>

     <!--Js-->
     <script src="https://cdn.jsdelivr.net/npm/less@4" ></script>
    <script src="../view/js/styles.js" ></script>
     <script src="mobile-navbar.js"></script>
</body>
</html>

