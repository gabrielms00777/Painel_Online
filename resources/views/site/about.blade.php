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
 <!-- about section start -->
 <div class="about_section layout_padding padding_top_90">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h1 class="about_taital">About Softwares</h1>
             <p class="about_text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in
                a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a
                Latin professor at Hampden</p>
             <div class="read_bt"><a href="#">Read More</a></div>
          </div>
          <div class="col-md-6">
             <div><img src="images/img-1.png" class="image_1"></div>
          </div>
       </div>
    </div>
 </div>
 <!--about section end -->
</x-site-layout>