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
            <div class="col bg-white p-4 bg-imagem">   
                <h6 class="titulo">ETEC ZONA LESTE</h6>
                <h1 class="subtitulo">Conheça a Etec Zona Leste: Excelência em Educação <br> Técnica na Região da Zona Leste de São Paulo</h1>
                <a href="{{ route('historia') }}" class="btn btn-danger btn-esquerda">CONHEÇA A NOSSA HISTÓRIA</a>
            </div>
        </div>
    
        <div class="row container text-center bg-body-tertiary">
            <nav class="navbar bg-body-tertiary">
                <div class="container-fluid bg-body-tertiary" >
                    <form class="d-flex bg-body-tertiary" role="search" style="display: flex; justify-content: center; margin-top: 10px;">
                        <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Search">
                        <button type="button" class="btn btn-with-icon">
                    </form>
                </div>
            </nav>
        </div>

    
        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                     <div class="col">
                        <p class="text-justify Descubra"> Descubra um futuro brilhante na ETEC Zona Leste </p>
                        <p class="text-justify gray-text">Na ETEC Zona Leste, a excelência educacional é a nossa prioridade máxima. Nossos cursos técnicos são ministrados por professores altamente qualificados, proporcionando uma educação satisfatória que combina conhecimentos acadêmicos sólidos com habilidades práticas essenciais para o mercado de trabalho.</p>
                    </div>
                     <div class="col" style="padding-top: 100px;">
                        <img src="{{ asset('images/ETEC1.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
                    </div>
                </div>
             </div>
        </div>

        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                    <div class="col" style="padding-top: 100px; margin
-left: 40px;">
                        <img src="{{ asset('images/ETEC2.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
                    </div>
                    <div class="col">
                        <p class="text-justify2 Descubra2"> Aprendizados para além da sala de aula </p>
                        <p class="text-justify2 gray-text">Buscamos levar o conhecimento para além da sala de aula tradicional. Incentivamos o cultivo de conexões valiosas por meio de networking e oportunidades de carreira. Além do sucesso acadêmico, nos preocupamos com o desenvolvimento pessoal de nosso corpo estudantil, oferecendo suporte abrangente, orientação vocacional e programas extracurriculares.</p>
                    </div>
                     
                </div>
             </div>
        </div>
        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                     <div class="col">
                        <p class="text-justify Descubra"> Infraestrutura Moderna </p>
                        <p class="text-justify gray-text">Contamos com uma infraestrutura moderna, laboratórios e salas equipadas com televisões, computadores, notebooks, impressoras 3D e muitos outros componentes propícios aos projetos que desenvolvemos durante a jornada dos estudantes. Na ETEC Zona Leste, você encontrará um ambiente favorável para o impulsionar seu crescimento acadêmico e profissional.</p>
                        <a href="{{ route('infraestrutura') }}" class="btn btn-danger btn-infra">CONHEÇA NOSSA INFRAESTRUTURA</A>
           
                    </div>
                     <div class="col" style="padding-top: 100px;">
                        <img src="{{ asset('images/ETEC3.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
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
