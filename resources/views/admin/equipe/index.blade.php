@extends('templates.admin')

@section('place') <i class="icon_group"></i> Equipe @endsection('place')
@section('title') Equipe @endsection('title')


@section('content')

<div class="row">
  <div class="col-lg-12">
    <section class="panel">
      <table class="table table-striped table-advance table-hover">
        <tbody>
          <tr>
            <th><i class="icon_camera_alt"></i> Foto</th>
            <th><i class="icon_profile"></i> Nome</th>
            <th><i class="icon_menu"></i> Descrição</th>
            <th><i class="icon_cogs"></i> Ações</th>
          </tr>
          <tr>
            <td>
                <span class="profile-ava">
                    <img alt="" class="simple" src="{{ asset('img/admin/avatar1_small.jpg') }}">
                </span>
            </td>
            <td>Sandra</td>
            <td>Diretora</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning" href="#"><i class="icon_pencil"></i></a>
                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <span class="profile-ava">
                    <img alt="" class="simple" src="{{ asset('img/admin/avatar1_small.jpg') }}">
                </span>
            </td>
            <td>Sandra</td>
            <td>Diretora</td>
            <td>
              <div class="btn-group">
                <a class="btn btn-warning" href="#"><i class="icon_pencil"></i></a>
                <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
              </div>
            </td>
          </tr>
          <tr>
            <td>
                <span class="profile-ava">
                    <img alt="" class="simple" src="{{ asset('img/admin/avatar1_small.jpg') }}">
                </span>
            </td>
            <td>Sandra</td>
            <td>Diretora</td>
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