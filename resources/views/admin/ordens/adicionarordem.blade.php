@extends('layout.site')

@section('titulo','Ordem de Serviço')

@section('conteudo')
  <div class="container">
    <h3 class="center">Adicionar Ordem de Serviço</h3>
    <div class="row">
      <form class="" action="{{route('admin.ordens.salvar')}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        @include('admin.ordens._form')
        <button class="btn deep-orange">Salvar</button>
      </form>
    </div>
  </div>




@endsection
