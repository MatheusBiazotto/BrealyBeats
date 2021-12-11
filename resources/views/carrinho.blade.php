@extends("layout")
@section("conteudo")
<div class="container">
    <h4 class="titulo">Seu carrinho:</h4>
    @if (isset($cart) && count($cart) > 0)
      <table class="table" style="color: #fff; background-color: #0C0C0C; margin-top: 2%">
        <thead style="color: #fff; background-color: #0C0C0C">
          <tr>
            <th>Nome</th>
            <th>Artista</th>
            <th>Preço</th>
            <th>Remover</th>
          </tr>
        </thead>
        <tbody>
        <p style="display: none">{{ $total = 0 }}</p>
          @foreach ($cart as $indice=>$itens)

          <p style="display: none">{{ $total += $itens->preco }}</p>
            <tr>
              <td>{{$itens->nome}}</td>
              <td>By: {{ $itens->artista }}</td>
              <td>{{'R$ ' . number_format($itens->preco, 2, ',', '.')}}</td>
              <td><a class="btn btn-danger btn-sm" href="{{ route('delete_carrinho',['iditem' => $indice]) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                  </svg>
              </a></td>
            </tr>
          @endforeach
          <tr>
              <td></td>
              <td>Valor total: </td>
              <td style="color: #DAA520;">{{'R$ ' . number_format($total, 2, ',', '.') }}</td>
              <td></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="backBtFinalizar">
        <a href="{{ route('compra_ok') }}" class="btFinalizarCompra">Finalizar compra</a>
    </div>
    @else
        <h4 class="subtitulo">Seu carrinho está vazio :(</h4>
    </div>
    @endif

@endsection
