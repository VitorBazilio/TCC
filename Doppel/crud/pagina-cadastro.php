<?php

session_start();

if(!isset($_SESSION["email"]) || !isset($_SESSION["senha"])){
		header("Location: ../index.php");
		exit;
		}else{
		
?>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="icon" href="../img/top.ico" type="image/x-icon" style="font-size:6em;" />
    <link rel="shortcut icon" href="../img/top.ico" type="image/x-icon" style="font-size:6em;" />
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstrap.css">
    <link rel="stylesheet" href="../node_modules/bootstrap/compiler/bootstyle.css">
    <link rel="stylesheet" href="../Fontawasome/Fontawasome/css/fontawesome-all.css">
    <title>DoppelNews</title>
    <?php
    echo"
    <style>
     #foot{
            position: absolute; 
            bottom: 0;
        }
    </style>
    ";
        ?>
</head>

<body>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">

        <div class="container">



            <a class="navbar-brand h1 nb-0 " href="../index.php">DoppelNews</a>




            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse   text-center" id="navbarSite">
                <div class=" ml-5 mr-auto">
                    <ul class=" navbar-nav mr-auto ml-5  ">
                        <li class="nav-item  ">
                            <a class="nav-link " id="orange" href="../not_html/news.php">News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="blue" href="../sal/salas.php">Salas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="red" href="../perso/persons.php">Personagens</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="gold" href="../help/ajuda.php">Ajuda</a>
                        </li>



                    </ul>
                </div>



                <form class="form-inline">
                    <input class="form-control ml-5 mr-3" type="search" placeholder="Buscar...">

                </form>
                <?php echo "<span id='orange'>"; echo "Olá,  "; echo "</span>"; echo "<span id='orange'>"; echo  $_SESSION['nm_usuario']; echo "</span>";?>
                <ul class="navbar-nav ">

                    <li class="nav-item dropdown dropright">

                        <a class="nav-link dropdown-toggle component-active-bg " href="#" data-toggle="dropdown" id="navDrop">
                            <i class="fab fa-gitlab " style="font-size:36px;color:#ff550a;"></i>
                        </a>
                        <div class="dropdown-menu  ">
                            <a class="dropdown-item" href="criar_not.php">Criar notícia</a>
                            <a href="../crud/pagina-alterar.php" class="dropdown-item">Atualizar</a>
                            <a Href="../crud/pagina-excluir.php" class="dropdown-item">Deletar</a>
                            <a href="../crud/pagina-listagem-dados.php" class="dropdown-item">Listar</a>
                            <a href="../crud/pagina-cadastro.php" class="dropdown-item">Inserir</a>
                            <form action="sair.php">
                                <input type="submit" value="Sair" name="Sair" class="dropdown-item">
                            </form>


                        </div>
                    </li>

                </ul>

            </div>
        </div>


    </nav>

    <div class="container bg-dark my-3" id="orange">

        <div class="row">

            <div class="col-12 text-center my-3" id="orange">

                <h2>Cadastro</h2>
                <form action="../crud/cadastrar.php" method="POST">
                    <br><br>
                    <label>Nick:</label><input type="text" name="nm_usuario" class="form-control" required id="nm_usuario">
                    <label>Email:</label><input type="email" name="email" class="form-control" required id="email">
                    <label>Senha:</label><input type="password" name="senha" class="form-control" required id="senha">
                    <label>Confirmar Senha:</label><input type="password" name="confirmasenha" class="form-control" required id="confirmasenha">
                    <br>
                    <button type="submit" class="btn btn-dark form-inline" id="orange">Enviar</button>
                </form>


            </div>
        </div>
    </div>



  <footer class="col-lg-12  col-sm-9 text-center" id="foot">
        <div class="row mn-2 bg-dark">
            <div class="col-lg-2 bg-dark">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>News</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="perfil_usuario.php?categoria=Games">Games</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="perfil_usuario.php?categoria=Anime">Anime</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="perfil_usuario.php?categoria=Hqs">Hqs</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="perfil_usuario.php?categoria=Manga">Mangas</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>Salas</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../sal/salas.php?categoria=Novas">Novas</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../sal/salas.php?categoria=Populares">Populares</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../sal/salas.php?categoria=Mestres">Mestres</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../sal/salas.php?categoria=Sorte">Sorte</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>Personagens</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../perso/persons.php?categoria=Meus">Meus</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../perso/persons.php?categoria=Melhores">Melhores</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../perso/persons.php?categoria=Exemplos">Exemplos</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../perso/persons.php?categoria=Populares">Populares</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>Ajuda</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../help/Ajuda.php?categoria=DnD">D&amp;D</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../help/Ajuda.php?categoria=DnD">Livros</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../help/Ajuda.php?categoria=Coment">Fale Conosco</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../help/Ajuda.php?categoria=Pergunt">Perguntas</a></li>
                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>Sobre Nos</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Facebook</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Instagram</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Twitter</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Sobre Nos</a></li>

                </ul>
            </div>
            <div class="col-lg-2">
                <ul class="list-group bg-dark" id="back-bg">
                    <li class="list-group-item bg-dark" id="orange">
                        <h3>Ajude-nos</h3>
                    </li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Facebook</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Instagram</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="">Twitter</a></li>
                    <li class="list-group-item bg-dark" id="orange"><a href="../help/Ajuda.php?categoria=hl">E-mail</a></li>

                </ul>
            </div>
        </div>
        <div class="container mt-2">
             <a href=""> © 2017-2018 DoppelNews | LinkMcCall | Rafa_Lopi | Versão 1.0 <br></a>
            <a href="../help/dir_aut.php"> Todas as imagens de filmes, séries e etc são marcas registradas dos seus respectivos proprietários.</a>
        </div>
    </footer>


    <!--modal-->



    <script type="text/javascript">
        function validar() {
            var senha = cadastro.senha.value;
            var confirmasenha = cadastro.confirmasenha.value;
            if (senha != confirmasenha) {
                alert('Senhas diferentes');
                cadastro.confirmasenha.focus();
                return false;
            }

        }

    </script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="../node_modules/jquery/dist/jquery.js"></script>
    <script src="../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../node_modules/bootstrap/dist/js/bootstrap.js"></script>

</body>

</html>
<?php }?>
