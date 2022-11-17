<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="../css/paginicialcss.css">
    <title>Pag Inicial</title>
</head>

<body>
    <section class="bg-cao">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><img src="../img/LOGO_ARD-PETS-branca.png" alt="ArdPet">ArdPets</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active ">
                                <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">WikiPets</a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">Cães</a>
                                    <a class="dropdown-item" href="#">Gatos</a>
                                    <div class="dropdown-divider">
                                    </div>
                                    <a class="dropdown-item" href="#">Rações</a>
                                    <a class="dropdown-item" href="#">Guia</a>
                                </div>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link sn-nav" href="#sobrenos">Sobre Nós</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="#contato">Contato</a>
                            </li>

                        </ul>
                        <button class="btn btn-outline-primary my-2 my-sm-0 btn-sair" data-toggle="modal" 
                        data-target="#ExemploModalCentralizado2" type="submit"><img src="../img/perfil.png" alt="Perfil"></button>
                        
                        <div class="modal fade" id="ExemploModalCentralizado2" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Atualizar Perfil</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body ">
                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nome do Perfil</label>
                                            <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="Novo Nome">
                                        </div>
                                       
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Senha</label>
                                            <input type="password" class="form-control " id="exampleFormControlInput1" placeholder="Nova Senha">
                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-success ">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>

                        <button class="btn btn-outline-success my-2 my-sm-0 btn-sair" type="submit"><img src="../img/opcao-de-sair.png" alt="Sair"></button>
                    </div>
                </div>
            </nav>
        </header>


        <section class="meio-1">
            <div class="cadastro-pet col-4">
                <div class="col-5">
                    <img src="../img/LOGO_ARD-PETS.png" class="" alt="Foto_Logo_ArdPet">
                </div>
                <hr>
                <div class="col-6 pet-cdt">
                    <div class="frase-cdt">

                        @foreach($Pets as $pet)
                        <h1>{{ $pet->nome }}</h1>
                        <p>{{ $pet->porte }}</p>
                        <p>{{ $pet->porte }}</p>
                        @endforeach

                    </div>

                    <!-- Botão para acionar modal -->
                    <button type="button" class="btn btn-primary cadastrobtn" data-toggle="modal" data-target="#ExemploModalCentralizado">
                        Cadastrar
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="TituloModalCentralizado">Cadastro Pet</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <form>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Nome do Pet</label>
                                            <input type="text" class="form-control " id="exampleFormControlInput1" placeholder="Nome">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Porte do Animal</label>
                                            <select class="form-control" id="exampleFormControlSelect1">
                                                <option>Nenhum</option>
                                                <option>Mini</option>
                                                <option>Pequeno</option>
                                                <option>Médio</option>
                                                <option>Grande</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlInput1">Idade do Pet</label>
                                            <input type="number" class="form-control " id="exampleFormControlInput1" placeholder="Idade">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Insira a foto de seu Pet</label>

                                            <input type="file" name="CreatePetFoto" class="form-control-file ml-4" id="exampleFormControlFile1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlFile1">Hora:</label>
                                            <input type="time"  name="CreatePetTime" class="form-control">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                            <button type="submit" class="btn btn-success ">Enviar</button>

                                        </div>
                                    </form>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-success ">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </section>
    <section class="meio-2">
    </section>
    <!-- Sobre Nos -->
    <section class="sobrenos mt-2 " id="sobrenos">
        <div class="text-center txt-sn pt-2">
            <h1>Conheça a equipe</h1>
        </div>
        <div class="sn">
                <div class="mt-4 ml-5 p-3 text-center">
                    <div class="card pessoa" style="width: 15rem;">
                        <img class="card-img-top" src="../img/cezar.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Cezar Aparecido</h5>
                            <p class="card-text">Desenvolvimento do Protótipo em Arduino</p>
                            <hr>
                            <a href="#" class="img-sn"><img src="../img/facebook_verde.png" alt="Facebook"></a>
                            <a href="#" class="img-sn"><img src="../img/instagram_verde.png" alt="instagram"></a>
                            <a href="#" class="img-sn"><img src="../img/twitter_verde.png" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 p-3 text-center">
                    <div class="card pessoa" style="width: 15rem;">
                        <img class="card-img-top" src="../img/Joao.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">João Roberto</h5>
                            <p class="card-text">Desenvolvimento Back-End e Documentação</p>
                            <hr>
                            <a href="#" class="img-sn"><img src="../img/facebook_verde.png" alt="Facebook"></a>
                            <a href="#" class="img-sn"><img src="../img/instagram_verde.png" alt="instagram"></a>
                            <a href="#" class="img-sn"><img src="../img/twitter_verde.png" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 p-3 text-center">
                    <div class="card pessoa" style="width: 15rem;">
                        <img class="card-img-top" src="../img/Loane.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Loane Nicoly</h5>
                            <p class="card-text">Desenvolvimento Front-End e Gerente do projeto</p>
                            <hr>
                            <a href="#" class="img-sn"><img src="../img/facebook_verde.png" alt="Facebook"></a>
                            <a href="#" class="img-sn"><img src="../img/instagram_verde.png" alt="instagram"></a>
                            <a href="#" class="img-sn"><img src="../img/twitter_verde.png" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 p-3 text-center">
                    <div class="card pessoa" style="width: 15rem;">
                        <img class="card-img-top" src="../img/LucasA.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Lucas Adolfo</h5>
                            <p class="card-text">Desenvolvimento do Protótipo em Arduino</p>
                            <hr>
                            <a href="#" class="img-sn"><img src="../img/facebook_verde.png" alt="Facebook"></a>
                            <a href="#" class="img-sn"><img src="../img/instagram_verde.png" alt="instagram"></a>
                            <a href="#" class="img-sn"><img src="../img/twitter_verde.png" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
                <div class="mt-4 ml-3 p-3 text-center">
                    <div class="card pessoa" style="width: 15rem;">
                        <img class="card-img-top" src="../img/LucasR.jpg" alt="Imagem de capa do card">
                        <div class="card-body">
                            <h5 class="card-title">Lucas Ribeiro</h5>
                            <p class="card-text">Desenvolvimento Front-End e Documentação</p>
                            <hr>
                            <a href="#" class="img-sn"><img src="../img/facebook_verde.png" alt="Facebook"></a>
                            <a href="#" class="img-sn"><img src="../img/instagram_verde.png" alt="instagram"></a>
                            <a href="#" class="img-sn"><img src="../img/twitter_verde.png" alt="Twitter"></a>
                        </div>
                    </div>
                </div>
        </div>    
    </section>

    <!-- Contato -->
    <section class="contato" id="contato">
        <div class="col-12 text-center text-ctt pt-2">
            <h1>Contate-nos</h1>
            <p>Alguma dúvida ou observação? Basta nos escrever uma mensagem</p>
        </div>
        <div class="container ">
            <div class="row">
                <div class="col-12 ctt ">
                    <div class="col-7 ctt-left">
                        <img src="../img/dogs_ctt.jpg" alt="">
                    </div>
                    <div class="col-4 ctt-right text-left">
                        <h1>Entrar em contato</h1>
                        <p>Tem algum inquérito ou algum feedback para <br>
                            nós? Preencha o formulário abaixo para <br>
                            entrar em contato com nossa equipe
                        </p>
                        <form action="">
                            <div class="mb-3 ">
                                <label for="exampleFormControlInput1" class="form-label">Nome</label>
                                <input type="text" class="form-control ctt-form" id="exampleFormControlInput1" placeholder="Nome Completo">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">Email </label>
                                <input type="email" class="form-control ctt-form" id="exampleFormControlInput1" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Com o que podemos ajudar?</label>
                                <textarea class="form-control ctt-form" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary ctt-btn">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>

    <!-- Rodapé -->
    <footer class="bg-dark text-white text-center rodape ">
        <div class="container">
            <div class="row">
                <div class="col-12 footer">
                    <div class="logo_footer col-3 pb-3">
                        <h3 class="pt-3 text-left">ArdPets</h3>
                        <hr>
                        <img src="../img/LOGO_ARD-PETS-branca.png" alt="Logo_ArdPets">
                    </div>
                    <div class=" col-6">
                        <h3 class="pt-3 text-right">Sobre o Projeto</h3>
                        <hr>
                        <p class="text-right pt-4">
                            O ArdPets é um projeto realizado por alunos do curso de <br>
                            Análise e Desenvolvimento de sistemas, da Fatec Cruzeiro Profº Waldomiro May, onde utilizamos de
                            variados recursos para a construção de um sistema web, voltado á
                            alimentação dos pets, juntamente com um projeto em Arduino
                        </p>
                    </div>
                    <div class=" col-3">
                        <h3 class="pt-3 text-right"> Redes Sociais</h3>
                        <hr>
                        <div class="div-rs mt-4">
                            <a href="#" class="mr-3"><img src="../img/facebook.png" alt="facebook"></a>
                            <a href="#"><img src="../img/twitter.png" alt="twitter"></a>
                        </div>
                        <div class="div-rs mt-3">
                            <a href="#" class="mr-3"><img src="../img/instagram.png" alt="instagram"></a>
                            <a href="#"><img src="../img/google.png" alt="google"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr-footer">
        <div class="container">
            <div class="row">
                <div class="footer-end">
                    <p class="copyr">©2022 Copyright - ArdPets</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/jquery-3.5.1.min.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/app.js"></script>
</body>

</html>