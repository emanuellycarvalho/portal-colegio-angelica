@extends('templates.admin')

@section('place') <i class="icon_phone"></i> Contatos @endsection('place')
@section('title') Contatos @endsection('title')


@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr>
            <th><i class="icon_profile"></i> Nome</th>
            <th><i class="icon_mobile"></i> Telefone</th>
            <th><i class="icon_mail_alt"></i> Email</th>
            <th><i class="icon_cogs"></i> Ações </th>
          </tr>
          <tr>
            <td>Angeline Mcclain</td>
            <td>176-026-5992</td>
            <td>dale@chief.info</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning" href="#"><i class="icon_pencil"></i></a>
                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Angeline Mcclain</td>
            <td>176-026-5992</td>
            <td>dale@chief.info</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning" href="#"><i class="icon_pencil"></i></a>
                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>Angeline Mcclain</td>
            <td>176-026-5992</td>
            <td>dale@chief.info</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning" href="#"><i class="icon_pencil"></i></a>
                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </section>
  </div>
</div>
@endsection('content')