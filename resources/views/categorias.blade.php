@extends("layout")
@section("conteudo")
    <h4 class="titulo">Categorias disponíveis:</h4>
    <div class="backCategorias">
        @if(isset($lista_categorias) && count($lista_categorias) > 0)
            @foreach ($lista_categorias as $categorias)
                <a href="{{ route('id_categoria', ['id_categoria' => $categorias->id]) }}" class="botoesCategorias
                    @if ($id_categoria == $categorias->id)
                    categoriaAtiva
                    @endif">{{ $categorias->categoria }}</a>
            @endforeach
        @endif
    </div>

        @if (isset($lista_beats) && $id_categoria != 0)
            <h4 class="titulo" style="margin-top: 1%;">Beats disponíveis:</h4>
            <div class="container">
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-2 mb-2 container cardsBeats">
                    @foreach ($lista_beats as $beats)
                        <div class="col" style="margin-top: 1%;">
                            <div class="card" style="width: 15rem; margin-left: 3%; margin-top: 0.5%; border: 2px solid #DAA520; background-color: #0C0C0C; color: #fff;">
                                <audio controls class="audioBeats" controlsList="nodownload">
                                <source src="{{ asset('assets/audios/' . $beats->audio) }}" type="audio/mp3">
                                </audio>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $beats->nome }}</h5>
                                    <p class="card-text valorBeat">R${{ number_format($beats->preco, 2, ',', '.') }}</p>
                                    <p class="card-text">Duração: {{ $beats->duracao }}min</p>
                                    <p class="card-text">By: {{ $beats->artista }}</p>
                                    <a href="{{ route('add_carrinho', ['idprod' => $beats->id]) }}" class="botoesCard">Adicionar ao carrinho</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
