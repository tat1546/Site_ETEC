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
            <div class="col bg-white p-4 bg-imagem-con">   
                <h6 class="titulo">CONTABILIDADE</h6>
                <h1 class="subtitulo">Desvende os segredos da Contabilidade: a chave <br>para organizar, calcular e prosperar nos negócios!</h1>
                
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
                        <p class="text-justify gray-text">Matemática e língua portuguesa são disciplinas importantes para entender a contabilidade, que é a ciência responsável por organizar as contas de uma empresa e registrar seus bens patrimoniais (como prédios, veículos e máquinas, entre outros). Além da matemática básica, que serve como ferramenta para calcular o lucro ou o prejuízo de uma empresa, o estudante aprenderá matemática financeira, utilizada para operações de financiamento e cálculo de taxas de juros, por exemplo. O aluno também vai conhecer quais são as regras da contabilidade e todas as leis que estabelecem o que as empresas podem fazer e quais impostos devem pagar. Na área de Informática, o estudante vai aprender a fazer planilhas e a usar programas de computador específicos para a contabilidade.</p>
                        
                        <button type="button" class="btn btn-danger btn-infra">ENTRE EM CONTATO</button>
                    </div>
                     <div class="col" style="padding-top: 100px;">
                        <img src="{{ asset('images/conta2.jpg') }}" alt="Descrição da Imagem" class="img-fluid rounded" width="400" padding-top: 100px;>
                    </div>
                </div>
             </div>
        </div>

        <div class="row">
             <div class="container text-center">
                 <div class="row align-items-center">
                     <div class="col">
                        <p class="text-justify Descubra" style="text-align: center;"> Área de Atuação </p>
                        <p class="text-justify gray-text">Executa processos administrativos e contábeis. Classifica documentos contábeis fiscais e não fiscais. Ajuda na preparação dos documentos necessários para a abertura ou o encerramento de uma empresa. Calcula tributos federais, estaduais e municipais. Presta atendimento à fiscalização e apresenta documentos, livros e relatórios contábeis. Emite notas fiscais, gera boletos bancários e guias para o pagamento dos tributos. Registra os bens comprados e vendidos pela empresa. Organiza e arquiva documentos. Elabora planos de determinação das taxas de depreciação e exaustão dos bens materiais e de amortização dos valores imateriais. Ordena os fatos contábeis por débito e crédito. Apura haveres, direitos e obrigações legais. Atua sempre sob a supervisão de um contabilista.

</p>
                        <p class="text-justify gray-text"><i><span style="color: red;">IMPORTANTE: o curso de Técnico em Contabilidade, desde 02/06/2015, não prevê a obtenção de registro de Conselho da categoria da classe, conforme o disposto na Lei nº 12.249/10, que alterou o Decreto-Lei nº 9295, de 27 de maio de 1946, artigo 12, parágrafo segundo.</span></i></P>
                       
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
                        <p class="text-justify2 gray-text">Em empresas de prestação de serviços, consultorias e/ou auditorias, a contabilidade desempenha um papel crucial, fornecendo insights precisos e estratégicos para impulsionar o crescimento e a eficiência operacional. Conheça como a contabilidade é fundamental nessas organizações para a tomada de decisões informadas e o sucesso empresarial duradouro.</p>
                        
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
