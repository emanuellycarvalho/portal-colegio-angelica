@extends('templates.public')

@section('title') Portal Colégio Angélica @endsection('title')

@section('content')

<!-- ======= Hero Section ======= -->
<section id="hero">
  <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

    <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    <div class="carousel-inner" role="listbox">

      <!-- Slide 1 -->
      <div class="carousel-item active" style="background-image: url({{ asset('img/public/working-on-it.png') }})">
        <div class="container">
          <h2>Ops!</h2>
          <p>Ainda estamos trabalhando nessa página e em breve ela estará disponível para visualização. Agradecemos pela paciência.</p>
          <a href="{{ url('/') }}" class="btn-get-started scrollto">Voltar ao início</a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Hero -->




@endsection('content')