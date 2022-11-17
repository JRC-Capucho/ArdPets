<x-layout title="Login ArdPet">
    <main>
        <div class="container">
            <div class="col-10 offset-1 bg-all">
                <div class="col-4 div-left">
                    <div class="div-img-left">
                        <img src="{{asset('img/logo_teste.png')}}" alt="Logo-ArdPets">
                    </div>
                    <div class="titulo">
                        <h1>Login</h1>
                        <hr>
                    </div>
                    <form method="post" action="/acesso">
                        @csrf
                        <div class="single-input">
                            <input type="email" class="input" id="nome" name="IndexUserEmail" maxlength="25" required>
                            <label for="Nome">Nome</label>
                        </div>
                        <div class="single-input">
                            <input type="password" class="input" id="senha" name="IndexUserPasswd" maxlength="10" required>
                            <label for="Senha">Senha</label>
                        </div>
                        <div class="botao col-12">

                            <div class="login-btn col-5">
                                <button type="submit" value="Enviar" name="enviarbtn" class="btn btn-outline-secondary px-3 loginbtn ">Login</button>
                            </div>
                            <div class="limpar-btn col-6">
                                <button type="reset" value="limpar" class="btn btn-outline-secondary px-3 limparbtn ">Limpar</button>
                            </div>
                        </div>
                    </form>
                    <div class="redes-sociais col-12">
                        <p>©2022 - ArdPets</p>
                    </div>
                </div>
                <div class="col-8 div-right p-0">
                    <div class="col-12 topo p-0">
                        <div class="pt-3">
                            <a href="/criar-conta">
                                <button class="btn btn-outline-secondary px-3 cadastrobtn ">Cadastrar</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 offset-2 nameAP">
                        <p>ArdPet</p>
                    </div>
                    <div class="col-8 hr-name">
                        <hr>
                    </div>

                    <div class="col-9 offset-2 textin">
                        <p>O ArdPets tem como finalidade amenizar um problema real que acontece há tempos,
                            a falta de administração do tempo, tendo como foco principal contribuir para
                            alimentação e proporcionar mais segurança aos animais...</p>
                    </div>
                    <div class="col-4 offset-2">

                        <!-- Botão para acionar modal -->
                        <button type="button" class="btn btn-primary lermaisbtn" data-toggle="modal" data-target="#ExemploModalCentralizado">
                            Ler mais
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalCentralizado">ArdPets</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <img src="{{ asset('img/logo_teste_escuro.png') }}" class="modalimg" alt="Foto_Logo_ArdPet">
                                        <p class="p-modal">O ArdPets tem como finalidade amenizar um problema real que acontece há tempos,
                                            a falta de administração do tempo, tendo como foco principal contribuir para
                                            alimentação e proporcionar mais segurança aos animais, com um diferencial custo-benefício.
                                            <br>
                                            Sendo Utiliado por donos de Pets que precisem ganhar um pouco mais de tempo no seu dia a dia,
                                            para que eles nao tenham tantas preocupaçoes em alimentar manualmente seus Pets.
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>

    <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }} "></script>
</x-layout>