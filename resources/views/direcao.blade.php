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
                <h6 class="titulo">DEPARTAMENTOS</h6>
                <p class="text-justify" style="color: white;  font-size: 35px; font-weight: bold;">Equipe Direção</p>
                <h1 style=" color: white; font-weight: normal;  font-size: 20px; margin-left: 100px; text-align: left; ">A Direção Escolar é o departamento executivo encarregado da organizar as atividades administrativas e pedagógicas da Etec. Suas atribuições, indicação e designação, são realizadas de acordo com o Capítulo IV, Seção I do Regimento Comum das Etecs (Deliberação CEETEPS nº 87, de 08 de dezembro de 2022).</h1>
                
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
                
                        <p class="text-justify1" style="font-size: 35px; font-weight: bold; padding-top: 100px;"  >Atribuições da Direção Escolar</p>
                        <p class="text-justify1 gray-text">De acordo com o artigo 20 do Regimento Comum das Etecs, o Diretor de Etec, sem prejuízo de outras constantes em documento próprio do CEETEPS e da legislação, terá as seguintes atribuições:</p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">1 – garantir as condições para o desenvolvimento da gestão democrática do ensino, na forma prevista pela legislação e neste Regimento; </p>
                        <p class="text-justify1" style="font-size: 20px; font-weight: normal;"> 2 – promover a elaboração do projeto político-pedagógico da escola;  </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">3 – coordenar a elaboração, o acompanhamento, a avaliação e o controle da execução do Plano Plurianual de Gestão;</p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">4 – gerenciar os recursos físicos, materiais, humanos e financeiros para atender às necessidades da escola a curto, médio e longo prazos;</p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">5 – coordenar o planejamento, execução, controle e avaliação das atividades da escola com o objetivo de garantir a melhoria dos processos; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">6 – garantir o cumprimento dos conteúdos curriculares, das cargas horárias e dos dias letivos previstos na legislação vigente; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">7 – garantir os  meios  para  a  recuperação  de  alunos  de  menor  rendimento  e  em progressão parcial, seja ela na forma presencial ou virtual. </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">8 – assegurar o cumprimento da legislação, bem como dos regulamentos, diretrizes e normas emanadas da administração superior e da Administração Central do CEETEPS; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">9 – expedir   diplomas, certificados   e   outros   documentos   escolares, responsabilizando-se por sua autenticidade e exatidão; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">10 – promover estudos fundamentados por indicadores institucionais e gerenciar ações visando à oferta de cursos e seu contínuo aprimoramento, assim como de programas, dos recursos físicos, materiais e humanos que compõem a escola; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">11 – administrar e responsabilizar-se pelo patrimônio do CEETEPS, observadas as normas e diretrizes legais e infralegais aplicáveis, fomentando estratégias para controle, manutenção, preservação e desfazimento dos bens inservíveis; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">12 – promover ações para a integração escola-família e comunidade-empresa, apoiado em indicadores de fontes reconhecidas; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">13 – coordenar a elaboração de projetos, submetendo-os à aprovação dos órgãos competentes, acompanhar seu desenvolvimento e avaliar seus resultados; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">14 – criar condições e estimular experiências inovadoras para o aprimoramento do processo educacional; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">15 – integrar as ações dos serviços prestados pela escola; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">16 – criar procedimentos que favoreçam a comunicação e o fluxo de informações junto à Comunidade Escolar; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">17 – convocar para as reuniões ordinárias e extraordinárias, de forma presencial ou virtual, os representantes dos órgãos colegiados discentes, docentes, servidores e membros dos demais segmentos da comunidade escolar; </p>
                        <p class="text-justify1 " style="font-size: 20px; font-weight: normal;">18 – desempenhar outras atividades correlatas e afins. </p>

                        <p class="text-justify1" style="font-size: 35px; font-weight: bold;"  >Diretor(a) da Etec</p>
                        <p class="text-justify1 gray-text">Amanda Bueno </p><br><br>
                        
                        
                        <p class="text-justify1" style="font-size: 35px; font-weight: bold;"  >Assessor Técnico Administrativo II </p>
                        <p class="text-justify1 gray-text">Patrick Moreno da Silva </p><br><br>

                        <p class="text-justify1" style="font-size: 35px; font-weight: bold;"  >Contato </p>
                        <p class="text-justify1 gray-text"><b>E-mail:</b>  e211dir@cps.sp.gov.br</p>
                        <p class="text-justify1 gray-text"><b>Telefones:</b>  (11) 2045-4016 | (11) 2045-4011</p><br><br>
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