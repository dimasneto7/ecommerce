@extends("layout")
@section("conteudo")
  <h3>Carrinho</h3>

  @if(isset($cart) && count($cart) > 0)

  <table class="table">
      <thead>
        <tr>
            <th></th>
            <th>Nome</th>
            <th>Foto</th>
            <th>Valor</th>
            <th>Descrição</th>
        </tr>
      </thead>
      <tbody>
          @php $total = 0; @endphp
          @foreach ($cart as $indice => $p)
            <tr>
                <td>
                    <a href="{{ route('carrinho_excluir', [ 'indice' => $indice ])}}" class="btn btn-danger btn-sm" alt="deletar">
                        <i class="fa fa-trash"></i>
                    </a>
                </td>
                <td>{{ $p->nome }}</td>
                <td><img src="{{ asset($p->foto)}}" height="50" /></td>
                <td>{{ $p->valor }}</td>
                <td>{{ $p->descricao }}</td>
            </tr>
            @php $total += $p->valor; @endphp
          @endforeach
      </tbody>
      <tfoot>
          <tr>
            <td colspan="5">
                Total do carrinho: R$ {{ $total }}
            </td>
          </tr>
      </tfoot>
  </table>

  <form method="post" action="{{ route('carrinho_finalizar') }}">
    @csrf
    <input type="submit" value="Finaliza Compra" class="btn btn-md btn-success">
  </form>

  @else
    <div>Nenhum item no carrinho</div>
  @endif
@endsection
