@extends('templates.admin')

@section('place') <i class="icon_documents"></i> Comunicados oficiais @endsection('place')
@section('title') Comunicados oficiais @endsection('title')


@section('content')

<div class="row">
  <div class="col-lg-4">
    <section class="panel">
      <header class="panel-heading">
        Últimos Comunicados
      </header>
      <div class="list-group">
        <a class="list-group-item" href="javascript:;">
          <h4 class="list-group-item-heading">Exemplo</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a class="list-group-item" href="javascript:;">
          <h4 class="list-group-item-heading">Exemplo</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
        <a class="list-group-item" href="javascript:;">
          <h4 class="list-group-item-heading">Exemplo</h4>
          <p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.</p>
        </a>
      </div>
    </section>
  </div>
  <div class="col-md-8 portlets">
    <div class="panel panel-default">
      <div class="panel-heading">
        <div class="pull-left">Publicar novo comunicado</div>
        <div class="clearfix"></div>
      </div>
      <div class="panel-body">
        <div class="padd">

          <div class="form quick-post">
            <form class="form-horizontal">
              <!-- Title -->
              <div class="form-group">
                <label class="control-label col-lg-2" for="title">Manchete*</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="title" placeholder="Insira o título do comunicado">
                </div>
              </div>

              <!-- Date -->
              <div class="form-group">
                <label class="control-label col-lg-2">Data*</label>
                <div class="col-lg-6">
                  <input id="date" type="date" value="{{@date('d/m/Y')}}" size="16" class="form-control">
                </div>
              </div>
              <!-- Lead -->
              <div class="form-group">
                <label class="control-label col-lg-2" for="lead">Resumo*</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="lead" placeholder="Resuma o comunicado em uma linha">
                </div>
              </div>
              <!-- Content -->
              <div class="form-group">
                <label class="control-label col-lg-2" for="content">Conteúdo*</label>
                <div class="col-lg-10">
                  <textarea class="form-control" id="content" rows="6"></textarea>
                </div>
              </div>
              <!-- Imagens -->
              <div class="form-group">
                <label class="control-label col-lg-2" for="images">Imagens</label>
                <div class="col-lg-10">
                  <input type="file" name="images[]" id="images" multiple="multiple">
                  <p class="help-block">Apenas jpeg, jpg e png. Qualquer proporção.</p>
                </div>
              </div>
              <!-- Tags -->
              <div class="form-group">
                <label class="control-label col-lg-2" for="tags">Tags</label>
                <div class="col-lg-10">
                  <input type="text" class="form-control" id="tags" placeholder="Insira as tags do comunicado separando-as por vírgula">
                </div>
              </div>

              <!-- Buttons -->
              <div class="form-group">
                <!-- Buttons -->
                <div class="col-lg-offset-2 col-lg-9">
                  <button type="submit" class="btn btn-primary">Publicar</button>
                  <!-- <button type="submit" class="btn btn-danger">Salvar rascunho</button> -->
                  <button type="reset" class="btn btn-default">Limpar</button>
                </div>
              </div>
            </form>
          </div>


        </div>
        <div class="widget-foot">
          <!-- Footer goes here -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection('content')