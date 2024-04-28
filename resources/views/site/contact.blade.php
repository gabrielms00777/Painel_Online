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

  <!--contact section start -->
  <div id="contact" class="contact_section layout_padding">
    <div class="container">
       <h1 class="work_taital">Entre em Contato</h1>
       <p style="text-align: center;">Entre em contato conosco para discutir seu projeto, solicitar um orçamento ou esclarecer dúvidas. Estamos aqui para ajudar.</p>
    </div>
 </div>
 <div class="contact_section_2">
    <div class="container-fluid">
       <div class="row">
          <div class="col-md-6 padding_0">
             <div><img src="images/img-10.png" class="image_10" alt="Imagem ilustrativa para contato"></div>
          </div>
          <div class="col-md-6">
             <div class="email_text">
                <div class="form-group">
                   <input type="text" class="email-bt" placeholder="Seu Nome" name="Name">
                </div>
                <div class="form-group">
                   <input type="text" class="email-bt" placeholder="Seu Email" name="Email">
                </div>
                <div class="form-group">
                   <input type="text" class="email-bt" placeholder="Seu Telefone" name="Phone">
                </div>
                <div class="form-group">
                   <textarea class="massage-bt" placeholder="Sua Mensagem (Detalhe seu projeto, orçamento, etc.)" rows="5" id="comment" name="Message"></textarea>
                </div>
                <div class="send_btn"><a href="#">Enviar Solicitação</a></div>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--contact section end -->
</x-site-layout>