@extends("layout")
@section("conteudo")
    <h4 class="titulo">Área do Cliente - Cadastro</h4>
    <div style="background-image: url('{{ asset('assets/images/backLogin.png') }}')" class="backFormLogin">
        <form class="formCadastro" action="{{ route('cadastro') }}" method="POST">
            @if(isset($msg))
                <p style="color: #0B8AFF; margin-top: 100px">{{ $msg }}</p>
            @endif

            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            <label for="">Nome:</label>
            <input type="text" name="nome_cadastro" placeholder="Digite seu nome, ex: João Silva" class="camposLogin">
            <label for="">Email:</label>
            <input type="email" name="email_cadastro" placeholder="Digite seu email, ex: joao@gmail.com" class="camposLogin">
            <label for="">Senha:</label>
            <input type="password" name="senha_cadastro" placeholder="Digite sua senha" class="camposLogin">
            <label for="">Confirmar senha:</label>
            <input type="password" name="csenha_cadastro" placeholder="Digite sua senha novamente" class="camposLogin">
            <input type="submit" value="Cadastrar" class="botaoLogin">
        </form>
    </div>
    <div class="itensCadastro">
        <p>Já possui uma conta? <a href="/login" class="linksLogin">Faça login!</a></p>
    </div>
@endsection
