<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>
<title>Document</title>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <div class="container text-center">
        <div class="row">
            <div class="col">
               
                <nav class="navbar navbar-expand-lg navbar-light bg-white navbar-custom">
                    <div class="container">
                        <a class="navbar-brand" href="#">
                            <img src="{{ asset('images/logo.png') }}" alt="ETEC zona leste Logo" width="100" height="90">
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="nav nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('principal') }}">Início</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Cursos
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('administracao') }}">Administração</a></li>
                                        <li><a class="dropdown-item" href="{{ route('contabilidade') }}">Contabilidade</a></li>
                                        <li><a class="dropdown-item" href="{{ route('sistemas') }}">Desenvolvimento de Sistemas</a></li>
                                        <li><a class="dropdown-item" href="{{ route('logistica') }}">Logística</a></li>
                                        <li><a class="dropdown-item" href="{{ route('humanos') }}">Recursos Humanos</a></li>
                                        <li><a class="dropdown-item" href="{{ route('juridicos') }}">Serviços Jurídicos</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown ">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Instituição</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('historia') }}">Nossa História</a></li>
                                        <li><a class="dropdown-item" href="{{ route('infraestrutura') }}">Infraestrutura</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Departamentos</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="{{ route('apm') }}">APM - Associação de Pais e Mestres</a></li>
                                        <li><a class="dropdown-item" href="{{ route('cursos') }}">Coordenação de Cursos</a></li>
                                        <li><a class="dropdown-item" href="{{ route('direcao') }}">Direção</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('oportunidades') }}">Oportunidades</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('contato') }}">Contato</a>
                                </li>
                            </ul>
                            <ul class="navbar-nav ms-auto nav-underline">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('vestibulinho') }}">Vestibulinho</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>

            </div>
        </div>
    
        <div class="row">
            <div class="col bg-white p-4 bg-imagem-jud">   
                <h6 class="titulo">SERVIÇOS JURÍDICOS</h6>
                <h1 class="subtitulo">Explorando o Mundo Jurídico: Curso Técnico em <br>Direito e Administração – Uma Jornada pelos Pilares <br> Legais da Sociedade!</h1>
                
            </div>
        </div>
    
        <div class="row container text-center bg-body-tertiary">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid bg-body-tertiary" >
                    <form class="d-flex bg-body-tertiary" role="search" style="display: flex; justify-content: center; margin-top: 10px;">
                        <input class="form-control me-2" type="search" placeholder="O que está buscando ?" aria-label="Search">
                        <button type="button" class="btn btn-with-icon">
                    </form>
                </div>
            </nav>
        </div>

    
        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                     <div class="col">
                        <p class="text-justify Sobre"> Sobre </p>
                        <p class="text-justify gray-text">Como o foco do curso está nas leis e normas, o aluno vai estudar as áreas do Direito. Vai aprender sobre a Constituição Federal (direito constitucional), a punição aos crimes (direito penal), as regras para relações e disputas entre as pessoas e também as normas para disputas e questões familiares (direito civil), o funcionamento dos órgãos públicos (direito administrativo), as regras para os negócios entre empresas e pessoas (direito empresarial), como deve ser a relação entre patrão e empregado, considerando direitos e deveres de cada um (direito do trabalho), cobrança de tributos, como os impostos (direito tributário) e a proteção garantida aos consumidores (direito do consumidor), entre outros assuntos.</p>
                        <p class="text-justify gray-text">O estudante vai conhecer também como são elaborados e redigidos os processos, contratos e documentos jurídicos. Além de aprender sobre as leis, o aluno vai estudar conceitos de administração de empresas, matemática financeira, técnicas de atendimento ao cliente e inglês instrumental. A língua portuguesa é fundamental.</p>
                       <a href="{{ route('contato') }}" class="btn btn-danger btn-infra">ENTRE EM CONTATO</a>
                    </div>
                     <div class="col" style="padding-top: 100px;">
                        <img src="{{ asset('images/juridicos3.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
                    </div>
                </div>
             </div>
        </div>

        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                     <div class="col">
                        <p class="text-justify Descubra" style="text-align: center;"> Área de Atuação </p>
                        <p class="text-justify gray-text">Auxilia o advogado e oferece apoio técnico e administrativo a empresas. Presta atendimento ao público; verifica os prazos de cada etapa de um processo judicial; calcula valores dos honorários dos advogados e dos custos de um processo; recebe e envia documentos, registrando a movimentação em sistemas ou livros de protocolo; redige contratos, ofícios, processos e cartas comerciais e arquiva processos, entre outras atividades.</p>
                       
                       
                    </div>
                     
                </div>
             </div>
        </div>

        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                    <div class="col" style="padding-top: 100px; margin-left: 40px;">
                        <img src="{{ asset('images/conta3.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
                    </div>
                    <div class="col">
                        <p class="text-justify2 Descubra2"> Onde Trabalhar</p>
                        <p class="text-justify2 gray-text">Nos setores jurídico, de recursos humanos e de administração de empresas públicas e privadas, em escritórios de advocacia, empresas de auditoria jurídica, fóruns e cartórios.</p>
                        
                    </div>
                     
                </div>
             </div>
        </div>

        

        <div class="row">
        <div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            <p class="text-justify Descubra3"> Nossos Cursos </p>
            
            <div class="row cartao">
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..." style="width: 100px;">
                        <div class="card-body">
                        <h5>Desenvolvimento de Sistemas</h5>
                            <p class="card-text">É o profissional que análisa e projeta sistemas .Constrói , documenta e faz programa.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..." style="width: 100px;">
                        <div class="card-body">
                        <h5>Contabilidade</h5>
                            <p class="card-text">Matemática e língua portuguesa são disciplinas importantes para entender a contabilidade.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..."  style="width: 100px;">
                        <div class="card-body">
                            <h5>Logística</h5>
                            <p class="card-text">É o planejamento do caminho feito por um produto ou serviço até chegar ao cliente de forma organizada.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
        
            
            <div class="row cartao">
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..." style="width: 100px;">
                        <div class="card-body">
                        <h5>Recursos Humanos</h5>
                            <p class="card-text">Anuncia vagas de emprego, descrevendo as atribuições do cargo a ser preenchido; aplica testes em processos seletivos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..." style="width: 100px;">
                        <div class="card-body">
                        <h5>Serviços Jurídicos</h5>
                            <p class="card-text">O estudante vai conhecer também como são elaborados e redigidos os processos, contratos e documentos jurídicos.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card" style="width: 16rem;">
                        <img src="{{ asset('images/logo2.png') }}" class="card-img-top" alt="..."  style="width: 100px;">
                        <div class="card-body">
                            <h5>Administração</h5>
                            <p class="card-text">O aluno vai aprender ainda a analisar as chances de um negócio ou produto ser bem-sucedido e o comportamento do consumidor.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="container text-center">
    <div class="row align-items-center">
        <div class="col">
            <div class="embed-responsive embed-responsive-16by9 rounded">
                <p class="text-justify Descubra" style="text-align: center;"> Venha Conhecer Nossa Unidade</p>
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14633.035225174068!2d-46.475812!3d-23.5231922!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce616495555555%3A0x8076d1577db86cf1!2sEtec%20da%20Zona%20Leste!5e0!3m2!1spt-BR!2sbr!4v1712002347925!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>


<div class="container">
<footer class="footer-custom text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="lead"></p>
                <p>&copy; 2024 Etec Zona Leste. Todos os direitos reservados.</p>
                <p>Desenvolvido por Tatiane Guzman Machaca - 3ºDS ETEC Zona Leste</p>
            </div>
        </div>
    </div>
</footer>
</div>
</div>

    </div>
 

</body>
</html>
