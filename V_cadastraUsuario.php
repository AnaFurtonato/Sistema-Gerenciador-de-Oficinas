<?php
include('protect.php');
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../TGFATEC/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="../TGFATEC/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="../TGFATEC/css/bootstrap-reboot.min.css" />
        <link rel="stylesheet" href="../TGFATEC/css/style.css"/> 
        <title>Cadastro de Funcionários - SGO</title>
        <link rel="shortcut icon" type="imagex/png" href="../TGFATEC/images/icon.volante.svg">
    </head>

    <body>

   
    <?php include 'header.php'; ?> 

    <!-- nesta div temos o col para fazer a divisão da tela entre o conteúdo principal e o aside no header.php -->
        <div class="float-lg-right col-lg-9 container-fluid row justify-content-center">    <!-- formulário de login -->
            <main class="mt-5 mt-lg-4 col-12 col-sm-12 col-md-12 col-lg-10"> 

                <?php include ('message.php'); ?>

                <h4 class="col-12 m-3 pt-5 pb-4 border-bottom">Cadastro de Usuários</h4>

                <form action="Code_Usuario.php" method="POST" class="ml-3 ml-md-3 ml-lg-3 col-12 col-lg-12">
                

                    <div class=" col-12 col-md-6 float-md-left">
                        <label class="col-12 col-md-12 mt-5 mt-md-5" 
                    for="text">Nome do Funcionário:</label>
                    <input class="col-12 col-md-12  mt-md-1 p-3 textBox" 
                    type="text" name="nomeFuncionario" placeholder="Digite seu nome completo:" autofocus="true"/>
                    </div>
                    
                    <div class=" col-12 col-md-6 float-md-left">
                        <label class="col-12 col-md-12  mt-5 mt-md-5" 
                    for="text">Usuário:</label>
                    <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                    type="text" name="usuario" placeholder="Digite seu nome de Usuário:"/>
                    </div>


                    <div class=" col-12 col-md-6 float-md-left">
                        <label class="col-12 col-md-12 mt-5 mt-md-5" 
                    for="password">Senha:</label>
                    <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                    type="password" name="senha" placeholder="Digite sua Senha:"/>
                    </div>

                    <div class=" col-12 col-md-6 float-md-left">
                        <label class="col-12 col-md-12  mt-5 mt-md-5" 
                    for="email">E-mail:</label>
                    <input class="col-12 col-md-12 mt-md-1 p-3 textBox" 
                    type="email" name="email" placeholder="Digite seu E-mail:"/>
                    </div>


                    <div class="float-right col-5 col-md-3 mt-5 mt-md-5">
                    <button class="col-12 ml-1 p-3 btn btn-primary" type="submit" name="save_funcionario">Cadastrar</button>      
                    </div>

                </form>

            </main>

        </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
        
    </body>
</html>