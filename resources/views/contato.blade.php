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
            <div class="col bg-white p-4 bg-imagem-dir">   
                <h6 class="titulo">CONTATO</h6>
                <p class="text-justify" style="color: white;  font-size: 35px; font-weight: bold;">Contato</p>
                <h1 style=" color: white; font-weight: normal;  font-size: 20px; margin-left: 100px; text-align: left; ">Entre em contato com a ETEC Zona Leste</h1>
                
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
                
                        <p class="text-justify1" style="font-size: 35px; font-weight: bold; padding-top: 100px;"  >Contato</p>
                        <p class="text-justify1 gray-text"><b>Endereço:</b>  Av. Águia de Haia, 2633 - Cidade Antônio Estêvão de Carvalho, São Paulo - SP, 03694-000</p>
                        <p class="text-justify1 gray-text"><b>E-mail:</b>  e211dir@cps.sp.gov.br</p>
                        <p class="text-justify1 gray-text"><b>Telefones:</b>  (11) 2045-4016 | (11) 2045-4011 (11) 2045-4000 |</p><br><br>
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
s