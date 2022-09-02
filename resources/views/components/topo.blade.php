<nav class="navbar navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
  <div class="container d-flex align-items-stretch">
    <div class="col-3 d-flex align-items-center">
      <a class="navbar-brand" href="{{route('index')}} ">Estrela<span><br> do Amanhã</span></a>
    </div>
    <div class="col-9 d-flex align-items-center text-right">
      <ul class="ftco-social mt-2 mr-3">
        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
      <button class="navbar-toggler d-flex align-items-center" type="button" data-toggle="collapse"
        data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="pt-1 mr-1">Menu</span> <span class="oi oi-menu"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active"><a href="{{route('index')}} " class="nav-link">Inicial</a></li>
        <li class="nav-item"><a href="{{route('conteudo')}} " class="nav-link">Sobre</a></li>
        <li class="nav-item"><a href="{{route('lista')}} " class="nav-link">Blog</a></li>
        <li class="nav-item"><a href="{{route('contato')}} " class="nav-link">Contato</a></li>
      </ul>
    </div>
  </div>
</nav>