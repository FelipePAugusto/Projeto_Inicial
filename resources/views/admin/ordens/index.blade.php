@extends('layout.site')

@section('titulo','Ordens de Serviços')

@section('conteudo')
  <div class="container">
    <h3 class="center">Lista de Ordens de Serviços</h3>
    <div class="row">
      <table>
        <thead>
          <tr>
            <th>Id</th>
            <th>Tipo</th>
            <th>Observação</th>
            <th>Assinatura</th>
            <th>Status</th>
            <th>Data</th>
          </tr>
        </thead>
        <tbody>
          @foreach($registros as $registro)
            <tr>
              <td>{{ $registro->id }}</td>
              <td>{{ $registro->tipo }}</td>
              <td>{{ $registro->observacao }}</td>
              <td>{{ $registro->assinatura }}</td>
              <td>{{ $registro->status }}</td>
              <td>{{ $registro->data }}</td>
              <td>
                <a class="btn deep-orange" href="{{ route('admin.ordens.editar',$registro->id) }}">Editar</a>
                <a class="btn red" href="{{ route('admin.ordens.deletar',$registro->id) }}">Deletar</a>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <div class="row">
      <a class="btn blue" href="{{ route('admin.ordens.adicionar') }}">Adicionar O.S</a>

    </div>
    <div class="row">
      
    </div>

  </div>




@endsection
