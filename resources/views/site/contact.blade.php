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
      @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
       <div class="row">
          <div class="col-md-6 padding_0">
             <div><img src="images/img-10.png" class="image_10" alt="Imagem ilustrativa para contato"></div>
          </div>
          <div class="col-md-6">
            <div class="email_text">
               <form action="{{route('site.contact-post')}}" method="post">
                  @csrf
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Seu Nome" value="{{old('name')}}" name="name" required >
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Seu Email" name="email" value="{{old('email')}}" required>
                  </div>
                  <div class="form-group">
                     <input type="text" class="email-bt" placeholder="Seu Telefone" name="phone" value="{{old('phone')}}" required>
                  </div>
                  <div class="form-group">
                     <textarea required class="massage-bt" value="{{old('message')}}" placeholder="Sua Mensagem (Detalhe seu projeto, orçamento, etc.)" rows="5" id="comment" name="message"></textarea>
                  </div>
                  <div class="send_btn"><button class="subscribe_bt subscribe_btn" style="" type="submit">Enviar Solicitação</button></div>
               </form>
             </div>
          </div>
       </div>
    </div>
 </div>
 <!--contact section end -->
</x-site-layout>