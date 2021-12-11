@extends("layout")
@section("conteudo")
    <h3 class="titulo">Brealy Shop, a melhor loja de beats!</h3>
    <h5 class="subtitulo">Compre seus beats de forma rápida, simples e segura!</h5>

    <h5 class="artistasTitulo">Artistas no Trending:</h5>
    <div class="row backArtistas">
        <div class="card" style="width: 15rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
            <img class="card-img-top" src=" {{asset('assets/images/nick_mira.jpg')}} " alt="Nick Mira">
            <div class="card-body">
              <h5 class="card-title">Nick Mira</h5>
              <p class="card-text">Nick produz beats principalmente para traps!</p>
            </div>
          </div>

          <div class="card" style="width: 15rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
            <img class="card-img-top" src="{{ asset('assets/images/picBrealyBeats.png') }}" alt="Brealy Beats">
            <div class="card-body">
              <h5 class="card-title">Brealy Beats</h5>
              <p class="card-text">Brealy é especialista com qualquer tipo de beat!</p>
            </div>
          </div>

          <div class="card" style="width: 15rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
            <img class="card-img-top" src="{{ asset('assets/images/mike-dean.jpg') }}" alt="Mick Dean">
            <div class="card-body">
              <h5 class="card-title">Mick Dean</h5>
              <p class="card-text">Mick produz beats principalmente para raps!</p>
            </div>
          </div>
    </div>
          <div class="row backSobreNos" id="sobrenos">
                <div class="card" style="width: 20rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
                    <div class="card-body">
                      <h5 class="card-title">Sobre nós</h5>
                      <p class="card-text">Nascemos a cerca de 5 anos e desde sempre passamos a maior confiança para nossos clientes! Por isso proporcionamos a melhor plataforma tanto para produtores quanto para clientes!</p>
                    </div>
                  </div>

                  <div class="card" style="width: 20rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
                    <div class="card-body">
                      <h5 class="card-title">Nosso objetivo</h5>
                      <p class="card-text">Nosso objetivo é proporcionar tanto aos produtores musicais quando aos clientes um ambiente onde ambos possam se entender e fecharem negócios com o nosso intermédio!</p>
                    </div>
                </div>
          </div>

    <div style="background-image: url({{ asset('assets/images/index1.jpg') }});" class="backAntesRodape">
        <h1 class="textoAntesRodape">Muitas pessoas já aproveitaram seus beats.</h1>
        <h1 class="textoAntesRodape">Venha aproveitar você também!</h1>

        <a href="/cadastro" class="linkAntesRodape">Cadastrar-se</a>
    </div>

    </div>
@endsection
