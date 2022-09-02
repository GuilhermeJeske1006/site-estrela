@extends('components.corpo')
@section('corpo')

<body>
    @component('components.topo')@endcomponent

    @component('components.bannerInterno', ['tituloBanner' => $tituloBanner])@endcomponent
    
    <section class="ftco-section bg-light">
        <div class="container">
          <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-12 text-center heading-section heading-section-light ftco-animate">
              <h2 class="mb-2"><span class="px-4">Publicações</span></h2>
              <span class="subheading">Nossas publicações do blog</span>
            </div>
          </div>
          <div class="row d-flex">
            @for ($i = 0; $i < 5; $i++)
              @component('Blog.apoio.card')@endcomponent
            @endfor
          </div>
        </div>
        @component('components.paginacao')@endcomponent
      </section>
  </body>
@endsection