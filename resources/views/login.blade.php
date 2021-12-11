@extends("layout")
@section("conteudo")
    <h4 class="titulo">Área do Cliente - Login</h4>
    <div style="background-image: url('{{ asset('assets/images/backLogin.png') }}')" class="backFormLogin">
        <form class="formLogin" action="{{ route('login') }}" method="POST">
            @if(isset($msg))
                <p style="color: #0B8AFF;">{{ $msg }}</p>
            @endif

            <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />

            <label for="">Email:</label>
            <input type="email" name="email_login" placeholder="Digite seu email" class="camposLogin">
            <label for="">Senha:</label>
            <input type="password" name="senha_login" placeholder="Digite sua senha" class="camposLogin">
            <input type="submit" value="Entrar" class="botaoLogin">
        </form>
    </div>
    <div class="itensLogin">
        <a href="" class="linksLogin">Esqueci minha senha</a>
        <p>Não possui uma conta? <a href="/cadastro" class="linksLogin">Cadastre-se!</a></p>
    </div>
@endsection
