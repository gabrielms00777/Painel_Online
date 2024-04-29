<x-site-layout>
    <!--header section start -->
    <div class="header_section ">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="logo"><a href="{{ route('site.index') }}"><img src="images/logo.png"></a></div>
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
        <div class="banner_main">
            <h1 class="banner_taital">Construa o Melhor</h1>
            <h1 class="banner_taital_1">Software</h1>
            <p class="banner_text">Somos especialistas em criar software sob medida para atender às suas necessidades.
                De sites a sistemas complexos, nossa equipe está pronta para trazer suas ideias à vida.</p>
            <div class="btn_main">
                <div class="more_bt"><a href="#contact">Contate-nos</a></div>
                <div class="contact_bt"><a href="#contact">Peça um orçamento</a></div>
            </div>
        </div>

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
    <div class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="about_taital">Sobre a Empresa</h1>
                    <p class="about_text">Somos uma empresa de desenvolvimento de software dedicada a criar soluções
                        inovadoras e personalizadas para nossos clientes. Com anos de experiência no mercado, nossa
                        equipe é composta por profissionais qualificados que trabalham juntos para atender às
                        necessidades exclusivas de cada projeto. Desde sites até sistemas completos, entregamos
                        qualidade e excelência em tudo o que fazemos.</p>
                    <div class="read_bt"><a href="#">Leia Mais</a></div>
                </div>
                <div class="col-md-6">
                    <div><img src="images/img-1.png" class="image_1" alt="Imagem de uma equipe trabalhando"></div>
                </div>
            </div>
        </div>
    </div>


    <!--about section end -->
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
                        <p class="dummy_text">Utilizamos as tecnologias mais modernas para desenvolver nossos sistemas.
                            Usamos o Laravel, o framework PHP mais popular do mundo, para garantir que nossos produtos
                            sejam robustos, escaláveis e de alta performance.</p>
                        <p class="dummy_text">O Laravel nos permite criar soluções personalizadas para nossos clientes,
                            garantindo uma base sólida para o desenvolvimento de software.</p>
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
                        <p class="dummy_text">A experiência do usuário é fundamental para o sucesso de qualquer
                            software. Nós nos concentramos em criar interfaces intuitivas e experiências suaves para
                            garantir a satisfação do usuário e a eficiência do produto.</p>
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
                        <p class="dummy_text">Estamos sempre de olho nas últimas tendências na web para garantir que
                            nossos produtos e serviços estejam alinhados com as expectativas modernas. Seja em design,
                            desenvolvimento ou usabilidade, usamos as mais recentes práticas para entregar soluções
                            inovadoras e atualizadas.</p>
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
                        <p class="dummy_text">Nossa empresa oferece soluções de marketing digital para ajudar a
                            promover seu negócio online. Criamos estratégias personalizadas que combinam desenvolvimento
                            de software com técnicas de marketing eficazes para aumentar a visibilidade e o engajamento
                            do seu site ou aplicativo.</p>
                    </div>
                    <div class="readmore_bt"><a href="#">Saiba Mais</a></div>
                </div>

            </div>
        </div>
    </div>
    <!--services section end -->
    <!--software section start -->
    <div class="software_section layout_padding">
        <div class="container">
            <h1 class="software_taital">Nossos Softwares</h1>
            <p class="software_text">Desenvolvemos uma variedade de softwares personalizados para atender às
                necessidades de nossos clientes. Seja para automação de processos, gerenciamento de dados ou aplicações
                web, oferecemos soluções inovadoras e escaláveis.</p>
            <div class="software_section_2 layout_padding">
                <div class="owl-carousel">
                    <div>
                        <img src="images/img-6.png" class="image_6" alt="Software de automação">
                        <h4 class="ipsum_text">Automação de Processos</h4>
                    </div>
                    <div>
                        <img src="images/img-7.png" class="image_6" alt="Software de gerenciamento de dados">
                        <h4 class="ipsum_text">Gerenciamento de Dados</h4>
                    </div>
                    <div>
                        <img src="images/img-8.png" class="image_6" alt="Aplicações web">
                        <h4 class="ipsum_text">Aplicações Web</h4>
                    </div>
                    <div>
                        <img src="images/img-8.png" class="image_6" alt="Aplicações web">
                        <h4 class="ipsum_text">Aplicações Web</h4>
                    </div>
                    <div>
                        <img src="images/img-8.png" class="image_6" alt="Aplicações web">
                        <h4 class="ipsum_text">Aplicações Web</h4>
                    </div>
                    <div>
                        <img src="images/img-8.png" class="image_6" alt="Aplicações web">
                        <h4 class="ipsum_text">Aplicações Web</h4>
                    </div>
                    <div>
                        <img src="images/img-8.png" class="image_6" alt="Aplicações web">
                        <h4 class="ipsum_text">Aplicações Web</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--software section end -->
    <!--works section start -->
    <div class="works_section layout_padding">
        <div class="container">
            <h1 class="work_taital">Como Funciona</h1>
            <div class="works_section_2 layout_padding">
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="fully_text">Sistemas Sob Demanda</h3>
                        <p class="lorem_text">Desenvolvemos sistemas sob demanda para atender às necessidades
                            específicas de nossos clientes. Criamos soluções personalizadas, adaptando-nos a diferentes
                            setores e requisitos.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="fully_text">Templates Prontos para Sites</h3>
                        <p class="lorem_text">Usamos templates prontos para criar sites de maneira rápida e eficaz.
                            Basta alterar os textos e ajustar alguns elementos visuais para ter um site funcional em
                            pouco tempo.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="fully_text">Scripts para Automação</h3>
                        <p class="lorem_text">Criamos scripts para automação de tarefas, simplificando processos e
                            economizando tempo. Esses scripts são úteis para automatizar fluxos de trabalho repetitivos
                            ou complexos.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <h3 class="fully_text">Totalmente Responsivo</h3>
                        <p class="lorem_text">Nossos produtos são totalmente responsivos, garantindo que funcionem
                            perfeitamente em todos os dispositivos, de computadores a smartphones.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="fully_text">Bem Documentado</h3>
                        <p class="lorem_text">Fornecemos documentação completa para todos os nossos projetos,
                            facilitando a compreensão e a manutenção, tornando mais simples a atualização ou modificação
                            futura.</p>
                    </div>
                    <div class="col-sm-4">
                        <h3 class="fully_text">Fácil de Usar</h3>
                        <p class="lorem_text">Nossos produtos são projetados para serem fáceis de usar, com interfaces
                            intuitivas e fluxos de trabalho simples, garantindo uma experiência suave para o usuário.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!--works section end -->
    <!--contact section start -->
    <div id="contact" class="contact_section layout_padding">
        <div class="container">
            <h1 class="work_taital">Entre em Contato</h1>
            <p style="text-align: center;">Entre em contato conosco para discutir seu projeto, solicitar um orçamento
                ou esclarecer dúvidas. Estamos aqui para ajudar.</p>
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
                        <form action="{{ route('site.contact-post') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Seu Nome"
                                    value="{{ old('name') ?? '' }}" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Seu Email" name="email"
                                    value="{{ old('email') ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="email-bt" placeholder="Seu Telefone" name="phone"
                                    value="{{ old('phone') ?? '' }}" required>
                            </div>
                            <div class="form-group">
                                <textarea required class="massage-bt" placeholder="Sua Mensagem (Detalhe seu projeto, orçamento, etc.)"
                                    rows="5" id="comment" name="message">{{ old('message') ?? '' }}</textarea>
                            </div>
                            <div class="send_btn"><button class="subscribe_bt subscribe_btn" style=""
                                    type="submit">Enviar Solicitação</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--contact section end -->
</x-site-layout>
