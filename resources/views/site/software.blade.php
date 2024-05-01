<x-site-layout>
  <!--header section start -->
  <div class="header_section header_bg">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
       <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
       </button>
       <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('site.index') }}">Início</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('site.about') }}">Sobre Nós</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('site.software') }}">Nossos Sistemas</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('site.services') }}">Serviços</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="{{ route('site.contact') }}">Contate-nos</a>
          </li>
          </ul>
       </div>
    </nav>
 </div>
 <!--header section end -->
 <!--costume header section start -->
 <div class="costume_header">
  <div class="container">
    <div class="menu_main">
       <ul>
          <li class="active"><a href="{{ route('site.index') }}">Início</a></li>
          <li><a href="{{ route('site.about') }}">Sobre Nós</a></li>
          <li><a href="{{ route('site.software') }}">Nossos Sistemas</a></li>
          <li><a href="{{ route('site.services') }}">Serviços</a></li>
          <li><a href="{{ route('site.contact') }}">Contate-nos</a></li>
       </ul>
    </div>
    <div class="menu_main_1">
       <ul>
          <li><a href="{{ route('dashboard') }}">Entrar</a></li>
       </ul>
    </div>
 </div>
 </div>
 <!--costume header section end -->

    <!--software section start -->
 <div class="software_section layout_padding">
    <div class="container">
       <h1 class="software_taital">Nossos Softwares</h1>
       <p class="software_text">Desenvolvemos uma variedade de softwares personalizados para atender às necessidades de nossos clientes. Seja para automação de processos, gerenciamento de dados ou aplicações web, oferecemos soluções inovadoras e escaláveis.</p>
       <div class="software_section_2 layout_padding">
          <x-software-list/>
       </div>
    </div>
 </div>
 
 <!--software section end -->
</x-site-layout>