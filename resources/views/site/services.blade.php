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

  <!--services section start -->
  <div class="services_section layout_padding">
    <div class="container">
       <div class="row">
          <div class="col-md-6">
             <h1 class="services_taital">O Que Fazemos </h1>
             <div class="image_2"><img src="images/img-2.png"></div>
          </div>
          <div class="col-md-6">
             <div class="box_main">
                <h1 class="technology_text">Tecnologia Moderna</h1>
                <p class="dummy_text">Utilizamos as tecnologias mais modernas para desenvolver nossos sistemas. Usamos o Laravel, o framework PHP mais popular do mundo, para garantir que nossos produtos sejam robustos, escaláveis e de alta performance.</p>
                <p class="dummy_text">O Laravel nos permite criar soluções personalizadas para nossos clientes, garantindo uma base sólida para o desenvolvimento de software.</p>
             </div>
             <div class="readmore_bt"><a href="#">Saiba Mais</a></div>
          </div>            
       </div>
       <div class="row">
          <div class="col-md-6">
             <div class="image_2"><img src="images/img-3.png"></div>
          </div>
          <div class="col-md-6">
             <div class="box_main">
                <h1 class="technology_text">Vida Longa ao UX</h1>
                <p class="dummy_text">A experiência do usuário é fundamental para o sucesso de qualquer software. Nós nos concentramos em criar interfaces intuitivas e experiências suaves para garantir a satisfação do usuário e a eficiência do produto.</p>
             </div>
             <div class="readmore_bt"><a href="#">Saiba Mais</a></div>
          </div>
          
       </div>
       <div class="row">
          <div class="col-md-6">
             <div class="image_2"><img src="images/img-4.png"></div>
          </div>
          <div class="col-md-6">
             <div class="box_main">
                <h1 class="technology_text">Tendências na Web</h1>
                <p class="dummy_text">Estamos sempre de olho nas últimas tendências na web para garantir que nossos produtos e serviços estejam alinhados com as expectativas modernas. Seja em design, desenvolvimento ou usabilidade, usamos as mais recentes práticas para entregar soluções inovadoras e atualizadas.</p>
             </div>
             <div class="readmore_bt"><a href="#">Saiba Mais</a></div>
          </div>
          
       </div>
       <div class="row">
          <div class="col-md-6">
             <div class="image_2"><img src="images/img-5.png"></div>
          </div>
          <div class="col-md-6">
             <div class="box_main">
                <h1 class="technology_text">Marketing Digital</h1>
                <p class="dummy_text">Nossa empresa oferece soluções de marketing digital para ajudar a promover seu negócio online. Criamos estratégias personalizadas que combinam desenvolvimento de software com técnicas de marketing eficazes para aumentar a visibilidade e o engajamento do seu site ou aplicativo.</p>
             </div>
             <div class="readmore_bt"><a href="#">Saiba Mais</a></div>
          </div>
          
       </div>
    </div>
 </div>
 <!--services section end -->


  <!--works section start -->
  <div class="works_section layout_padding">
    <div class="container">
       <h1 class="work_taital">Como Funciona</h1>
       <div class="works_section_2 layout_padding">
          <div class="row">
             <div class="col-sm-4">
                <h3 class="fully_text">Sistemas Sob Demanda</h3>
                <p class="lorem_text">Desenvolvemos sistemas sob demanda para atender às necessidades específicas de nossos clientes. Criamos soluções personalizadas, adaptando-nos a diferentes setores e requisitos.</p>
             </div>
             <div class="col-sm-4">
                <h3 class="fully_text">Templates Prontos para Sites</h3>
                <p class="lorem_text">Usamos templates prontos para criar sites de maneira rápida e eficaz. Basta alterar os textos e ajustar alguns elementos visuais para ter um site funcional em pouco tempo.</p>
             </div>
             <div class="col-sm-4">
                <h3 class="fully_text">Scripts para Automação</h3>
                <p class="lorem_text">Criamos scripts para automação de tarefas, simplificando processos e economizando tempo. Esses scripts são úteis para automatizar fluxos de trabalho repetitivos ou complexos.</p>
             </div>
          </div>
          <div class="row">
             <div class="col-sm-4">
                <h3 class="fully_text">Totalmente Responsivo</h3>
                <p class="lorem_text">Nossos produtos são totalmente responsivos, garantindo que funcionem perfeitamente em todos os dispositivos, de computadores a smartphones.</p>
             </div>
             <div class="col-sm-4">
                <h3 class="fully_text">Bem Documentado</h3>
                <p class="lorem_text">Fornecemos documentação completa para todos os nossos projetos, facilitando a compreensão e a manutenção, tornando mais simples a atualização ou modificação futura.</p>
             </div>
             <div class="col-sm-4">
                <h3 class="fully_text">Fácil de Usar</h3>
                <p class="lorem_text">Nossos produtos são projetados para serem fáceis de usar, com interfaces intuitivas e fluxos de trabalho simples, garantindo uma experiência suave para o usuário.</p>
             </div>
          </div>
       </div>
    </div>
 </div>
 
 
 <!--works section end -->
</x-site-layout>